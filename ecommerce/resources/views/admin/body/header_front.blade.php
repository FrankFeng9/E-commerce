<header class="header-style-1">

    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="">
            <div class="row ">
                <div class="col-md-4">&nbsp;</div>

                <div class="col-xs-12 col-sm-12 col-md-4 logo-holder text-center">

                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo" style="display: inline-block">
                        <a href="{{ url('/') }}"> <img src="{{ asset('img/logo.jpg') }}" alt="logo" style="height: 40px; max-width: 270px;"> </a>
                    </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->

                </div>
                <!-- /.logo-holder -->

                <div class="col-md-4 clearfix">

                    @php
                    $adminData = Auth::guard('admin')->user();
                    @endphp

                    @if ($adminData)
                    <div class="navbar-custom-menu r-side">
                        <ul class="nav navbar-nav">

                            <!-- User Account-->
                            <li class="dropdown user user-menu">
                                <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
                                    {{-- <img src="{{ (!empty($adminData->profile_photo_path))? url($adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt=""> --}}
                                    Hello, {{$adminData->name}}
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="user-body">
                                        <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="ti-user text-muted mr-2"></i> Profile</a>

                                        <a class="dropdown-item" href="{{ route('admin.change.password') }}"><i class="ti-wallet text-muted mr-2"></i> Change Password </a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>

            </div>
            <!-- /.row -->


        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

</header>
