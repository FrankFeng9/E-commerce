<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function BrandView()
    {
    	$brands = Brand::latest()->get();
    	return view('backend.brand.brand_view',compact('brands'));
    }


    public function BrandStore(Request $request)
    {
    	$request->validate([
    		'brand_name_en' => 'required',
    	],[
    		'brand_name_en.required' => 'Input Brand Name',
    	]);


        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
        ]);

	    $notification = array(
			'message' => 'Brand Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method



    public function BrandEdit($id)
    {
    	$brand = Brand::findOrFail($id);
    	return view('backend.brand.brand_edit',compact('brand'));

    }


    public function BrandUpdate(Request $request)
    {
    	$brand_id = $request->id;

        Brand::findOrFail($brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
        ]);

        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.brand')->with($notification);
    } // end method


    public function BrandDelete($id)
    {
    	Brand::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'Brand Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
    } // end method
}
