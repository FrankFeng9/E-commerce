@extends('admin.admin_master_new')

@section('admin')

<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit Product </h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{ route('product-update') }}" >
                            @csrf
                            <input type="hidden" name="id" value="{{ $products->id }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row"> <!-- start 1st row  -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Brand Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="brand_id" class="form-control" required="" >
                                                        <option value="" disabled="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}" {{ $brand->id == $products->brand_id ? 'selected': '' }} >{{ $brand->brand_name_en }}</option>
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
                                                        <option value="" disabled="">Select Category</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected': '' }} >{{ $category->category_name_en }}</option>
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
                                                    <input type="text" name="product_name_en" class="form-control" required="" value="{{ $products->product_name_en }}">
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
                                                    <input type="number" name="selling_price" class="form-control" required="" value="{{ $products->selling_price }}" step="0.01" min="0">
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
                                                        <option value="" disabled="">Select Usage</option>
                                                        @foreach($usageRel as $item_usage)
                                                        <option value="{{ $item_usage }}" {{ $item_usage == $products->usage ? 'selected': '' }} >{{ $item_usage }}</option>
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
                                                    <select name="os" class="form-control">
                                                        <option value="">Select OS</option>
                                                        @foreach($osRel as $item_os)
                                                        <option value="{{ $item_os }}" {{ $item_os == $products->os ? 'selected': '' }} >{{ $item_os }}</option>
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
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h5>Product Overview <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text" rows="10">{!! $products->short_descp_en !!}</textarea>
                                                </div>
                                            </div>

                                        </div> <!-- end col md 12 -->

                                    </div> <!-- end 4th row  -->

                                    <div class="row"> <!-- start 5th row  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Product Details <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea id="editor1" name="long_descp_en" rows="10" cols="80" required="">
                                                        {!! $products->long_descp_en !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 5th row  -->

                                    <hr>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Product">
                                    </div>
                                </div> <!-- end col-12  -->
                            </div> <!-- end row  -->
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

    <!-- ///////////////// Start Multiple Image Update Area ///////// -->

    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box bt-3 border-info">
                    <div class="box-header">
                        <h4 class="box-title">Product Multiple Image <strong>Update</strong></h4>
                    </div>


                    <form method="post" action="{{ route('update-product-image') }}" enctype="multipart/form-data" class="m-20">
                        @csrf
                        <div class="row row-sm">
                            @foreach($multiImgs as $img)
                            <div class="col-md-3">

                                <div class="card">
                                    <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 130px; width: 280px;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="{{ route('product.multiimg.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
                                        </h5>
                                        <p class="card-text">
                                            <div class="form-group">
                                                <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                                <input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
                                            </div>
                                        </p>

                                    </div>
                                </div>

                            </div><!--  end col md 3 -->
                            @endforeach

                        </div>

                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                        </div>
                    </form>

                </div>
            </div>

        </div> <!-- // end row  -->
    </section>
    <!-- ///////////////// End Start Multiple Image Update Area ///////// -->


    <!-- ///////////////// Start Thambnail Image Update Area ///////// -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box bt-3 border-info">
                    <div class="box-header">
                        <h4 class="box-title">Product Thambnail Image <strong>Update</strong></h4>
                    </div>

                    <form method="post" action="{{ route('update-product-thambnail') }}" enctype="multipart/form-data" class="m-20">
                        @csrf

                        <input type="hidden" name="id" value="{{ $products->id }}">
                        <input type="hidden" name="old_img" value="{{ $products->product_thambnail }}">

                        <div class="row row-sm">

                            <div class="col-md-3">

                                <div class="card">
                                    <img src="{{ asset($products->product_thambnail) }}" class="card-img-top" style="height: 130px; width: 280px;">
                                    <div class="card-body">

                                        <p class="card-text">
                                            <div class="form-group">
                                                <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                                <input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)"  >
                                                <img src="" id="mainThmb">
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div><!--  end col md 3 -->
                        </div>

                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- // end row  -->

    </section>
    <!-- ///////////////// End Start Thambnail Image Update Area ///////// -->
</div>

<script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src',e.target.result).width(80).height(80);
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
                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                                .height(80); //create image element
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
