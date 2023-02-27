@extends('frontend.main_master')

@section('title')
My Checkout
@endsection

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('home_index') }}">Home</a></li>
                <li class='active'>Checkout</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->




<div class="body-content">
    <div class="container">
        <div class="checkout-box ">

            <div class="row">
                <!-- .register-form -->
                <form class="register-form" action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
                            <div class="panel panel-default checkout-step-01">

                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title"><b>Shipping Address</b></h4>
                                </div>
                                <!-- /.panel-heading -->

                                <!-- panel-body  -->
                                <div class="m-t-15">

                       
                                    <div class="bbox_wrap" data-api_url="{{ route('ship.ajax') }}" data-type="ship">

                                        <div class="bbox_out" data-id>
                                            <div class="bbox_plain bbox_plain_new">
                                                <div class="line-1">
                                                    Add New Address
                                                </div>

                                                <div class="bbox_btn">
                                                    <i class="fa fa-check shipp_choose"></i>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($list_ship as $v)
                                        <div class="bbox_out" data-id="{{ $v->id }}">
                                            <div class="bbox_plain">
                                                <div class="line-1">{{ $v->first_name }} {{ $v->last_name }}</div>
                                                @if ($v->company)
                                                <div class="m-t-5 line-1">{{ $v->company }}</div>
                                                @endif
                                                <div class="m-t-5 line-1">
                                                    {{ $v->address }}
                                                    @if ($v->apt)
                                                    , {{ $v->apt }}
                                                    @endif
                                                </div>
                                                <div class="m-t-5 line-1">{{ $v->city }}, {{ $list_province[$v->province]['province_name'] ?? '--' }}, {{ $v->postal_code }}</div>
                                                <div class="bbox_btn">
                                                    <i class="fa fa-check shipp_choose"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                    <div class="row m-t-25">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputFirstName">First Name <span class="text-danger">*</span></label>
                                                <input type="text" id="exampleInputFirstName" name="first_name" value="{{ old('first_name') }}" class="form-control" >
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
                                                <input type="text" id="exampleInputLastName" name="last_name" value="{{ old('last_name') }}" class="form-control" >
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
                                                <input type="text" id="exampleInputPhone" name="phone" value="{{ old('phone') }}" class="form-control" >
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
                                        <input type="text" id="exampleInputCompany" name="company" value="{{ old('company') }}" class="form-control" placeholder="Optional">
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
                                                <input type="text" id="exampleInputAddress" name="address" value="{{ old('address') }}" class="form-control" >
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputApt">Apt/Unit/Suite</label>
                                                <input type="text" id="exampleInputApt" name="apt" value="{{ old('apt') }}" class="form-control" placeholder="Optional">
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

                                    <h5 class="label_only m-t-20">
                                        We only ship to Canada.
                                    <h5>

                                </div><!-- panel-body  -->

                            </div><!-- /.checkout-steps -->
                        </div> <!-- /#accordion -->

                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Checkout Progress</h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">

                                            @foreach($carts as $item)
                                            <li>
                                      
                                                <img src="{{ asset($item->options->image) }}" style="height: 50px; width: 50px;">
                                            </li>

                                            <li>
                                                <strong>Qty: </strong>
                                                {{ $item->qty }} 

                                                &nbsp


                                                <strong>Price: </strong>
                                                 ${{ $item->price }} 
                                            </li>
                                            @endforeach
                                            <hr>
                                            <li>
                                                <strong>SubTotal: </strong> ${{ $cartTotal }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>

                    <div class="col-md-4">

                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar">
                            <div class="panel-group">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title"><i class="fa fa-lock"></i> Security & Privacy</h4>
                                    </div>

                                    <div class="">
                                        <div>
                                            Every transaction on BestChoice is secure. Any personal information you give us will be handled according to our <a href="javascript:;">Privacy Policy</a>.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.checkout-progress-sidebar -->

                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar">
                            <div class="panel-group">
                                <div class="panel panel-default">

                                    <input type="hidden" name="payment_method" value="stripe">

                                    <button type="submit" class="btn btn-primary checkout-page-button">PROCCED TO PAYMENT</button>

                                </div>
                            </div>
                        </div>
                        <!-- /.checkout-progress-sidebar -->

                    </div>
                </form>
                <!-- /.register-form -->
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- === ===== BRANDS CAROUSEL ==== ======== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->

@endsection
