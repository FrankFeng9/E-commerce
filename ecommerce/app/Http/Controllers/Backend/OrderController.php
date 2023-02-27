<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    // Pending Order Details
    public function PendingOrdersDetails($order_id)
    {
        $order = Order::with('user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders_details',compact('order','orderItem'));
    } // end method

    // Confirmed Orders
    public function ConfirmedOrders()
    {
        $orders = Order::where('status', Order::STATUS_SUCCEEDED)->orderBy('id','DESC')->get();
        return view('backend.orders.confirmed_orders',compact('orders'));
    } // end mehtod
}
