@extends('admin.admin_master_new')

@section('admin')
<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Recent Orders
                        </h4>
                    </div>

                    @php
                    $orders = App\Models\Order::where('status','succeeded')->limit(10)->orderBy('id','DESC')->get();

                    @endphp

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>

                                    <tr class="text-uppercase bg-lightest">

                                        <th style="min-width: 100px"><span class="text-fade">Order</span></th>
                                        <th style="min-width: 250px"><span class="text-fade">Date</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Amount</span></th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($orders as $item)
                                    <tr>

                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $item->invoice_no }}
                                            </span>
                                        </td>

                                        <td class="pl-0 py-8">
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ Carbon\Carbon::parse($item->order_date)->diffForHumans()  }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                ${{ $item->amount }}
                                            </span>
                                        </td>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->
                    </div> <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
