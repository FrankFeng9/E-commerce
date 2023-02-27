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
                        <h3 class="box-title">All products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image </th>
                                        <th>Product Title</th>
                                        <th>Product Price</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Usage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $item)
                                    <tr>
                                        <td>
                                            @if ($item->product_thambnail)
                                            <img src="{{ asset($item->product_thambnail) }}" style="width: 60px; height: 50px;">
                                            @else
                                            - Not uploaded -
                                            @endif
                                        </td>
                                        <td>{{ $item->product_name_en }}</td>
                                        <td>$ {{ $item->selling_price }}</td>
                                        <td>
                                            {{ $cate_all[$item->category_id]['category_name_en'] ?? '--' }}
                                        </td>
                                        <td>
                                            {{ $brand_all[$item->brand_id]['brand_name_en'] ?? '--' }}
                                        </td>
                                        <td>
                                            {{ $item->usage }}
                                        </td>
                                        <td width="30%">
                                            <a href="{{ route('product.edit',$item->id) }}" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{ route('product.delete',$item->id) }}" class="btn btn-primary" title="Delete Data" id="delete">
                                                <i class="fa fa-trash"></i></a>
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
