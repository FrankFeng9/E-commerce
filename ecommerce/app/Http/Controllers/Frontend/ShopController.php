<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\CommonService;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ShopController extends Controller
{
    private function ShopInvoke(Request $request)
    {
        $products = Product::where('status', 1);

        $cateIds = $brandIds = [];
        if (!empty($request->get('category'))) {
            $slugs = explode(',', $request->get('category'));
            $slugs = CommonService::arrFilter($slugs);
            $cateIds = Category::select('id')->whereIn('category_slug_en',$slugs)->pluck('id')->toArray();
            $cateNames = Category::select('category_name_en')->whereIn('category_slug_en',$slugs)->pluck('category_name_en')->toArray();
        }
        if (!empty($request->get('brand'))) {
            $slugs = explode(',', $request->get('brand'));
            $slugs = CommonService::arrFilter($slugs);
            $brandIds = Brand::select('id')->whereIn('brand_slug_en',$slugs)->pluck('id')->toArray();
        }
        if (!empty($request->get('os'))) {
            $os_arr = explode(',', $request->get('os'));
            $os_arr = CommonService::arrFilter($os_arr);
            $products->whereIn('os', $os_arr);
        }
        if (!empty($request->get('usage'))) {
            $usage_arr = explode(',', $request->get('usage'));
            $usage_arr = CommonService::arrFilter($usage_arr);
            $products->whereIn('usage', $usage_arr);
            $products->where(function ($query) use ($usage_arr) {
                foreach ($usage_arr as $usage_one) {
                    $query->orWhere('usage', 'like', "%{$usage_one}%");
                }
            });
        }

        if (!empty($request->get('price_range'))) {
            $price_arr = explode(',', $request->get('price_range'));
            $price_arr = array_map('intval', $price_arr);
            $products->whereBetween('selling_price', $price_arr);
        }

        if ($cateIds) {
            $products->whereIn('category_id',$cateIds);
        }
        if ($brandIds) {
            $products->whereIn('brand_id',$brandIds);
        }

        if (!empty($request->get('search'))) {
            $search = $request->get('search');
            $products->where('product_name_en', 'like', "%{$search}%");
        }

        if (!empty($request->get('sort_by')) && $request->get('sort_by') == 'low_high') {
            $products->orderBy('selling_price', 'asc');
        } elseif (!empty($request->get('sort_by')) && $request->get('sort_by') == 'high_low') {
            $products->orderBy('selling_price', 'desc');
        } else {
            $products->orderBy('id', 'desc');
        }
        // DB::enableQueryLog();
        $products = $products->paginate(6);
        // dd(DB::getQueryLog());

        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $osRel = Product::osRel();
        $usageRel = Product::usageRelShopPage();

        $recomm_str = $this->recommendStr($cateNames ?? [], $os_arr ?? [], $usage_arr ?? [], isset($price_arr) ? ('Under $' . $price_arr[1]) : '');
        $vars = [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'osRel' => $osRel,
            'usageRel' => $usageRel,
            'price_arr' => $price_arr ?? [10,3500],
            'is_recommend' => $request->get('is_recommend', 0),
            'recomm_str' => $recomm_str,
        ];
        return $vars;
    }

    private function recommendStr($arr1, $arr2, $arr3, $str1)
    {
        $arr1 = CommonService::arrFilter($arr1);
        $arr2 = CommonService::arrFilter($arr2);
        $arr3 = CommonService::arrFilter($arr3);

        $data = [implode('/', $arr1), implode('/', $arr2), implode('/', $arr3), $str1];
        $data = CommonService::arrFilter($data);

        $res = implode(' - ', $data);
        return $res;
    }

    public function ShopPage(Request $request)
    {
        $vars = $this->ShopInvoke($request);
        return view('frontend.shop.shop_page', $vars);

    } // end Method


    public function ShopRecommend(Request $request)
    {
        $request->merge(['is_recommend' => 1]);

        $vars = $this->ShopInvoke($request);
        return view('frontend.shop.shop_page', $vars);
    }


    public function ShopFilter(Request $request)
    {
        $data = $request->all();
        $data_collapse = $request->only([
            'collapseOne', 'collapseSecond', 'collapseThird', 'collapseFour', 'collapseFive',
            'price_range', 'sort_by', 'search',
        ]);
        $data_collapse = CommonService::arrFilter($data_collapse, 1);

        $query = [];
        if (!empty($data['category'])) {
            $data['category'] = CommonService::arrFilter($data['category']);
            $query['category'] = implode(',', $data['category']);
        }
        if (!empty($data['brand'])) {
            $data['brand'] = CommonService::arrFilter($data['brand']);
            $query['brand'] = implode(',', $data['brand']);
        }
        if (!empty($data['os'])) {
            $data['os'] = CommonService::arrFilter($data['os']);
            $query['os'] = implode(',', $data['os']);
        }
        if (!empty($data['usage'])) {
            $data['usage'] = CommonService::arrFilter($data['usage']);
            $query['usage'] = implode(',', $data['usage']);
        }

        $is_recommend = $request->get('is_recommend', 0);
        if ($is_recommend) {
            return redirect()->route('shop.recommend', $query + $data_collapse);
        } else {
            return redirect()->route('shop.page', $query + $data_collapse);
        }
    } // end Method
}
