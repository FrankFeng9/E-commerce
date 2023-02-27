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
                        <h3 class="box-title">Admins </h3>
                        <a href="{{ route('add.admin') }}" class="btn btn-primary" style="float: right;">Add Admin User</a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image  </th>
                                        <th>Name  </th>
                                        <th>Email </th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($adminuser as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->profile_photo_path) }}" style="width: 50px; height: 50px;">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td width="25%">
                                            <a href="{{ route('edit.admin.user',$item->id) }}" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ route('edit.admin.password',$item->id) }}" class="btn btn-primary" title="Edit Password"><i class="fa fa-unlock-alt"></i></a>
                                            <a href="{{ route('delete.admin.user',$item->id) }}" class="btn btn-primary" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
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
