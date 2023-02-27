@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Order </th>
                                        <th>Date </th>
                                        <th>Amount </th>
                                        <th>Order Details</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $item)
                                    <tr>
                                        <td> {{ $item->invoice_no }}  </td>
                                        <td> {{ $item->order_date }}  </td>
                                        <td> ${{ $item->amount }}  </td>


                                        <td width="25%">
                                            <a href="{{ route('pending.order.details',$item->id) }}" class="btn btn-primary" title="Edit Data"><i class="fa fa-eye"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
@endsection
