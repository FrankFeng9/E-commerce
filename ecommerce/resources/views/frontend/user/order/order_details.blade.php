@extends('frontend.main_master')

@section('title')
My Order Detail
@endsection

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><h4 class="m-t-20 m-b-20">Shipping Details</h4></div>
                    <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                            <tr>
                                <th> {{ $order->first_name }} {{ $order->last_name }} </th>
                            </tr>

                            @if ($order->company)
                            <tr>
                                <th> {{ $order->company }} </th>
                            </tr>
                            @endif

                            <tr>
                                <th> {{ $order->address }}  {{ $order->apt }} </th>
                            </tr>

                            <tr>
                                <th> {{ $order->city }}, {{ $order->provinceModel->province_name ?? '' }} </th>
                            </tr>

                            <tr>
                                <th> {{ $order->postal_code }} </th>
                            </tr>

                            <tr>
                                <th> {{ $order->phone }} </th>
                            </tr>

                        </table>

                    </div>

                </div>

            </div> <!-- // end col md -5 -->


            <div class="col-md-5">

                <div class="card">
                    <div class="card-header"><h4 class="m-t-20 m-b-20">Billing Details</h4></div>
                    <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                            <tr>
                                <th> {{ $order->bill_first_name }} {{ $order->bill_last_name }} </th>
                            </tr>

                            @if ($order->bill_company)
                            <tr>
                                <th> {{ $order->bill_company }} </th>
                            </tr>
                            @endif

                            <tr>
                                <th> {{ $order->bill_address }} {{ $order->bill_apt }}  </th>
                            </tr>

                            <tr>
                                <th> {{ $order->bill_city }},  {{ $order->billProvinceModel->province_name ?? '' }} </th>
                            </tr>

                            <tr>
                                <th> {{ $order->bill_postal_code }} </th>
                            </tr>

                            <tr>
                                <th> {{ $order->bill_phone }} </th>
                            </tr>

                        </table>

                    </div>

                </div> <!-- // end card -->

            </div> <!-- // 2ND end col md -5 -->

            <div class="col-md-2"></div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-t-20 m-b-20">Order
                            <B>{{ $order->invoice_no }}</B>
                        </h4>
                    </div>
                    <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">


                            <tr>
                                <th> Email:  {{ $order->email }} </th>
                            </tr>

                            <tr>
                                <th> Subtotal: ${{ $order->amount_subtotal }}</th>
                            </tr>

                            <tr>
                                <th> Shipping: ${{ $order->amount_ship }} </th>
                            </tr>
                            <tr>
                                <th> Tax: ${{ $order->amount_tax }}</th>
                            </tr>

                            <tr>
                                <th> Total: ${{ $order->amount }} </th>
                            </tr>

                            <tr>
                                <th> Order Placed On: {{ $order->order_date }} </th>
                            </tr>

                        </table>

                    </div> <!-- // end card-body -->

                </div> <!-- // end card -->

            </div> <!-- // end col md -10 -->



            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table">
                        <tbody>

                            <tr style="background: #e2e2e2;">
                                <td class="col-md-1">

                                </td>

                                <td class="col-md-4">
                                    <label for=""> Product</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> Product Code</label>
                                </td>

                                <td class="col-md-1">
                                    <label for=""> Quantity </label>
                                </td>

                                <td class="col-md-1">
                                    <label for=""> Price </label>
                                </td>

                            </tr>


                            @foreach($orderItem as $item)
                            <tr>
                                <td class="col-md-1">
                                    <label for=""><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;"> </label>
                                </td>

                                <td class="col-md-4">
                                    <label for=""> {{ $item->product->product_name_en }}</label>
                                </td>


                                <td class="col-md-1">
                                    <label for=""> {{ $item->product->product_code }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> {{ $item->qty }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> ${{ $item->price * $item->qty}} </label>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div> <!-- / end col md 12 -->

        </div> <!-- // end row -->

    </div>

</div>
@endsection
