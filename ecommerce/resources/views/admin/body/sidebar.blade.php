@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ url('/') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
                        <h3><b>Best</b> Choice</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ ($route == 'dashboard')? 'active':'' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="fa fa-tachometer"></i>
                    <span>Admin Management</span>
                </a>
            </li>

            @php
            $brand = (auth()->guard('admin')->user()->brand == 1);
            $category = (auth()->guard('admin')->user()->category == 1);
            $product = (auth()->guard('admin')->user()->product == 1);
            $slider = (auth()->guard('admin')->user()->slider == 1);
            $coupons = (auth()->guard('admin')->user()->coupons == 1);
            $shipping = (auth()->guard('admin')->user()->shipping == 1);
            $blog = (auth()->guard('admin')->user()->blog == 1);
            $setting = (auth()->guard('admin')->user()->setting == 1);
            $returnorder = (auth()->guard('admin')->user()->returnorder == 1);
            $review = (auth()->guard('admin')->user()->review == 1);
            $orders = (auth()->guard('admin')->user()->orders == 1);
            $stock = (auth()->guard('admin')->user()->stock == 1);
            $reports = (auth()->guard('admin')->user()->reports == 1);
            $alluser = (auth()->guard('admin')->user()->alluser == 1);
            $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
            @endphp


            @if($category == true)
            <li class="treeview {{ ($prefix == '/category')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Category </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>Manage Category</a></li>
                </ul>
            </li>
            @else
            @endif


            @if($brand == true)
            <li class="treeview {{ ($prefix == '/brand')?'active':'' }}  ">
            <a href="#">
                <i class="fa fa-delicious"></i>
                <span>Brands</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ ($route == 'all.brand')? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>Manage Brand</a></li>
            </ul>
            </li>
            @else
            @endif


            @if($product == true)
            <li class="treeview {{ ($prefix == '/product')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-th-list"></i>
                    <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'add-product')? 'active':'' }}"><a href="{{ route('add-product') }}"><i class="ti-more"></i>Add Products</a></li>
                    <li class="{{ ($route == 'manage-product')? 'active':'' }}"><a href="{{ route('manage-product') }}"><i class="ti-more"></i>Manage Products</a></li>
                </ul>
            </li>
            @else
            @endif


            @if($slider == true)
            <li class="treeview {{ ($prefix == '/slider')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-sliders"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'manage-slider')? 'active':'' }}"><a href="{{ route('manage-slider') }}"><i class="ti-more"></i>Manage Slider</a></li>
                </ul>
            </li>
            @else
            @endif


            @if($orders == true)
            <li class="treeview {{ ($prefix == '/orders')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-first-order"></i>
                    <span>Order </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ ($route == 'confirmed-orders')? 'active':'' }}"><a href="{{ route('confirmed-orders') }}"><i class="ti-more"></i>Manage Orders</a></li>

                </ul>
            </li>
            @else
            @endif


            @if($reports == true)
            <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-area-chart"></i>
                    <span>Reports </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>Sale Reports</a></li>
                    <li class="{{ ($route == 'all-charts')? 'active':'' }}"><a href="{{ route('all-charts') }}"><i class="ti-more"></i>Sale Charts</a></li>
                </ul>
            </li>
            @else
            @endif


            @if($alluser == true)
            <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-user-o"></i>
                    <span>User </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all-users')? 'active':'' }}"><a href="{{ route('all-users') }}"><i class="ti-more"></i>Manage User Acount</a></li>
                </ul>
            </li>
            @else
            @endif


            @if($adminuserrole == true)
            <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.admin.user')? 'active':'' }}"><a href="{{ route('all.admin.user') }}"><i class="ti-more"></i>Manage Admin Account</a></li>


                </ul>
            </li>
            @else
            @endif


            <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
                <a href="#">
                    <i class="fa fa-paper-plane"></i>
                    <span>Chat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li class="{{ ($route == 'chat-list')? 'active':'' }}">
                    <a href="{{ route('chat-list') }}"><i class="fa fa-paper-plane"></i><span>Live Chat</span>
                   </a>
                </li>

                </ul>
            </li>

    </section>
</aside>
