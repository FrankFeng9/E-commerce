<?php

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ChartController;
use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Backend\AdminUserController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\CartController;

use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;

use App\Http\Controllers\User\AllUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginFormNew'])->name('admin.login.show');
    // Route::get('/login_new', [AdminController::class, 'loginFormNew'])->name('admin.login_new.show');
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth_admin'])->group(function () {
    Route::middleware(['auth_admin'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Route::middleware(['auth_admin'])->get('/admin/dashboard_new', function () {
    //     return view('admin.index_new');
    // })->name('dashboard');

    // Admin All Routes
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

    Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

    Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

});  // end Middleware admin

// User ALL Routes

Route::middleware(['auth:web'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

Route::get('/', [IndexController::class, 'index'])->name('home_index');

// live chat
Route::get('/chat/test', [IndexController::class, 'chat_test'])->name('chat_test');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');

    Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');

    Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');

    Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');

    Route::get('/user/billing', [IndexController::class, 'UserBilling'])->name('user.billing');

    Route::get('/user/billing/add', [IndexController::class, 'UserBillingAdd'])->name('user.billing.add');

    Route::get('/user/billing/edit/{id}', [IndexController::class, 'UserBillingEdit'])->name('user.billing.edit');

    Route::get('/user/billing/delete/{id}', [IndexController::class, 'UserBillingDelete'])->name('user.billing.delete');

    Route::post('/user/billing/store', [IndexController::class, 'UserBillingStore'])->name('user.billing.store');

    Route::post('/user/billing/update', [IndexController::class, 'UserBillingUpdate'])->name('user.billing.update');

    Route::get('/user/shipping', [IndexController::class, 'UserShipping'])->name('user.shipping');

    Route::get('/user/shipping/add', [IndexController::class, 'UserShippingAdd'])->name('user.shipping.add');

    Route::get('/user/shipping/edit/{id}', [IndexController::class, 'UserShippingEdit'])->name('user.shipping.edit');

    Route::get('/user/shipping/delete/{id}', [IndexController::class, 'UserShippingDelete'])->name('user.shipping.delete');

    Route::post('/user/shipping/store', [IndexController::class, 'UserShippingStore'])->name('user.shipping.store');

    Route::post('/user/shipping/update', [IndexController::class, 'UserShippingUpdate'])->name('user.shipping.update');

});

// Admin Brand All Routes
Route::prefix('brand')->middleware('auth_admin')->group(function () {

    Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');

    Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');

    Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');

    Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');

    Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');

});

// Admin Category all Routes
Route::prefix('category')->middleware('auth_admin')->group(function () {

    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

});

// Admin Products All Routes

Route::prefix('product')->middleware('auth_admin')->group(function () {

    Route::get('/add', [ProductController::class, 'AddProduct'])->name('add-product');

    Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');
    Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');

    Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');

    Route::post('/data/update', [ProductController::class, 'ProductDataUpdate'])->name('product-update');

    Route::post('/image/update', [ProductController::class, 'MultiImageUpdate'])->name('update-product-image');

    Route::post('/thambnail/update', [ProductController::class, 'ThambnailImageUpdate'])->name('update-product-thambnail');

    Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('product.multiimg.delete');

    Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product.inactive');

    Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');

    Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');

});


// Admin Slider All Routes

Route::prefix('slider')->middleware('auth_admin')->group(function () {

    Route::get('/view', [SliderController::class, 'SliderView'])->name('manage-slider');

    Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');

    Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');

    Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');

    Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');

});



// Frontend All Routes

// Frontend Product Details Page url
Route::get('/product/details/{id}', [IndexController::class, 'ProductDetails'])->name('product.details');


// Product View Modal with Ajax
Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);

// Add to Cart Store Data
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Get Data from mini cart
Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);

// Remove mini cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

// Add to Wishlist
Route::post('/add-to-wishlist/{product_id}', [CartController::class, 'AddToWishlist']);


Route::post('/stripe/succeeded', [StripeController::class, 'StripeSucceeded'])->name('stripe.succeeded');
Route::get('/stripe/test', [StripeController::class, 'test']);

