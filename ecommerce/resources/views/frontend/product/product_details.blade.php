@extends('frontend.main_master')
@section('content')

@section('title')
{{ $product->product_name_en }} Product Details
@endsection



<!-- ===== ======== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner clearfix">
            <ul class="list-inline list-unstyled pull-left">
                <li><a href="{{ route('home_index') }}">Home</a></li>
                <li class='active'>Prudct Details</li>
            </ul>
            <ul class="list-inline list-unstyled pull-right">
                <a href="javascript:history.back()">Go Back</a>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-md-12'>
                <div class="detail-block">
                    <div class="row  wow fadeInUp">

                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product">

                                    @foreach($multiImag as $img)
                                    <div class="single-product-gallery-item" id="slide{{ $img->id }}">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($img->photo_name ) }} ">
                                            <img class="img-responsive" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    @endforeach


                                </div><!-- /#owl-single-product -->


                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails">

                                        @foreach($multiImag as $img)
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
                                                <img class="img-responsive" width="85" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                            </a>
                                        </div>
                                        @endforeach
                                    </div><!-- /#owl-single-product-thumbnails -->
                                </div><!-- /.gallery-thumbs -->

                            </div><!-- /.single-product-gallery -->

                        </div><!-- /.gallery-holder -->

                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">


                                <h1 class="name" id="pname">
                                    {{ $product->product_name_en }}
                                </h1>
                                <div class="description-container m-t-20">
                                    {{ $product->short_descp_en }}
                                </div><!-- /.description-container -->

                                <div class="price-container info-container m-t-20">
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span class="price">${{ $product->selling_price }}</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="favorite-button m-t-10">
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" onclick="addToWishList('{{ $product->id }}')">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow arrow_my plus gradient" onclick="addQuantity(1)"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow arrow_my minus gradient" onclick="subQuantity(1)"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" id="qty" value="1" min="1" step="1">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">

                                        <div class="col-sm-7">
                                            <button type="submit" onclick="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                        </div>


                                    </div><!-- /.row -->
                                </div><!-- /.quantity-container -->

                                <div class="clearfix" style="font-size: 14px; color: gray;">
                                    <div class="">
                                        <i class="glyphicon glyphicon-info-sign"></i> Free shipping on orders over $99
                                    </div>
                                </div>

                            </div><!-- /.product-info -->
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                </div> <!-- /.detail-block -->

                <div class="product-tabs inner-bottom-xs wow fadeInUp detail-block">
                    <div class="detail-block">
                        <div class="desc_my">About This Product</div>
                        <div class="text text_my">{!! $product->long_descp_en !!}</div>
                    </div>
                </div><!-- /.product-tabs -->

                <!-- ===== ======= UPSELL PRODUCTS ==== ========== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Releted products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                        @foreach($relatedProduct as $product)

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{ url('product/details/'.$product->id) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a>
                                        </div><!-- /.image -->
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name_en }}</a>
                                        </h3>
                                        <div class="description"></div>


                                        <div class="product-price">
                                            <span class="price">${{ $product->selling_price }}</span>
                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" onclick="productView('{{ $product->id }}')" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="javascript:;" title="Wishlist" onclick="addToWishList('{{ $product->id }}')">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        @endforeach
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col-md-12 -->
            <div class="clearfix"></div>
        </div><!-- /.row -->

    </div> <!-- /.container -->

</div> <!-- /.body-content -->
@endsection

@section('foot_js')
<script>
    function addQuantity(num) {
        const val = +document.querySelector('#qty').value;
        const res = val + num;
        document.querySelector('#qty').value = res;
    }
    function subQuantity(num) {
        const val = +document.querySelector('#qty').value;
        let res = val - num;
        res = res < 1 ? 1 : res;
        document.querySelector('#qty').value = res;
    }
</script>
@endsection
