@extends('frontend.main_master')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->

    </div><!-- /.container -->

</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">

        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-md-offset-3 sign-in">
                    <h4 class="">Login</h4>
                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control unicase-form-control text-input">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me!
                            </label>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>

                    <div class="m-t-20">
                        <a href="{{ route('password.request') }}" class="forgot-password fs-14">Forgot your Password?</a>
                    </div>

                    <div class="m-t-10">
                        <a href="{{ route('register') }}" class="forgot-password fs-14">No account? Sign up</a>
                    </div>
                </div>
                <!-- Sign-in -->

            </div><!-- /.row -->

        </div><!-- /.sigin-in-->

    </div><!-- /.container -->

</div><!-- /.body-content -->
@endsection

@section('foot_js')
<script>
    @if(Session::has('status'))
    var type = "{{ Session::get('status','passwords.reset') }}"
    switch(type){
        case 'passwords.reset':
        toastr.success("Successfully reset password");
        break;

        case 'passwords.user':
        toastr.warning("User does not exist");
        break;

        case 'passwords.token':
        toastr.warning("Token invalid");
        break;
    }
    @endif
</script>
@endsection