// User Must Login
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'],'namespace' => 'User'], function () {
    // Wishlist page
    Route::get('/wishlist', [WishlistController::class, 'ViewWishlist'])->name('wishlist');

    Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishlistProduct']);

    Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlistProduct']);

    Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');

    Route::get('/order/detail/{order_id}', [StripeController::class, 'OrderDetail'])->name('order.detail');

    Route::get('/my/orders', [AllUserController::class, 'MyOrders'])->name('my.orders');

    Route::get('/order_details/{order_id}', [AllUserController::class, 'OrderDetails'])->name('user.order.details');

});



// My Cart Page All Routes
Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');

Route::get('/user/get-cart-product', [CartPageController::class, 'GetCartProduct']);

Route::get('/user/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartProduct']);

Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);

Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);


// Checkout Routes
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

    Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');

    Route::get('/checkout/store', [CheckoutController::class, 'CheckoutStripe'])->name('checkout.stripe');
});

Route::get('/ship-get/ajax', [CheckoutController::class, 'ShipGetAjax'])->name('ship.ajax');

Route::get('/bill-get/ajax', [CheckoutController::class, 'BillGetAjax'])->name('bill.ajax');

// Admin Order All Routes
Route::prefix('orders')->middleware('auth_admin')->group(function () {

    Route::get('/pending/orders/details/{order_id}', [OrderController::class, 'PendingOrdersDetails'])->name('pending.order.details');

    Route::get('/confirmed/orders', [OrderController::class, 'ConfirmedOrders'])->name('confirmed-orders');

});

// Admin Reports Routes
Route::prefix('reports')->middleware('auth_admin')->group(function () {

    Route::get('/view', [ReportController::class, 'ReportView'])->name('all-reports');

    Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');

    Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');

    Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');

    Route::post('/search/by/product', [ReportController::class, 'ReportByProduct'])->name('search-by-product');

});

Route::prefix('charts')->middleware('auth_admin')->group(function () {

    Route::get('/view', [ChartController::class, 'ChartView'])->name('all-charts');

    Route::get('/sale-amount-by-year', [ChartController::class, 'SaleAmountByYear'])->name('sale-amount-by-year');
    Route::get('/sale-amount-by-category', [ChartController::class, 'SaleAmountByCategory'])->name('sale-amount-by-category');
    Route::get('/sale-amount-by-brand', [ChartController::class, 'SaleAmountByBrand'])->name('sale-amount-by-brand');

});



// Admin Get All User Routes
Route::prefix('alluser')->middleware('auth_admin')->group(function () {
    Route::get('/view', [AdminProfileController::class, 'AllUsers'])->name('all-users');
    Route::get('/delete', [AdminProfileController::class, 'DeleteUsers'])->name('delete-users');
});


// Admin Reports Routes
Route::prefix('chat')->middleware('auth_admin')->group(function () {

    Route::get('/list', [ChatController::class, 'ListView'])->name('chat-list');

    Route::get('/detail/{roomId}', [ChatController::class, 'DetailView'])->name('chat-detail');

});


// Admin User Role Routes
Route::prefix('adminuserrole')->middleware('auth_admin')->group(function () {
    Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all.admin.user');

    Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add.admin');

    Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin.user.store');

    Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');

    Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');

    Route::get('/delete/{id}', [AdminUserController::class, 'DeleteAdminRole'])->name('delete.admin.user');

    Route::get('/edit/password/{id}', [AdminUserController::class, 'EditAdminPassword'])->name('edit.admin.password');

    Route::post('/update/password', [AdminUserController::class, 'UpdateAdminPassword'])->name('admin.password.update');
});

// Shop Page Route
Route::get('/shop', [ShopController::class, 'ShopPage'])->name('shop.page');

Route::post('/shop/filter', [ShopController::class, 'ShopFilter'])->name('shop.filter');

// Shop Recommend Route
Route::get('/recommend', [ShopController::class, 'ShopRecommend'])->name('shop.recommend');
