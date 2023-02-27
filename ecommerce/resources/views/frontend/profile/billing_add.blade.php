@extends('frontend.main_master')

@section('head_css')
<style>
    .bbox {
        background-color: oldlace;
        border: 1px solid #e2e2e2;
        border-radius: 14px;
        padding: 10px;
        margin: 0 5px 5px 0;
        height: 145px;
        position: relative;
    }

    .bbox_btn {
        position: absolute;
        bottom: 10px;
    }

    .bbox_flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')
            <div class="col-md-10">
                <div class="card">
                    <h3 class="text-center m-b-20"><span class="text-danger">Add Billing Address</span></h3>
                    <div class="card-body">

                        <form method="post" action="{{ route('user.billing.store') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputFirstName">First Name <span class="text-danger">*</span></label>
                                        <input type="text" id="exampleInputFirstName" name="first_name" value="{{ old('first_name') }}" class="form-control">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputLastName">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" id="exampleInputLastName" name="last_name" value="{{ old('last_name') }}" class="form-control">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputPhone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" id="exampleInputPhone" name="phone" value="{{ old('phone') }}" class="form-control">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputCompany">Company</label>
                                <input type="text" id="exampleInputCompany" name="company" value="{{ old('company') }}" class="form-control">
                                @error('company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputAddress">Address <span class="text-danger">*</span></label>
                                        <input type="text" id="exampleInputAddress" name="address" value="{{ old('address') }}" class="form-control">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputApt">Apt</label>
                                        <input type="text" id="exampleInputApt" name="apt" value="{{ old('apt') }}" class="form-control">
                                        @error('apt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label class="info-title" for="exampleInputCity">City <span class="text-danger">*</span></label>
                                    <input type="text" id="exampleInputCity" name="city" value="{{ old('city') }}" class="form-control">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="info-title" for="exampleInputProvince">Province <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleInputProvince" name="province">
                                        <option value="">Select ...</option>
                                        @foreach ($list_province as $item)
                                        <option value="{{ $item->id }}" {{ old('province') == $item->id ? 'selected' : '' }}>{{ $item->province_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="info-title" for="exampleInputPostal">Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" id="exampleInputPostal" name="postal_code" value="{{ old('postal_code') }}" class="form-control">
                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-t-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- // end col md 6 -->
        </div> <!-- // end row -->
    </div>
</div>
@endsection
