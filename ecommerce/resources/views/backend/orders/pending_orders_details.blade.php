@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-6 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title"><strong>Shipping Details</strong> </h4>
                    </div>

                    <table class="table">
                        <tr>
                            <th> {{ $order->first_name }}  {{ $order->last_name }} </th>
                        </tr>
                        @if ($order->company)
                        <tr>
                            <th> {{ $order->company }} </th>
                        </tr>
                        @endif
                        <tr>
                            <th> {{ $order->address }} {{ $order->apt }} </th>
                        </tr>
                        <tr>
                            <th> {{ $order->city }},  {{ $order->provinceModel->province_name ?? '' }}  &nbsp; {{ $order->postal_code }}  </th>
                        </tr>
                        <tr>
                            <th> {{ $order->phone }} </th>
                        </tr>

                    </table>

                </div>
            </div> <!--  // end col md -6 -->


            <div class="col-md-6 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title"><strong>Billing Details</strong> </h4>
                    </div>

                    <table class="table">
                        <tr>
                            <th> {{ $order->bill_first_name }}  {{ $order->bill_last_name }} </th>
                        </tr>
                        @if ($order->bill_company)
                        <tr>
                            <th> {{ $order->bill_company }} </th>
                        </tr>
                        @endif
                        <tr>
                            <th> {{ $order->bill_address }} {{ $order->bill_apt }} </th>
                        </tr>
                        <tr>
                            <th> {{ $order->bill_city }},  {{ $order->billProvinceModel->province_name ?? '' }}  &nbsp; {{ $order->bill_postal_code }}  </th>
                        </tr>
                        <tr>
                            <th> {{ $order->bill_phone }} </th>
                        </tr>

                    </table>

                </div>
            </div> <!--  // 2ND end col md -6 -->


            <div class="col-md-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title"><strong>Order Details</strong><span>{{ $order->invoice_no }}</span></h4>
                    </div>


                    <table class="table">
                        <tr>

                            <th> {{ $order->name }}  {{ $order->email }}</th>
                        </tr>



                        <tr>
                            <th> Tranx ID: {{ $order->transaction_id }} </th>

                        </tr>

                        <tr>
                            <th> Order Number:   {{ $order->invoice_no }} </th>

                        </tr>

                        <tr>
                            <th> Order Subtotal:  ${{ $order->amount_subtotal }} </th>
                        </tr>

                        <tr>
                            <th> Shipping Amount: ${{ $order->amount_ship }}</th>
                        </tr>

                        <tr>
                            <th> Tax Amount: ${{ $order->amount_tax }}  </th>
                        </tr>

                        <tr>
                            <th> Order Total:  ${{ $order->amount }} </th>
                        </tr>

                        <tr>
                            <th> Order Placed On: {{ $order->order_date }} </th>
                        </tr>


                    </table>

                </div>
            </div> <!--  // cod md -6 -->


            <div class="col-md-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">

                    </div>



                    <table class="table">
                        <tbody>

                            <tr>
                                <td width="10%">
                                    <label for=""> Image</label>
                                </td>

                                <td width="20%">
                                    <label for=""> Product Name </label>
                                </td>

                                <td width="10%">
                                    <label for=""> Product Code</label>
                                </td>

                                <td width="10%">
                                    <label for=""> Quantity </label>
                                </td>

                                <td width="10%">
                                    <label for=""> Price </label>
                                </td>

                            </tr>


                            @foreach($orderItem as $item)
                            <tr>
                                <td width="10%">
                                    <label for=""><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;"> </label>
                                </td>

                                <td width="20%">
                                    <label for=""> {{ $item->product->product_name_en }}</label>
                                </td>


                                <td width="10%">
                                    <label for=""> {{ $item->product->product_code }}</label>
                                </td>

                                <td width="10%">
                                    <label for=""> {{ $item->qty }}</label>
                                </td>

                                <td width="10%">
                                    <label for=""> ${{ $item->price }}  ( ${{ $item->price * $item->qty}} ) </label>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>


                </div>
            </div>  <!--  // cod md -12 -->

        </div>
        <!-- /. end row -->
    </section>
    <!-- /.content -->

</div>
@endsection
