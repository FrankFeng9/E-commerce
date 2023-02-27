
@extends('frontend.main_master')

@section('title')
Shop Page
@endsection

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('home_index') }}">Home</a></li>
                @if (request()->get('is_recommend') == 1)
                <li class='active'>Product Recommendation</li>
                @else
                <li class='active'>All Product</li>
                @endif
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class='container'>

        @if (request()->get('is_recommend') == 1)
        <div class="recomm_wrap_my">
            <div class="recomm_title_my">Product Recommendation</div>
            <div class="recomm_bottom_my">
                <div class="recomm_txt_my badge">{{ $recomm_str }}</div>
                <div class="recomm_btn_my">
                    <a class="btn btn-info" href="{{ route('home_index', ['show_recomm' => 1]) }}">Reselect</a>
                </div>
            </div>
        </div>
        @endif

        @php
        $hidden_one = request()->get('is_recommend') == 1 ? 'hidden' : '';
        $hidden_second = '';
        $hidden_third = request()->get('is_recommend') == 1 ? 'hidden' : '';
        $hidden_four = request()->get('is_recommend') == 1 ? 'hidden' : '';
        $hidden_five = request()->get('is_recommend') == 1 ? 'hidden' : '';
        @endphp

        <form action="{{ route('shop.filter') }}" method="post" id="filterform">
            @csrf
            <input type="hidden" name="collapseOne" value="{{ request()->get('collapseOne') }}">
            <input type="hidden" name="collapseSecond" value="{{ request()->get('collapseSecond') }}">
            <input type="hidden" name="collapseThird" value="{{ request()->get('collapseThird') }}">
            <input type="hidden" name="collapseFour" value="{{ request()->get('collapseFour') }}">
            <input type="hidden" name="collapseFive" value="{{ request()->get('collapseFive') }}">
            <input type="hidden" name="search" value="{{ request()->get('search') }}">
            <input type="hidden" name="is_recommend" value="{{ request()->get('is_recommend') }}">
            <div class='row'>
                <div class='col-md-3 sidebar shopage-left'>
                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">

                            <!-- Categories start -->
                            <div class="panel panel-default {{ $hidden_one }}">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <a role="button">
                                            Categories <i id="collapseOneIcon" class="pull-right glyphicon glyphicon-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="accordion">

                                            @if(!empty($_GET['category']))
                                            @php
                                            $filterCat = explode(',',$_GET['category']);
                                            @endphp
                                            @else
                                            @php
                                            $filterCat = [];
                                            @endphp
                                            @endif

                                            @foreach($categories as $category)
                                            <div class="accordion-group">
                                                <div class="accordion-heading">

                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="category[]" value="{{ $category->category_slug_en }}" @if(!empty($filterCat) && in_array($category->category_slug_en,$filterCat)) checked @endif  onchange="this.form.submit()">

                                                        {{ $category->category_name_en }}

                                                    </label>


                                                </div>
                                                <!-- /.accordion-heading -->

                                            </div>
                                            <!-- /.accordion-group -->
                                            @endforeach

                                        </div>
                                        <!-- /.accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- Categories end -->

                            <!-- Brands start -->
                            <div class="panel panel-default {{ $hidden_second }}">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseSecond">
                                        <a role="button">
                                            Brands <i id="collapseSecondIcon" class="pull-right glyphicon glyphicon-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSecond" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="accordion">

                                            @if(!empty($_GET['brand']))
                                            @php
                                            $filterBrand = explode(',',$_GET['brand']);
                                            @endphp
                                            @else
                                            @php
                                            $filterBrand = [];
                                            @endphp
                                            @endif

                                            @foreach($brands as $brand)
                                            <div class="accordion-group">
                                                <div class="accordion-heading">

                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="brand[]" value="{{ $brand->brand_slug_en }}" @if(!empty($filterBrand) && in_array($brand->brand_slug_en,$filterBrand)) checked @endif  onchange="this.form.submit()">

                                                        {{ $brand->brand_name_en }}

                                                    </label>


                                                </div>
                                                <!-- /.accordion-heading -->

                                            </div>
                                            <!-- /.accordion-group -->
                                            @endforeach

                                        </div>
                                        <!-- /.accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- Brands end -->

                            <!-- OS start -->
                            <div class="panel panel-default {{ $hidden_third }}">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseThird">
                                        <a role="button">
                                            OS <i id="collapseThirdIcon" class="pull-right glyphicon glyphicon-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThird" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="accordion">

                                            @if(!empty($_GET['os']))
                                            @php
                                            $filterOS = explode(',',$_GET['os']);
                                            @endphp
                                            @else
                                            @php
                                            $filterOS = [];
                                            @endphp
                                            @endif

                                            @foreach($osRel as $os_item)
                                            <div class="accordion-group">
                                                <div class="accordion-heading">

                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="os[]" value="{{ $os_item }}" @if(!empty($filterOS) && in_array($os_item, $filterOS)) checked @endif  onchange="this.form.submit()">

                                                        {{ $os_item }}

                                                    </label>


                                                </div>
                                                <!-- /.accordion-heading -->

                                            </div>
                                            <!-- /.accordion-group -->
                                            @endforeach

                                        </div>
                                        <!-- /.accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- OS end -->

                            <!-- Usage start -->
                            <div class="panel panel-default {{ $hidden_four }}">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        <a role="button">
                                            Usage <i id="collapseFourIcon" class="pull-right glyphicon glyphicon-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="accordion">

                                            @if(!empty($_GET['usage']))
                                            @php
                                            $filterUsage = explode(',',$_GET['usage']);
                                            @endphp
                                            @else
                                            @php
                                            $filterUsage = [];
                                            @endphp
                                            @endif

                                            @foreach($usageRel as $usage_item)
                                            <div class="accordion-group">
                                                <div class="accordion-heading">

                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="usage[]" value="{{ $usage_item }}" @if(!empty($filterUsage) && in_array($usage_item, $filterUsage)) checked @endif  onchange="this.form.submit()">

                                                        {{ $usage_item }}

                                                    </label>


                                                </div>
                                                <!-- /.accordion-heading -->

                                            </div>
                                            <!-- /.accordion-group -->
                                            @endforeach

                                        </div>
                                        <!-- /.accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- Usage end -->


                            <!-- Price start -->
                            <div class="panel panel-default {{ $hidden_five }}">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        <a role="button">
                                            Price <i id="collapseFiveIcon" class="pull-right glyphicon glyphicon-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="accordion sidebar-widget" style="padding: 0; box-shadow: initial;">

                                            <div class="sidebar-widget-body m-t-10">
                                                <div class="price-range-holder">
                                                    <span class="min-max">
                                                        <span class="pull-left">${{ $price_arr[0] }}</span>
                                                        <span class="pull-right">${{ $price_arr[1] }}</span>
                                                    </span>
                                                    <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                                    <input type="text" class="price-slider" name="price_range" value="{{ request()->get('price_range') ?: implode(',', $price_arr) }}">
                                                </div>
                                                <!-- /.price-range-holder -->
                                                <button type="button" class="lnk btn btn-primary" onclick="this.form.submit()">Apply Price Range</button>
                                            </div>

                                        </div>
                                        <!-- /.accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- Price end -->

                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>

                        <div class="clearfix filters-container">
                            <div class="row">
                                <div class="col col-sm-6 col-md-2">
                                    <div class="filter-tabs">
                                        <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                            <li id="grid_for_tab" onclick="Cookies.set('filter_tab_choose', 'grid', {path: ''})"><a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                            <li id="list_for_tab" onclick="Cookies.set('filter_tab_choose', 'list', {path: ''})"><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.filter-tabs -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-12 col-md-6">
                                    <div class="col col-sm-3 col-md-12 no-padding">
                                        <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                                            <input type="hidden" name="sort_by" value="{{ request()->get('sort_by') ?: 'default' }}">
                                            <div class="fld inline">
                                                <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                    <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                                        <span>
                                                            @php
                                                            $sort_by = request()->get('sort_by', 'default')
                                                            @endphp
                                                            @if ($sort_by == 'low_high')
                                                            Price: Low-High
                                                            @elseif ($sort_by == 'high_low')
                                                            Price: High-Low
                                                            @else
                                                            Default
                                                            @endif
                                                        </span>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li role="presentation"><a href="javascript:;" onclick="$('[name=sort_by]').val('default');$('#filterform')[0].submit();">Default</a></li>
                                                        <li role="presentation"><a href="javascript:;" onclick="$('[name=sort_by]').val('low_high');$('#filterform')[0].submit();">Price: Low-High</a></li>
                                                        <li role="presentation"><a href="javascript:;" onclick="$('[name=sort_by]').val('high_low');$('#filterform')[0].submit();">Price: High-Low</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-6 col-md-4 text-right">

                                    <!-- /.pagination-container -->
                                </div>
                                <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>


                            <!--    //////////////////// START Product Grid View  ////////////// -->

                            <div class="search-result-container">
                                <div id="myTabContent" class="tab-content category-list">
                                    <div class="tab-pane active " id="grid-container">
                                        <div class="category-product">
                                            <div class="row">

                                                @forelse($products as $product)
                                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="{{ url('product/details/'.$product->id) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name">
                                                                    <a href="{{ url('product/details/'.$product->id) }}">
                                                                    {{ $product->product_name_en }}</a>
                                                                </h3>
                                                                <div class="description"></div>

                                                                <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>   </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" onclick="productView('{{ $product->id }}')"  type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                        </li>
                                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="javascript:;" title="Wishlist" onclick="addToWishList('{{ $product->id }}')"> <i class="icon fa fa-heart"></i> </a> </li>
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
                                                @empty
                                                <div class="text-center no_record">No Record</div>
                                                <!-- /.item -->
                                                @endforelse

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.category-product -->

                                    </div>
                                    <!-- /.tab-pane -->

                                    <!--            //////////////////// END Product Grid View  ////////////// -->


                                    <!--            //////////////////// Product List View Start ////////////// -->
                                    <div class="tab-pane "  id="list-container">
                                        <div class="category-product">

                                            @forelse($products as $product)
                                            <div class="category-product-inner wow fadeInUp">
                                                <div class="products">
                                                    <div class="product-list product">
                                                        <div class="row product-list-row">
                                                            <div class="col col-sm-4 col-lg-4">
                                                                <div class="product-image">
                                                                    <div class="image"> <img src="{{ asset($product->product_thambnail) }}" alt=""> </div>
                                                                </div>
                                                                <!-- /.product-image -->
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col col-sm-8 col-lg-8">
                                                                <div class="product-info">
                                                                    <h3 class="name"><a href="{{ url('product/details/'.$product->id) }}">
                                                                        {{ $product->product_name_en }}</a>
                                                                    </h3>
                                                                    <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                                                    <!-- /.product-price -->
                                                                    <div class="description m-t-10">
                                                                        {{ $product->short_descp_en }}
                                                                    </div>
                                                                    <div class="cart clearfix animate-effect">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" onclick="productView('{{ $product->id }}')"  type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                                </li>
                                                                                <li class="lnk wishlist"> <a class="add-to-cart" href="javascript:;" title="Wishlist" onclick="addToWishList('{{ $product->id }}')"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- /.action -->
                                                                    </div>
                                                                    <!-- /.cart -->

                                                                </div>
                                                                <!-- /.product-info -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.product-list-row -->

                                                    </div>
                                                    <!-- /.product-list -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.category-product-inner -->
                                            @empty
                                            <div class="text-center no_record">No Record</div>
                                            @endforelse

                                            <!--            //////////////////// Product List View END ////////////// -->

                                        </div>
                                        <!-- /.category-product -->
                                    </div>
                                    <!-- /.tab-pane #list-container -->
                                </div>
                                <!-- /.tab-content -->

                                {{ $products->appends($_GET)->links('vendor.pagination.custom')  }}


                            </div>
                            <!-- /.search-result-container -->

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </form>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.body-content -->
        @endsection
