@extends('frontend.main_master')

@section('title')
Stripe Payment Page
@endsection

@section('content')
<style>
    /**
    * The CSS shown here will not be introduced in the Quickstart guide, but shows
    * how you can use CSS to style your Element's container.
    */
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;}
</style>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('home_index') }}">Home</a></li>
                <li class='active'>Stripe</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <form action="{{ route('stripe.order') }}" method="post" id="payment-form">
                    @csrf

                    <div class="col-md-7">

                        <div class="checkout-progress-sidebar">

                            <div class="panel-group">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Shipping Method </h4>
                                    </div>

                                    <div class="ship_radio_wrap">

                                        @foreach ($shipMethodRel as $item_method)
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ship_method" value="{{ $item_method['id'] }}" data-amount="{{ $item_method['amount'] }}" {{ old('ship_method') == $item_method['id'] ? 'checked' : '' }}>
                                                {{ $item_method['text'] }}
                                            </label>
                                        </div>
                                        @endforeach

                                        @error('ship_method')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div> <!-- /.ship_radio_wrap -->

                                </div>

                            </div>

                        </div>
                        <!-- end checkout-progress-sidebar -->

                        <!-- checkout-progress-sidebar Billing Address -->
                        <div class="checkout-progress-sidebar">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Billing Address </h4>
                                    </div>

                                    <div class="m-t-15">


                                        <div class="bbox_wrap" data-api_url="{{ route('bill.ajax') }}" data-type="bill">

                                            <div class="bbox_out" data-id="-1">
                                                <div class="bbox_plain bbox_plain_new checked">
                                                    <div class="line-1">
                                                        Same as Shipping Address
                                                    </div>

                                                    <div class="bbox_btn">
                                                        <i class="fa fa-check shipp_choose"></i>
                                                    </div>
                                                </div>
                                            </div>

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

                                        </div>

                                        <div class="row m-t-25">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputFirstName">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" id="exampleInputFirstName" name="bill_first_name" value="{{ old('bill_first_name', $data['first_name']) }}" class="form-control">
                                                    @error('bill_first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputLastName">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" id="exampleInputLastName" name="bill_last_name" value="{{ old('bill_last_name', $data['last_name']) }}" class="form-control" >
                                                    @error('bill_last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputPhone">Phone Number <span class="text-danger">*</span></label>
                                                    <input type="text" id="exampleInputPhone" name="bill_phone" value="{{ old('bill_phone', $data['phone']) }}" class="form-control" >
                                                    @error('bill_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputCompany">Company</label>
                                            <input type="text" id="exampleInputCompany" name="bill_company" value="{{ old('bill_company', $data['company']) }}" class="form-control" placeholder="optional">
                                            @error('bill_company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputAddress">Address <span class="text-danger">*</span></label>
                                                    <input type="text" id="exampleInputAddress" name="bill_address" value="{{ old('bill_address', $data['address']) }}" class="form-control">
                                                    @error('bill_address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputApt">Apt/Unit/Suite</label>
                                                    <input type="text" id="exampleInputApt" name="bill_apt" value="{{ old('bill_apt', $data['apt']) }}" class="form-control" placeholder="optional">
                                                    @error('bill_apt')
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
                                                <input type="text" id="exampleInputCity" name="bill_city" value="{{ old('bill_city', $data['city']) }}" class="form-control">
                                                @error('bill_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="info-title" for="exampleInputProvince">Province <span class="text-danger">*</span></label>
                                                <select class="form-control" id="exampleInputProvince" name="bill_province">
                                                    <option value="">Select ...</option>
                                                    @foreach ($list_province as $item)
                                                    <option value="{{ $item->id }}" {{ old('bill_province', $data['province']) == $item->id ? 'selected' : '' }}>{{ $item->province_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('bill_province')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="info-title" for="exampleInputPostal">Postal Code <span class="text-danger">*</span></label>
                                                <input type="text" id="exampleInputPostal" name="bill_postal_code" value="{{ old('bill_postal_code', $data['postal_code']) }}" class="form-control" >
                                                @error('bill_postal_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div><!-- panel-body  -->
                                </div>
                            </div>
                        </div>
                        <!-- /.checkout-progress-sidebar Billing Address -->

                    </div> <!--  // end col-md-7 -->


                    <div class="col-md-5">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Order Total includes shipping and tax </h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">
                                            <li class="m-b-15" id="amount_ship">
                                                <h5>
                                                    <strong>Shipping: </strong> <span>--</span>
                                                </h5>
                                            </li>
                                            <li class="m-b-15" id="amount_tax">
                                                <h5>
                                                    <strong>Est.Tax: </strong> <span>${{ $amount_tax }}</span>
                                                </h5>
                                            </li>
                                            <li class="m-b-15" id="amount_subtotal">
                                                <h5>
                                                    <strong>SubTotal: </strong> <span>${{ $cartTotal }}</span>
                                                </h5>
                                            </li>
                                            <hr>
                                            <li id="amount">
                                                <h5>
                                                    <strong>Total: </strong> <span>--</span>
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.checkout-progress-sidebar -->

                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                    </div>

                                    <div class="form-row">
                                        <label for="card-element">

                                            <input type="hidden" name="first_name" value="{{ $data['first_name'] }}">
                                            <input type="hidden" name="last_name" value="{{ $data['last_name'] }}">
                                            <input type="hidden" name="phone" value="{{ $data['phone'] }}">
                                            <input type="hidden" name="company" value="{{ $data['company'] }}">
                                            <input type="hidden" name="address" value="{{ $data['address'] }}">
                                            <input type="hidden" name="apt" value="{{ $data['apt'] }}">
                                            <input type="hidden" name="city" value="{{ $data['city'] }}">
                                            <input type="hidden" name="province" value="{{ $data['province'] }}">
                                            <input type="hidden" name="postal_code" value="{{ $data['postal_code'] }}">

                                        </label>

                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <br>

                                    <button class="btn btn-primary" type="submit">Submit Payment</button>

                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div><!--  // end col-md-5 -->

                </form>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ===== == BRANDS CAROUSEL : END === === -->

    </div><!-- /.container -->
</div><!-- /.body-content -->

<script type="text/javascript">
    // 默认选中第 1 个
    // $('.bbox_out:eq(0)').click()


    // Create a Stripe client.
    var stripe = Stripe('pk_test_51LlImKFoyekJx5dtbE1AbsuNOp8GI0e0yLgduuCIUleuV1YEnrnQrU5Xfo1RVnA9k06BgS7h6eb8xvihqqJrxScY00r7D8PCBu');
    // Create an instance of Elements.
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });
    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
</script>
@endsection
