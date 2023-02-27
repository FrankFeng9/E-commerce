<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AllUserController extends Controller
{
    public function MyOrders(Request $request)
    {
        $period = $request->input('period');
        $orders = Order::where('user_id',Auth::id())
        ->where(function ($query) use ($period) {
            if ($period == '30-days') {
                $query->where('created_at', '>=', Carbon::today()->subDays(30));
            } elseif ($period == '6-months') {
                $query->where('created_at', '>=', Carbon::today()->subMonths(6));
            } elseif ($period == '2022') {
                $query->where('created_at', 'like', '2022%');
            } elseif ($period == '2021') {
                $query->where('created_at', 'like', '2021%');
            } elseif ($period == '2020') {
                $query->where('created_at', 'like', '2020%');
            }
        })
            ->orderBy('id','DESC')->get();
        return view('frontend.user.order.order_view',compact('orders'));
    } // end mehtod


    public function OrderDetails($order_id)
    {
        $order = Order::with('user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('frontend.user.order.order_details',compact('order','orderItem'));
    } // end mehtod
}
