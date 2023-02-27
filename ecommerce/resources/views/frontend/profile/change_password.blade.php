@extends('frontend.main_master')

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">

            @include('frontend.common.user_sidebar')

            <div class="col-md-2">

            </div> <!-- // end col md 2 -->

            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Change Password</span><strong> </strong>   </h3>

                    <div class="card-body">

                        <form method="post" action="{{ route('user.password.update') }}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Current Password <span class="text-danger">*</span></label>
                                <input type="password" id="current_password" name="oldpassword" value="{{ old('oldpassword') }}" class="form-control" >
                                @error('oldpassword')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">New Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>

                </div> <!-- // end card -->

            </div> <!-- // end col md 6 -->

        </div> <!-- // end row -->

    </div> <!-- // end container -->

</div> <!-- // end body-content -->
@endsection
