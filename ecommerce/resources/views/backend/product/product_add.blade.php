@extends('admin.admin_master_new')

@section('admin')

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Product </h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-12">

                                    <div class="row"> <!-- start 1st row  -->
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Brand Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="brand_id" class="form-control" required="" >
                                                        <option value="" selected="" disabled="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('brand_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Category Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category_id" class="form-control" required="" >
                                                        <option value="" selected="" disabled="">Select Category</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 1st row  -->

                                    <div class="row"> <!-- start 2nd row  -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Product Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_name_en" class="form-control" required="">
                                                    @error('product_name_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Product Selling Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="selling_price" class="form-control" required="" step="0.01" min="0">
                                                    @error('selling_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 2nd row  -->

                                    <div class="row"> <!-- start 3RD row  -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Product Usage <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="usage" class="form-control" required="" >
                                                        <option value="" selected="" disabled="">Select Usage</option>
                                                        @foreach($usageRel as $item_usage)
                                                        <option value="{{ $item_usage }}">{{ $item_usage }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('usage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Product OS</h5>
                                                <div class="controls">
                                                    <select name="os" class="form-control" >
                                                        <option value="" selected="">Select OS</option>
                                                        @foreach($osRel as $item_os)
                                                        <option value="{{ $item_os }}">{{ $item_os }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('os')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 3RD row  -->

                                    <div class="row"> <!-- start 4th row  -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Main Thambnail <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)" required="" >
                                                    @error('product_thambnail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="" id="mainThmb">
                                                </div>
                                            </div>


                                        </div> <!-- end col md 6 -->


                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Multiple Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="" >
                                                    @error('multi_img')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <div class="row" id="preview_img"></div>

                                                </div>
                                            </div>


                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 4th row  -->

                                    <div class="row"> <!-- start 5th row  -->

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h5>Product Overview <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text" rows="10"></textarea>
                                                </div>
                                            </div>

                                        </div> <!-- end col md 12 -->

                                    </div> <!-- end 5th row  -->

                                    <div class="row"> <!-- start 6th row  -->
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h5>Product Details <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea id="editor1" name="long_descp_en" rows="10" cols="80" required="">
                                                        Product Details
                                                    </textarea>
                                                </div>
                                            </div>

                                        </div> <!-- end col md 12 -->

                                    </div> <!-- end 6th row  -->


                                    <hr>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
                                    </div>

                                </div> <!-- /.col-12 -->
                            </div> <!-- /.row -->
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src',e.target.result)
                .width(80).height(80).addClass('m-10');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                $('#preview_img').empty();

                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result)
                                .width(80).height(80).addClass('m-10'); //create image element
                                $('#preview_img').append(img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>
@endsection
