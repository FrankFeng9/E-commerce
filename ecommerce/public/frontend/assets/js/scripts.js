jQuery(document).ready(function() {
    "use strict";

    /*===================================================================================*/
    /*	OWL CAROUSEL
    /*===================================================================================*/
    jQuery(function () {
        var dragging = true;
        var owlElementID = "#owl-main";

        function fadeInReset() {
            if (!dragging) {
                jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
            }
        }

        function fadeInDownReset() {
            if (!dragging) {
                jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
            }
        }

        function fadeInUpReset() {
            if (!dragging) {
                jQuery(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
            }
        }

        function fadeInLeftReset() {
            if (!dragging) {
                jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
            }
        }

        function fadeInRightReset() {
            if (!dragging) {
                jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
            }
        }

        function fadeIn() {
            jQuery(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInDown() {
            jQuery(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInUp() {
            jQuery(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInLeft() {
            jQuery(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInRight() {
            jQuery(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            jQuery(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        jQuery(owlElementID).owlCarousel({

            autoPlay: 5000,
            stopOnHover: true,
            navigation: true,
            pagination: true,
            singleItem: true,
            addClassActive: true,
            transitionStyle: "fade",
            navigationText: ["<i class='icon fa fa-angle-left'></i>", "<i class='icon fa fa-angle-right'></i>"],

            afterInit: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterMove: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterUpdate: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            startDragging: function() {
                dragging = true;
            },

            afterAction: function() {
                fadeInReset();
                fadeInDownReset();
                fadeInUpReset();
                fadeInLeftReset();
                fadeInRightReset();
                dragging = false;
            }

        });

        if (jQuery(owlElementID).hasClass("owl-one-item")) {
            jQuery(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
        }

        jQuery(owlElementID + ".owl-one-item").owlCarousel({
            singleItem: true,
            navigation: false,
            pagination: false
        });




        jQuery('.home-owl-carousel').each(function(){

            var owl = $(this);
            var  itemPerLine = owl.data('item');
            if(!itemPerLine){
                itemPerLine = 4;
            }
            owl.owlCarousel({
                items : itemPerLine,
                itemsTablet:[768,2],
                navigation : true,
                pagination : false,

                navigationText: ["", ""]
            });
        });

        jQuery('.homepage-owl-carousel').each(function(){

            var owl = $(this);
            var  itemPerLine = owl.data('item');
            if(!itemPerLine){
                itemPerLine = 4;
            }
            owl.owlCarousel({
                items : itemPerLine,
                itemsTablet:[768,2],
                itemsDesktop : [1199,2],
                navigation : true,
                pagination : false,

                navigationText: ["", ""]
            });
        });

        jQuery(".blog-slider").owlCarousel({
            items : 2,
            itemsDesktopSmall :[979,2],
            itemsDesktop : [1199,2],
            navigation : true,
            slideSpeed : 300,
            pagination: false,
            navigationText: ["", ""]
        });

        jQuery(".best-seller").owlCarousel({
            items : 3,
            navigation : true,
            itemsDesktopSmall :[979,2],
            itemsDesktop : [1199,2],
            slideSpeed : 300,
            pagination: false,
            paginationSpeed : 400,
            navigationText: ["", ""]
        });

        jQuery(".sidebar-carousel").owlCarousel({
            items : 1,
            itemsTablet:[768,2],
            itemsDesktopSmall :[979,2],
            itemsDesktop : [1199,1],
            navigation : true,
            slideSpeed : 300,
            pagination: false,
            paginationSpeed : 400,
            navigationText: ["", ""]
        });

        jQuery(".brand-slider").owlCarousel({
            items : 6,
            navigation : true,
            slideSpeed : 300,
            pagination: false,
            paginationSpeed : 400,
            navigationText: ["", ""]
        });
        jQuery("#advertisement").owlCarousel({
            items : 1,
            itemsDesktopSmall :[979,2],
            itemsDesktop : [1199,1],
            navigation : true,
            slideSpeed : 300,
            pagination: true,
            paginationSpeed : 400,
            navigationText: ["", ""]
        });



    });

    /*===================================================================================*/
    /*  LAZY LOAD IMAGES USING ECHO
    /*===================================================================================*/
    jQuery(function(){
        echo.init({
            offset: 100,
            throttle: 250,
            unload: false
        });
    });

    /*===================================================================================*/
    /*  RATING
    /*===================================================================================*/

    jQuery(function(){
        jQuery('.rating').rateit({max: 5, step: 1, value : 4, resetable : false , readonly : true});
    });

    /*===================================================================================*/
    /* PRICE SLIDER
    /*===================================================================================*/
    jQuery(function () {

        // Price Slider
        if (jQuery('.price-slider').length > 0) {
            let price_default = $('.price-slider').val();
            price_default = price_default ? price_default: '10,3500';
            const price_default_arr = price_default.split(',');
            jQuery('.price-slider').slider({
                min: 10,
                max: 3500,
                step: 10,
                value: price_default_arr.map(x => parseInt(x)),
                handle: "square"

            });

        }

    });


    /*===================================================================================*/
    /* SINGLE PRODUCT GALLERY
    /*===================================================================================*/
    jQuery(function(){
        jQuery('#owl-single-product').owlCarousel({
            items:1,
            itemsTablet:[768,2],
            itemsDesktop : [1199,1]

        });

        jQuery('#owl-single-product-thumbnails').owlCarousel({
            items: 4,
            pagination: true,
            rewindNav: true,
            itemsTablet : [768, 4],
            itemsDesktop : [1199,3]
        });

        jQuery('#owl-single-product2-thumbnails').owlCarousel({
            items: 6,
            pagination: true,
            rewindNav: true,
            itemsTablet : [768, 4],
            itemsDesktop : [1199,3]
        });

        jQuery('.single-product-slider').owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            singleItem: true,
            pagination: true
        });


    });





    /*===================================================================================*/
    /*  WOW
    /*===================================================================================*/

    jQuery(function () {
        new WOW().init();
    });


    /*===================================================================================*/
    /*  TOOLTIP
    /*===================================================================================*/
    jQuery("[data-toggle='tooltip']").tooltip();


    // Shop Page sidebar filter
    $('#collapseOne').on('hide.bs.collapse', function () {
        $('#collapseOneIcon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        $('[name=collapseOne]').val(null);
    });

    $('#collapseOne').on('show.bs.collapse', function () {
        $('#collapseOneIcon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $('[name=collapseOne]').val(1);
    });

    $('#collapseSecond').on('hide.bs.collapse', function () {
        $('#collapseSecondIcon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        $('[name=collapseSecond]').val(null);
    });

    $('#collapseSecond').on('show.bs.collapse', function () {
        $('#collapseSecondIcon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $('[name=collapseSecond]').val(1);
    });

    $('#collapseThird').on('hide.bs.collapse', function () {
        $('#collapseThirdIcon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        $('[name=collapseThird]').val(null);
    });

    $('#collapseThird').on('show.bs.collapse', function () {
        $('#collapseThirdIcon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $('[name=collapseThird]').val(1);
    });

    $('#collapseFour').on('hide.bs.collapse', function () {
        $('#collapseFourIcon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        $('[name=collapseFour]').val(null);
    });

    $('#collapseFour').on('show.bs.collapse', function () {
        $('#collapseFourIcon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $('[name=collapseFour]').val(1);
    });

    $('#collapseFive').on('hide.bs.collapse', function () {
        $('#collapseFiveIcon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        $('[name=collapseFive]').val(null);
    });

    $('#collapseFive').on('show.bs.collapse', function () {
        $('#collapseFiveIcon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $('[name=collapseFive]').val(1);
    });

    const val_one = $('[name=collapseOne]').val() || $('[name="category[]"]:checked').length;
    if (val_one) {
        $('#collapseOne').collapse('show');
    }
    const val_second = $('[name=collapseSecond]').val() || $('[name="brand[]"]:checked').length;
    if (val_second) {
        $('#collapseSecond').collapse('show');
    }
    const val_third = $('[name=collapseThird]').val() || $('[name="os[]"]:checked').length;
    if (val_third) {
        $('#collapseThird').collapse('show');
    }
    const val_four = $('[name=collapseFour]').val() || $('[name="usage[]"]:checked').length;
    if (val_four) {
        $('#collapseFour').collapse('show');
    }
    const val_five = $('[name=collapseFive]').val() || $('[name="price_range"]').val();
    if (val_five) {
        $('#collapseFive').collapse('show');
    }

    const filter_tab_choose = Cookies.get('filter_tab_choose');
    if (!filter_tab_choose || filter_tab_choose == 'grid') {
        $('#grid_for_tab').find('a').tab('show')
    } else {
        $('#list_for_tab').find('a').tab('show')
    }
    // end Shop Page sidebar filter

})

// Get Recommendation
function chooseRecomm(that) {
    const btn = $(that);
    const val = btn.data('val');
    let input = $(that).prev('.input_hide');
    if (btn.hasClass('btn-success')) {
        input.val(null);
        $(that).removeClass('btn-success').addClass('btn-default');
    } else {
        input.val(val);
        $(that).addClass('btn-success').removeClass('btn-default');
    }
}
function chooseRecommSingle(that) {
    const btn = $(that);
    const item_my = $(that).closest('.recomm_item_my');
    const btns = item_my.find('.recomm_btn_my');
    const val = btn.data('val');
    const input = item_my.find('.input_hide');
    if (btn.hasClass('btn-success')) {
        input.val(null);
        btn.removeClass('btn-success').addClass('btn-default');
    } else {
        input.val(val);
        btns.removeClass('btn-success');
        btn.addClass('btn-success').removeClass('btn-default');
    }
}
// end Get Recommendation

// Header Search
$('#search_btn_my').click(function () {
    const curr_search = $('#searchForm').find('input[name="search"]')
    const input_search = $('input[name="search"]')
    const filterForm = $('#filterform')

    if (!curr_search) {
        toastr.error("Please enter the search content!")
        return false
    }

    if (filterForm.length) {
        input_search.val(curr_search.val())
        filterForm.submit()
        return false
    }

    return true
});
// end Header Search


// Delete confirm
$(document).on('click','.delete_sweet', function(e) {
    e.preventDefault();
    var link = $(this).prop("href");

    Swal.fire({
        title: 'Are you sure?',
        text: "Delete This Data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link
        }
    })
});
// end Delete confirm


// checkout ship address choose

$('.bbox_out').click(function() {
    // style modify
    $('.bbox_out').find('.bbox_plain').removeClass('checked')
    $(this).find('.bbox_plain').addClass('checked')

    // some variable
    const $wrap = $(this).closest('.bbox_wrap')
    const api_url = $wrap.data('api_url')
    const type = $wrap.data('type')
    const id = $(this).data('id')
    const prefix = type === 'bill' ? 'bill_' : ''

    if (!id) {
        $(`[name=${prefix}first_name]`).val(null)
        $(`[name=${prefix}last_name]`).val(null)
        $(`[name=${prefix}phone]`).val(null)
        $(`[name=${prefix}company]`).val(null)
        $(`[name=${prefix}address]`).val(null)
        $(`[name=${prefix}apt]`).val(null)
        $(`[name=${prefix}city]`).val(null)
        $(`[name=${prefix}province]`).val(null)
        $(`[name=${prefix}postal_code]`).val(null)
        return
    }
    $.ajax({
        url: api_url,
        data: {id},
        success(res) {
            console.log('aaaaaaaaaaaaaaaaaaaa', res, res.first_name)

            $(`[name=${prefix}first_name]`).val(res.first_name)
            $(`[name=${prefix}last_name]`).val(res.last_name)
            $(`[name=${prefix}phone]`).val(res.phone)
            $(`[name=${prefix}company]`).val(res.company)
            $(`[name=${prefix}address]`).val(res.address)
            $(`[name=${prefix}apt]`).val(res.apt)
            $(`[name=${prefix}city]`).val(res.city)
            $(`[name=${prefix}province]`).val(res.province)
            $(`[name=${prefix}postal_code]`).val(res.postal_code)
        },
    })
});

// end checkout ship address choose


//
(function () {
    function returnAmount(text) {
        return Number(text.replace('$', ''));
    }

    function calculateAmount(el) {
        // const amount = $(this).data('amount')
        const amount = $(el).data('amount')
        $('#amount_ship').find('span').text(`$${amount}`)

        const amount_all = returnAmount($('#amount_ship').find('span').text()) +
            returnAmount($('#amount_tax').find('span').text()) +
            returnAmount($('#amount_subtotal').find('span').text())
        $('#amount').find('span').text(amount_all ? `$${parseFloat(amount_all.toFixed(2))}` : '--')
    }

    $('.ship_radio_wrap').find('[name="ship_method"]').change(function () {
        calculateAmount(this)
    });

    const ship_checked = $('.ship_radio_wrap').find('[name="ship_method"]:checked')
    if (ship_checked.length) {
        calculateAmount(ship_checked)
    }
})();

//
