@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <!--   ------------ Add Search Page -------- -->

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <div style="text-align:center"></div>
                        <h3 class="box-title" >Sales Report Chart  </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <form method="get" action="{{ route('sale-amount-by-year') }}">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Select Year <span class="text-danger">*</span></h5>

                                        <div class="controls">

                                            <select name="year_name" class="form-control" required>
                                                <option label="Choose One"></option>
                                                @foreach ($year_all as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>

                                        </div> <!-- /.controls -->
                                    </div>

                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Select Category</h5>

                                        <div class="controls">

                                            <select name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($all_cate as $item_cate)
                                                <option value="{{ $item_cate['id'] }}">{{ $item_cate['category_name_en'] }}</option>
                                                @endforeach
                                            </select>

                                        </div> <!-- /.controls -->
                                    </div>

                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Select Brand</h5>

                                        <div class="controls">

                                            <select name="brand_id" class="form-control">
                                                <option value="">Select Brand</option>
                                                @foreach ($all_brand as $item_brand)
                                                <option value="{{ $item_brand['id'] }}">{{ $item_brand['brand_name_en'] }}</option>
                                                @endforeach
                                            </select>

                                        </div> <!-- /.controls -->
                                    </div>

                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Product Name</h5>

                                        <div class="controls">

                                            <input type="text" name="product_name_en" class="form-control" placeholder="search product...">

                                        </div> <!-- /.controls -->
                                    </div>

                                </div> <!-- /.col-md-6 -->
                            </div>

                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                            </div>
                        </form>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div> <!-- /.col-md-6 -->

            <div class="col-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Categories Report </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="get" action="{{ route('sale-amount-by-category') }}">

                                <div class="form-group">
                                    <h5>Select Year</h5>

                                    <div class="controls">

                                        <select name="year_name" class="form-control" required>
                                            <option label="Choose One" value=""></option>
                                            @foreach ($year_all as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        </select>

                                    </div> <!-- /.controls -->

                                </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div> <!-- /.col-md-6 -->

            <div class="col-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Brands Report</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="get" action="{{ route('sale-amount-by-brand') }}">

                                <div class="form-group">
                                    <h5>Select Year</h5>

                                    <div class="controls">

                                        <select name="year_name" class="form-control" required>
                                            <option label="Choose One" value=""></option>
                                            @foreach ($year_all as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        </select>

                                    </div> <!-- /.controls -->

                                </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div> <!-- /.col-md-6 -->


            <!--   ------------End  Add Search Page -------- -->

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
@endsection
