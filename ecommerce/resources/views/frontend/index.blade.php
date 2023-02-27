@extends('frontend.main_master')

@section('title')
Best Choice Online Shop
@endsection

@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">

                <!-- === ========= SECTION – HERO ==== ======= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        @foreach($sliders as $slider)
                        <div class="item" style="background-image: url({{ asset($slider->slider_img) }});">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">

                                    <h3 style="color:#FAF645;font-weight: bold">{{ $slider->title }} </h3>
                                    <h5 style="color:#FAF645;font-weight: bold"> <span>{{ $slider->description }}</span> </h5>
                                    <div class="button-holder fadeInDown-3"> <a href="{{ route('shop.page') }}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->
                        @endforeach

                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!-- /#hero -->

                <!-- ==== ===== SECTION – HERO : END === ============== -->

                <div class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="middle_my" style="color:#157ed2">
                        <div class="middle_title_my">Welcome to BestChoice</div>
                        <div class="middle_slogan_my">We offer a variety of desktops, laptops and computer accessories</div>
                    </div>
                </div>

                <div class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="btn_wrap_my">
                        <div class="btn_item_my">
                            <div class="btn_text_my">Shop All Prodcuts</div>
                            <a href="{{ route('shop.page') }}">
                                <div class="btn_go_my">Browse Products</div>
                            </a>
                        </div>
                        <div class="btn_item_my">
                            <div class="btn_text_my">Not sure what you are looking for?</div>
                            <a href="#" data-toggle="modal" data-target="#recommendation_modal">
                                <div class="btn_go_my">Products Recommendation</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recommendation Modal -->
                <div class="modal fade" id="recommendation_modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Products Recommendation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -28px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="recomm_wrap text-center">
                                    <form method="POST" action="{{ route("shop.filter") }}">
                                        @csrf
                                        <input type="hidden" name="is_recommend" value="1">

                                        <div class="recomm_list_my">
                                            <div class="recomm_list_title_my">
                                                The Device is Mainly Used For
                                            </div>
                                            <div class="recomm_item_my">
                                                @foreach ($usageRel as $usage_item)
                                                <input type="hidden" class="input_hide" name="usage[]">
                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="{{ $usage_item }}" onclick="chooseRecomm(this)">{{ $usage_item }}</button>
                                                @endforeach
                                            </div>
                                        </div> <!-- end .recomm_list_my  -->
                                        <hr>

                                        <div class="recomm_list_my">
                                            <div class="recomm_list_title_my">
                                                Set Budget
                                            </div>
                                            <div class="recomm_item_my">
                                                <input type="hidden" class="input_hide" name="price_range">
                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="50,999" onclick="chooseRecommSingle(this)">$999</button>

                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="50,1999" onclick="chooseRecommSingle(this)">$1999</button>

                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="50,2999" onclick="chooseRecommSingle(this)">$2999</button>
                                            </div>
                                        </div> <!-- end .recomm_list_my  -->
                                        <hr>

                                        <div class="recomm_list_my">
                                            <div class="recomm_list_title_my">
                                                Choose Category
                                            </div>
                                            <div class="recomm_item_my">
                                                @foreach ($categories as $category)
                                                <input type="hidden" class="input_hide" name="category[]">
                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="{{ $category->category_slug_en }}" onclick="chooseRecomm(this)">{{ $category->category_name_en }}</button>
                                                @endforeach
                                            </div>
                                        </div> <!-- end .recomm_list_my  -->
                                        <hr>

                                        <div class="recomm_list_my">
                                            <div class="recomm_list_title_my">
                                                Choose Operating system
                                            </div>
                                            <div class="recomm_item_my">
                                                @foreach ($osRel as $os_item)
                                                <input type="hidden" class="input_hide" name="os[]">
                                                <button type="button" class="btn btn-default recomm_btn_my" data-val="{{ $os_item }}" onclick="chooseRecomm(this)">{{ $os_item }}</button>
                                                @endforeach
                                            </div>
                                        </div> <!-- end .recomm_list_my  -->
                                        <hr>

                                        <div class="recomm_bar_my">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div> <!-- end .recomm_bar_my  -->
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- = ===== SCROLL TABS =============== ========== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>

                            @foreach($categories as $category)
                            <li><a data-transition-type="backSlide" href="#category{{ $category->id }}" data-toggle="tab">{{ $category->category_name_en }}</a></li>
                            @endforeach
                            <!-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>

                                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> -->
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">

                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    @foreach($products as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="{{ url('product/details/'.$product->id) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                                    <!-- /.image -->
                                                </div>

                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="{{ url('product/details/'.$product->id) }}">
                                                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                                    </a></h3>
                                                    <div class="description"></div>

                                                    <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">


                                                                <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>

                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>

                                                            <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>

                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    @endforeach<!--  // end all optionproduct foreach  -->




                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        @foreach($categories as $category)
                        <div class="tab-pane" id="category{{ $category->id }}">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    @php
                                    $catwiseProduct = App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                                    @endphp

                                    @forelse($catwiseProduct as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="{{ url('product/details/'.$product->id) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                                    <!-- /.image -->
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="{{ url('product/details/'.$product->id) }}">
                                                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                                    </a></h3>
                                                    <div class="description"></div>

                                                    <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                                    <!-- /.product-price -->
                                                </div>
                                                <!-- /.product-info -->

                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">

                                                                <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>

                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>



                                                            <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>


                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->

                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    @empty
                                    <h5 class="text-danger">No Product Found</h5>

                                    @endforelse<!--  // end all optionproduct foreach  -->

                                </div>
                                <!-- /.home-owl-carousel -->

                            </div>
                            <!-- /.product-slider -->

                        </div>
                        <!-- /.tab-pane -->
                        @endforeach <!-- end categor foreach -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
@endsection

@section('foot_js')
<script>
    @if (request()->get('show_recomm'))
    $('#recommendation_modal').modal('show')
    @endif
</script>
@endsection
