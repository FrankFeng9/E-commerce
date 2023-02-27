@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="row">


            <!--   ------------ Add Search Page -------- -->



            <div class="col-5">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search By Month </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-by-month') }}">
                                @csrf


                                <div class="form-group">
                                    <h5>Select Month  <span class="text-danger">*</span></h5>
                                    <div class="controls">

                                        <select name="month" class="form-control" required>
                                            <option label="Choose One"></option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>


                                        </select>

                                        @error('month')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Select Year  <span class="text-danger">*</span></h5>
                                    <div class="controls">

                                        <select name="year_name" class="form-control" required>
                                            <option label="Choose One"></option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>

                                        @error('year_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>


                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select Year </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-by-year') }}" >
                                @csrf

                                <div class="form-group">
                                    <h5>Select Year  <span class="text-danger">*</span></h5>
                                    <div class="controls">

                                        <select name="year" class="form-control" required>
                                            <option label="Choose One"></option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>

                                        @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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
            </div>




            <div class="col-5">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search By Product </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-by-product') }}" >
                                @csrf

                                <div class="form-group">
                                    <h5>Product Name</h5>
                                    <div class="controls">

                                        <input type="text" name="product_name" class="form-control" placeholder="Input product name...">

                                        @error('product_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Select Category</h5>
                                    <div class="controls">

                                        <select name="category" class="form-control">
                                            <option label="Choose One"></option>
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_name_en }}</option>
                                            @endforeach
                                        </select>

                                        @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Select Brand</h5>
                                    <div class="controls">

                                        <select name="brand" class="form-control">
                                            <option label="Choose One"></option>
                                            @foreach ($brands as $item)
                                            <option value="{{ $item->id }}">{{ $item->brand_name_en }}</option>
                                            @endforeach
                                        </select>

                                        @error('brand')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Select Usage</h5>
                                    <div class="controls">

                                        <select name="usage" class="form-control">
                                            <option label="Choose One"></option>
                                            @foreach ($usageRel as $v)
                                            <option value="{{ $v }}">{{ $v }}</option>
                                            @endforeach
                                        </select>

                                        @error('usage')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Select OS</h5>
                                    <div class="controls">

                                        <select name="os" class="form-control">
                                            <option label="Choose One"></option>
                                            @foreach ($osRel as $v)
                                            <option value="{{ $v }}">{{ $v }}</option>
                                            @endforeach
                                        </select>

                                        @error('os')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-md-4 -->

            <!--   ------------End  Add Search Page -------- -->

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
@endsection
