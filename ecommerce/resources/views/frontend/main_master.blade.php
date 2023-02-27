<!DOCTYPE html>
<html lang="en">
@php
$seo = App\Models\Seo::find(1);
@endphp
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <meta name="robots" content="all">

    <!-- /// Google Analytics Code // -->
    <script>
        {{ $seo->google_analytics }}
    </script>
    <!-- /// Google Analytics Code // -->

    <title>@yield('title', 'Best Choice') </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/front_my.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    @yield('head_css')

    <script src="https://js.stripe.com/v3/"></script>
</head>
<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.body.header')
    <!-- ============================================== HEADER : END ============================================== -->

    <!-- ============================================================= BODY ============================================================= -->
    @yield('content')
    <!-- ============================================================= BODY : END============================================================= -->

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.body.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tmpl.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/js.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }
        @endif
    </script>



    <!-- Add to Cart Product Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong><span id="pname"></span> </strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">

                                <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 200px;" id="pimage">

                            </div>

                        </div><!-- // end col md -->


                        <div class="col-md-4">

                            <ul class="list-group">
                                <li class="list-group-item">Product Price: <strong class="text-danger">$<span id="pprice"></span></strong>
                                    <del id="oldprice">$</del>
                                </li>
                                <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
                                <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
                                <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
                            </ul>

                        </div><!-- // end col md -->


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty">Quantity</label>
                                <input type="number" class="form-control" id="qty" value="1" min="1" >
                            </div> <!-- // end form group -->

                            <input type="hidden" id="product_id">
                            <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()" >Add to Cart</button>
                        </div><!-- // end col md -->

                    </div> <!-- // end row -->

                </div> <!-- // end modal Body -->

            </div>
        </div>
    </div>
    <!-- End Add to Cart Product Modal -->


    <script type="text/javascript">
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })

        // Start Product View with Modal

        function productView(id){
            // alert(id)
            $.ajax({
                type: 'GET',
                url: '/product/view/modal/'+id,
                dataType:'json',
                success:function(data){
                    // console.log(data)
                    $('#pname').text(data.product.product_name_en);
                    $('#price').text(data.product.selling_price);
                    $('#pcode').text(data.product.product_code);
                    $('#pcategory').text(data.product.category ? data.product.category.category_name_en : '');
                    $('#pbrand').text(data.product.brand ? data.product.brand.brand_name_en : '');
                    $('#pimage').attr('src','/'+data.product.product_thambnail);

                    $('#product_id').val(id);
                    $('#qty').val(1);

                    // Product Price
                    $('#pprice').text('');
                    $('#oldprice').text('');
                    $('#pprice').text(data.product.selling_price);
                }
            })
        }
        // Eend Product View with Modal


        // Start Add To Cart Product
        function addToCart(){
            var product_name = $('#pname').text();
            var id = $('#product_id').val();
            var color = $('#color option:selected').text();
            var size = $('#size option:selected').text();
            var quantity = $('#qty').val();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data:{
                    color:color, size:size, quantity:quantity, product_name:product_name
                },
                url: "/cart/data/store/"+id,
                success:function(data){

                    miniCart()
                    $('#closeModel').click();
                    // console.log(data)

                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })

                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })

                    }

                    // End Message
                }
            })

        }

        // End Add To Cart Product

    </script>

    <script type="text/javascript">
        function miniCart(){
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType:'json',
                success:function(response){

                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartQty').text(response.cartQty);
                    var miniCart = ""

                    $.each(response.carts, function(key,value){
                        miniCart += `<div class="cart-item product-summary">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="image"> <a href="${value.product_url}"><img src="/${value.options.image}" alt=""></a> </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3 class="name"><a href="${value.product_url}">${value.name}</a></h3>
                                    <div class="price"> ${value.price} * ${value.qty} </div>
                                </div>
                                <div class="col-xs-1 action">
                                    <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
                                </div>
                            </div>
                            <!-- /.cart-item -->
                            <div class="clearfix"></div>
                            <hr>`
                        });

                        $('#miniCart').html(miniCart);
                    }
                })

            }
            miniCart();

            /// mini cart remove Start
            function miniCartRemove(rowId){
                $.ajax({
                    type: 'GET',
                    url: '/minicart/product-remove/'+rowId,
                    dataType:'json',
                    success:function(data){
                        miniCart();

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })

                        }else{
                            Toast.fire({
                                type: 'error',
                                title: data.error
                            })

                        }

                        // End Message

                    }
                });

            }

            //  end mini cart remove


        </script>

        <!--  /// Start Add Wishlist Page  //// -->
        <script type="text/javascript">
            function addToWishList(product_id){
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "/add-to-wishlist/"+product_id,

                    success:function(data){

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success
                            })

                        }else{
                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error
                            })

                        }
                        // End Message
                    }
                })
            }
        </script>
        <!--  /// End Add Wishlist Page  ////   -->

        <!-- /// Load Wishlist Data  -->
        <script type="text/javascript">
            function wishlist(){
                $.ajax({
                    type: 'GET',
                    url: '/user/get-wishlist-product',
                    dataType:'json',
                    success:function(response){

                        var rows = ""
                        $.each(response, function(key,value){
                            rows += `<tr>
                                <td class="col-md-2"><a href="${value.product.product_url}"><img src="/${value.product.product_thambnail} " alt="imga"></a></td>
                                <td class="col-md-7">
                                    <div class="product-name"><a href="${value.product.product_url}">${value.product.product_name_en}</a></div>

                                    <div class="price">
                                        $${value.product.selling_price}
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="${value.product_id}" onclick="productView(this.id)"> Add to Cart </button>
                                </td>
                                <td class="col-md-1 close-btn">
                                    <button type="submit" class="" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>`
                        });

                        $('#wishlist').html(rows);
                    }
                })

            }
            wishlist();



            ///  Wishlist remove Start
            function wishlistRemove(id){
                $.ajax({
                    type: 'GET',
                    url: '/user/wishlist-remove/'+id,
                    dataType:'json',
                    success:function(data){
                        wishlist();

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success
                            })

                        }else{
                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error
                            })

                        }

                        // End Message

                    }
                });

            }

            // End Wishlist remove


        </script>

        <!-- /// End Load Wisch list Data  -->


        <!-- /// Load My Cart /// -->

        <script type="text/javascript">
            function cart(){
                $.ajax({
                    type: 'GET',
                    url: '/user/get-cart-product',
                    dataType:'json',
                    success:function(response){

                        var rows = ""
                        $.each(response.carts, function(key,value){
                            rows += `<tr>
                                <td class="col-md-2 text-center"><a href="${value.product_url}"><img src="/${value.options.image} " alt="imga" style="width:60px; height:60px;"></a></td>

                                <td class="col-md-2">
                                    <div class="product-name"><a href="${value.product_url}">${value.name}</a></div>

                                    <div class="price">
                                        $${value.price}
                                    </div>
                                </td>


                                <td class="col-md-2 text-center">

                                    ${value.qty > 1

                                        ? `<button type="submit" style="background-color:#fdd922; border: 2px solid #fdd922;" id="${value.rowId}" onclick="cartDecrement(this.id)" >–</button> `

                                        : `<button type="submit" style="background-color:#fdd922; border: 2px solid #fdd922;" disabled >–</button> `
                                    }


                                    <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width:25px;" >

                                    <button type="submit" style="background-color:#fdd922; border: 2px solid #fdd922;" id="${value.rowId}" onclick="cartIncrement(this.id)" >+</button>

                                </td>

                                <td class="col-md-2 text-center">
                                    <strong>$${value.subtotal} </strong>
                                </td>


                                <td class="col-md-1 close-btn text-center">
                                    <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>`
                        });

                        $('#cartPage').html(rows);
                    }
                })

            }
            cart();



            ///  Cart remove Start
            function cartRemove(id){
                $.ajax({
                    type: 'GET',
                    url: '/user/cart-remove/'+id,
                    dataType:'json',
                    success:function(data){
                        couponCalculation();
                        cart();
                        miniCart();
                        $('#couponField').show();
                        $('#coupon_name').val('');

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success
                            })

                        }else{
                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error
                            })

                        }

                        // End Message

                    }
                });

            }

            // End Cart remove


            // -------- CART INCREMENT --------//

            function cartIncrement(rowId){
                $.ajax({
                    type:'GET',
                    url: "/cart-increment/"+rowId,
                    dataType:'json',
                    success:function(data){
                        couponCalculation();
                        cart();
                        miniCart();
                    }
                });
            }


            // ---------- END CART INCREMENT -----///



            // -------- CART Decrement  --------//

            function cartDecrement(rowId){
                $.ajax({
                    type:'GET',
                    url: "/cart-decrement/"+rowId,
                    dataType:'json',
                    success:function(data){
                        couponCalculation();
                        cart();
                        miniCart();
                    }
                });
            }


            // ---------- END CART Decrement -----///


        </script>

        <!-- //End Load My cart / -->

        @yield('foot_js')

</body>
</html>
