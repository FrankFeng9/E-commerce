@extends('frontend.main_master')

@section('title')
Order Confirmation Page
@endsection

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('home_index') }}">Home</a></li>
                <li class='active'>Order Confirmation</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">

                <div class="col-md-8">
                    <!-- checkout-progress-sidebar Billing Address -->
                    <div class="checkout-progress-sidebar">
                        <div class="panel-group">
                            <div class="panel panel-default">

                                <div class="">

                                    <div class="order_top">
                                        <div class="order_top_left">
                                            <i class="fa fa-check-circle-o"></i>
                                        </div>
                                        <div class="order_top_right">
                                            <div class="order_top_order">Order {{ $data_order->invoice_no }}</span></div>
                                            <div class="order_top_username">Thank you, {{ $curr_user->name }}!</div>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('user.order.details', [$data_order->id]) }}" class="btn btn-primary">Order Detail</a>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="order_confirmed">
                                        <div class="order_confirmed_msg">Your order is confirmed.</div>
                                        <div class="order_confirmed_msg">We've accepted your order and we're getting is ready.</div>
                                    </div>

                                    <hr>

                                    <div class="customer_wrap">
                                        <div class="customer_title">Customer Information</div>
                                        <div class="row m-b-30">
                                            <div class="col-md-6 col-sm-12">

                                                <div class="customer_subtitle">Shipping Address</div>

                                                <div class="customer_info">
                                                    <div class="customer_sub">{{ $data_order->first_name }} {{ $data_order->last_name }}</div>
                                                    <div class="customer_sub">{{ $data_order-> company }}</div>
                                                    <div class="customer_sub">{{ $data_order->address }} {{ $data_order->apt ? (' , ' . $data_order->apt) : '' }}</div>
                                                    <div class="customer_sub">{{ $data_order->city }}, {{ $data_order->provinceModel->province_name ?? '' }} {{ $data_order->postal_code }}</div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <div class="customer_subtitle">Billing Address</div>

                                                <div class="customer_info">
                                                    <div class="customer_sub">{{ $data_order->bill_first_name }} {{ $data_order->bill_last_name }}</div>
                                                    <div class="customer_sub">{{ $data_order->bill_address }} {{ $data_order->bill_apt ? (' , ' . $data_order->bill_apt) : '' }}</div>
                                                    <div class="customer_sub">{{ $data_order->bill_city }}, {{ $data_order->billProvinceModel->province_name ?? '' }}  {{ $data_order->bill_postal_code }}</div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 col-sm-12">

                                                <div class="customer_subtitle">Shipping Method</div>

                                                <div class="customer_info">

                                                    <div class="customer_sub">{{ $data_order->ship_method_str }}</div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- panel-body  -->
                            </div>
                        </div>
                    </div>
                    <!-- /.checkout-progress-sidebar Billing Address -->

                </div> <!--  // end col-md-8 -->


                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                    <div class="checkout-progress-sidebar">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title"> Order Summary </h4>
                                </div>
                                <div class="">
                                    <ul class="nav nav-checkout-progress list-unstyled">
                                        <li>
                                            <h5>
                                                <strong>SubTotal: </strong> <span class="pull-right">${{ $data_order->amount_subtotal }}</span>
                                            </h5>
                                        </li>

                                        <li>
                                            <h5>
                                                <strong>Shipping: </strong> <span class="pull-right">${{ $data_order->amount_ship }}</span>
                                            </h5>
                                        </li>

                                        <li>
                                            <h5>
                                                <strong>Tax: </strong> <span class="pull-right">${{ $data_order->amount_tax }}</span>
                                            </h5>
                                        </li>

                                        <hr>

                                        <li>
                                            <h5>
                                                <strong>Total: </strong> <span class="pull-right">${{ $data_order->amount }}</span>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.checkout-progress-sidebar -->

                </div><!--  // end col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ===== == BRANDS CAROUSEL : END === === -->

    </div><!-- /.container -->
</div><!-- /.body-content -->

@endsection
