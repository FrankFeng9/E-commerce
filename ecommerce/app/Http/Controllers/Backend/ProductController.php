<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\BrandRepository;
use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImg;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * @var BrandRepository
     */
    private $brandRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(
        BrandRepository $brandRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->brandRepository= $brandRepository;
        $this->categoryRepository= $categoryRepository;
    }

	public function AddProduct()
    {
		$categories = Category::latest('id')->get();
		$brands = Brand::latest('id')->get();
        $usageRel = Product::usageRel();
        $osRel = Product::osRel();

        $vars = [
            'categories' => $categories,
            'brands' => $brands,
            'usageRel' => $usageRel,
            'osRel' => $osRel,
        ];
		return view('backend.product.product_add', $vars);
	}


	public function StoreProduct(Request $request)
    {
        $image = $request->file('product_thambnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/products/thambnail/'.$name_gen);
    	$save_url = 'upload/products/thambnail/'.$name_gen;

        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'product_name_en' => $request->product_name_en,
            'product_slug_en' => '',
            'os' => $request->os ?: '',
            'usage' => $request->usage,

            'product_code' => mt_rand(100000, 999999),

            'selling_price' => $request->selling_price,
            'short_descp_en' => $request->short_descp_en,
            'long_descp_en' => $request->long_descp_en,

            'product_thambnail' => $save_url,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        Product::where('id', $product_id)->update(['product_slug_en' => $product_id]);

        // Multiple Image Upload Start
        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
            $uploadPath = 'upload/products/multi-image/'.$make_name;

            MultiImg::insert([
                'product_id' => $product_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        }
        // Een Multiple Image Upload Start

        $notification = array(
			'message' => 'Product Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-product')->with($notification);
	} // end method

	public function ManageProduct()
    {
		$products = Product::latest('id')->get();

        $brand_all = $this->brandRepository->listAll('id');
        $cate_all = $this->categoryRepository->listAll('id');
        $vars = [
            'products' => $products,
            'brand_all' => $brand_all,
            'cate_all' => $cate_all,
        ];
		return view('backend.product.product_view', $vars);
	}


	public function EditProduct($id)
    {
		$multiImgs = MultiImg::where('product_id',$id)->get();

		$categories = Category::latest('id')->get();
		$brands = Brand::latest('id')->get();
		$products = Product::findOrFail($id);
        $usageRel = Product::usageRel();
        $osRel = Product::osRel();

        $vars = [
            'multiImgs' => $multiImgs,
            'categories' => $categories,
            'brands' => $brands,
            'products' => $products,
            'usageRel' => $usageRel,
            'osRel' => $osRel,
        ];
		return view('backend.product.product_edit', $vars);
	}

	public function ProductDataUpdate(Request $request)
    {
		$product_id = $request->id;

        Product::findOrFail($product_id)->update([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'product_name_en' => $request->product_name_en,
            'product_slug_en' => '',
            'os' => $request->os ?: '',
            'usage' => $request->usage,

            'product_code' => mt_rand(100000, 999999),

            'selling_price' => $request->selling_price,
            'short_descp_en' => $request->short_descp_en,
            'long_descp_en' => $request->long_descp_en,

            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Product Updated Without Image Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-product')->with($notification);
	} // end method


    // Multiple Image Update
	public function MultiImageUpdate(Request $request)
    {
		$imgs = $request->multi_img;

        if ($imgs) {
            foreach ($imgs as $id => $img) {
                $imgDel = MultiImg::findOrFail($id);
                unlink($imgDel->photo_name);

                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
                $uploadPath = 'upload/products/multi-image/'.$make_name;

                MultiImg::where('id',$id)->update([
                    'photo_name' => $uploadPath,
                    'updated_at' => Carbon::now(),
                ]);
            } // end foreach
        }

        $notification = array(
			'message' => 'Product Image Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
	} // end mehtod


    /// Product Main Thambnail Update ///
    public function ThambnailImageUpdate(Request $request)
    {
        $pro_id = $request->id;
        $oldImage = $request->old_img;

        if ($request->file('product_thambnail')) {
            if ($oldImage) {
                @unlink($oldImage);
            }

            $image = $request->file('product_thambnail');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(917,1000)->save('upload/products/thambnail/'.$name_gen);
            $save_url = 'upload/products/thambnail/'.$name_gen;

            Product::findOrFail($pro_id)->update([
                'product_thambnail' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
        }

         $notification = array(
			'message' => 'Product Image Thambnail Updated Successfully',
			'alert-type' => 'info'
		);
		return redirect()->back()->with($notification);

    } // end method


    // Multi Image Delete
    public function MultiImageDelete($id)
    {
        $oldimg = MultiImg::findOrFail($id);
     	unlink($oldimg->photo_name);
     	MultiImg::findOrFail($id)->delete();

     	$notification = array(
			'message' => 'Product Image Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method



    public function ProductInactive($id)
    {
     	Product::findOrFail($id)->update(['status' => 0]);
     	$notification = array(
			'message' => 'Product Inactive',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }

    public function ProductActive($id)
    {
        Product::findOrFail($id)->update(['status' => 1]);
            $notification = array(
                'message' => 'Product Active',
                'alert-type' => 'success'
            );

		return redirect()->back()->with($notification);
    }

    public function ProductDelete($id)
    {
        $product = Product::findOrFail($id);
     	unlink($product->product_thambnail);
     	Product::findOrFail($id)->delete();

     	$images = MultiImg::where('product_id',$id)->get();
     	foreach ($images as $img) {
     		unlink($img->photo_name);
     		MultiImg::where('product_id',$id)->delete();
     	}

     	$notification = array(
			'message' => 'Product Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }// end method
}
