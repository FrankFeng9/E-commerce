<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Services\CommonService;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Svg\Tag\Rect;

class ReportController extends Controller
{
    public function ReportView()
    {
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $osRel = Product::osRel();
        $usageRel = Product::usageRelShopPage();

        $vars = [
            'brands' => $brands,
            'categories' => $categories,
            'osRel' => $osRel,
            'usageRel' => $usageRel,
        ];
        return view('backend.report.report_view', $vars);
    }


    public function ReportByDate(Request $request)
    {
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');
        // return $formatDate;
        $orders = Order::where('order_date',$formatDate)->where('status', Order::STATUS_SUCCEEDED)->latest('id')->get();
        return view('backend.report.report_show',compact('orders'));
    } // end mehtod



    public function ReportByMonth(Request $request)
    {
        $orders = Order::where('order_month',$request->month)->where('order_year',$request->year_name)->where('status', Order::STATUS_SUCCEEDED)->latest('id')->get();
        return view('backend.report.report_show',compact('orders'));
    } // end mehtod


    public function ReportByYear(Request $request)
    {
        $orders = Order::where('order_year',$request->year)->where('status', Order::STATUS_SUCCEEDED)->latest('id')->get();
        return view('backend.report.report_show',compact('orders'));
    } // end mehtod

    public function ReportByProduct(Request $request)
    {
        $input = $request->input();
        $input = CommonService::arrFilter($input, 1);

        if (empty($input)) {
            $orders = Order::query()->latest('id')->get();
        } else {
            $product_base = Product::query();
            if (!empty($input['product_name'])) {
                $product_base->where('product_name_en', 'like', '%' . $input['product_name'] . '%');
            }
            if (!empty($input['category'])) {
                $product_base->where('category_id', $input['category']);
            }
            if (!empty($input['brand'])) {
                $product_base->where('brand_id', $input['brand']);
            }
            if (!empty($input['os'])) {
                $product_base->where('os', $input['os']);
            }
            if (!empty($input['usage'])) {
                $product_base->where('usage', $input['usage']);
            }
            $product_id_arr = $product_base->pluck('id');

            $order_id_arr = OrderItem::whereIn('product_id', $product_id_arr)->pluck('order_id');

            $orders = Order::query()->whereIn('id', $order_id_arr)->where('status', Order::STATUS_SUCCEEDED)->latest('id')->get();
        }

        return view('backend.report.report_show',compact('orders'));
    }
}
