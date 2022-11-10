<?php


use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\CourseCategoryController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\InnovatorController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\MapController;
use App\Http\Controllers\Backend\EnquiryController;
use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\AllCourseController;
use App\Http\Controllers\User\WishlistController; 
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\PaytmController;
use App\Models\User;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SchoolController;
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



Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');



// Admin all route

Route::get('/admin/logout',[AdminController::class, 'destroy'] )->name('admin.logout');

Route::get('/admin/profile',[AdminProfileController::class, 'AdminProfile'] )->name('admin.profile');

Route::get('/admin/profile/edit',[AdminProfileController::class, 'AdminProfileEdit'] )->name('admin.profile.edit');

Route::post('/admin/profile/store',[AdminProfileController::class, 'AdminProfileStore'] )->name('admin.profile.store');

Route::get('/admin/change/password',[AdminProfileController::class, 'AdminChangePassword'] )->name('admin.change.password');

Route::post('/update/change/password',[AdminProfileController::class, 'AdminUpdateChangePassword'] )->name('update.change.password');

});  // end Middleware admin




// user all route

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
	$id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard', compact('user'));
})->name('dashboard');

Route::get('/',[IndexController::class, 'Index'])->name('fg'); 
Route::get('/user/logout',[IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile',[IndexController::class, 'UserProfile'])->name('user.profile'); 

Route::post('/user/profile/store',[IndexController::class, 'UserProfileStore'])->name('user.profile.store'); 

Route::get('/user/change/password',[IndexController::class, 'UserChangePassword'])->name('user.change.password'); 
Route::post('/uuser/password/update',[IndexController::class, 'UserPasswordUpdate'] )->name('user.password.password');


// All brand admin

Route::prefix('brand')->group(function(){

Route::get('/view',[BrandController::class, 'BrandView'])->name('all.brand'); 
Route::post('/store',[BrandController::class, 'BrandStore'])->name('brand.store');
Route::get('/edit/{id}',[BrandController::class, 'BrandEdit'])->name('brand.edit'); 
Route::post('/update',[BrandController::class, 'BrandUpdate'])->name('brand.update');
Route::get('/delete/{id}',[BrandController::class, 'BrandDlete'])->name('brand.delete');
});



// All category admin

Route::prefix('category')->group(function(){

    //frontend
Route::get('/kit',[CategoryController::class, 'CategoryKit'])->name('all.kit'); 

Route::get('/view',[CategoryController::class, 'CategoryView'])->name('all.category'); 
Route::post('/store',[CategoryController::class, 'CategoryStore'])->name('category.store');
Route::get('/edit/{id}',[CategoryController::class, 'CategoryEdit'])->name('category.edit'); 
Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
Route::get('/delete/{id}',[CategoryController::class, 'CategoryDlete'])->name('category.delete');



// All Sub category admin

Route::get('/sub/view',[SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory'); 
Route::post('/sub/store',[SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
Route::get('/sub/edit/{id}',[SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit'); 
Route::post('sub//update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');
Route::get('/sub/delete/{id}',[SubCategoryController::class, 'SubCategoryDlete'])->name('subcategory.delete');



// All Sub->Subcategory admin

Route::get('/sub/sub/view',[SubCategoryController::class, 'SubSubCategoryView'])->name('all.subsubcategory');

Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

Route::get('/sub-subcategory/ajax/{subcategory_id}', [SubCategoryController::class, 'GetSubSubCategory']);

Route::post('/sub/sub/store', [SubCategoryController::class, 'SubSubCategoryStore'])->name('subsubcategory.store');

Route::get('/sub/sub/edit/{id}', [SubCategoryController::class, 'SubSubCategoryEdit'])->name('subsubcategory.edit');

Route::post('/sub/update', [SubCategoryController::class, 'SubSubCategoryUpdate'])->name('subsubcategory.update');

Route::get('/sub/sub/delete/{id}', [SubCategoryController::class, 'SubSubCategoryDelete'])->name('subsubcategory.delete');


});

// Admin course Category

Route::prefix('coursecategory')->group(function(){ 

Route::get('/view',[CourseCategoryController::class, 'CategoryView'])->name('course.category'); 
Route::post('/store',[CourseCategoryController::class, 'CategoryStore'])->name('coursecategory.store');

Route::get('/edit/{id}',[CourseCategoryController::class, 'CategoryEdit'])->name('coursecategory.edit'); 

Route::post('/update/{id}', [CourseCategoryController::class, 'CategoryUpdate'])->name('coursecategory.update');

Route::get('/delete/{id}',[CourseCategoryController::class, 'CategoryDlete'])->name('coursecategory.delete');


});

// All Admin course

Route::prefix('course')->group(function(){

Route::get('/add', [CourseController::class, 'AddCourse'])->name('add-course');

Route::post('/store', [CourseController::class, 'StoreCourse'])->name('course-store');

Route::get('/manage', [CourseController::class, 'ManageCourse'])->name('manage-course');

Route::get('/edit/{id}', [CourseController::class, 'EditCourse'])->name('course.edit');

Route::post('/data/update', [CourseController::class, 'ProductDataUpdate'])->name('course-update');

Route::post('/thambnail/update', [CourseController::class, 'ThambnailImageUpdate'])->name('update-course-thambnail');

Route::get('/inactive/{id}', [CourseController::class, 'CourseInactive'])->name('course.inactive');

Route::get('/active/{id}', [CourseController::class, 'CourseActive'])->name('course.active');

Route::get('/delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');

Route::get('/video/add', [VideoController::class, 'AddVideo'])->name('add-video');

Route::post('/video/store', [VideoController::class, 'StoreVideo'])->name('store-video');

Route::get('/video/manage', [VideoController::class, 'ManageVideo'])->name('manage-video');

Route::get('/video/view/{id}', [VideoController::class, 'ViewVideo'])->name('video.view');

Route::get('/video/edit/{id}', [VideoController::class, 'EditVideo'])->name('video.edit');

Route::post('/video/update', [VideoController::class, 'VideoUpdate'])->name('update-video');

Route::get('/video/delete/{id}', [VideoController::class, 'VideoDelete'])->name('video.delete');

// map video

Route::get('/mapping', [MapController::class, 'Map'])->name('map-kit-course');
Route::post('/map/store', [MapController::class, 'StoreMap'])->name('map.store');
 });




// Admin Products All Routes 

Route::prefix('product')->group(function(){

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

Route::prefix('slider')->group(function(){

Route::get('/view', [SliderController::class, 'SliderView'])->name('manage-slider');

Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');

Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');

Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');

Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');

Route::get('/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');

Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');

Route::get('/innovator/view', [InnovatorController::class, 'InnovateView'])->name('innovate-slider');
Route::post('/innovator/store', [InnovatorController::class, 'InnovateStore'])->name('innovate.store');
Route::get('/innovator/delete/{id}', [InnovatorController::class, 'InnovateDelete'])->name('innovate.delete');

});




//// Frontend All Routes /////
/// Multi Language All Routes ////

Route::get('/language/hindi', [LanguageController::class, 'Hindi'])->name('hindi.language');

Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');
Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');


// Frontend Product Details Page url 

Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);


// Frontend Product Tags Page 
Route::get('/product/tag/{tag}', [IndexController::class, 'TagWiseProduct']);

// Frontend SubCategory wise Data
Route::get('/subcategory/product/{subcat_id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);

// Frontend Sub-SubCategory wise Data
Route::get('/subsubcategory/product/{subsubcat_id}/{slug}', [IndexController::class, 'SubSubCatWiseProduct']);

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



Route::group(['prefix'=>'user','middleware' => ['user','auth'],'namespace'=>'User'],function(){

// Wishlist page
Route::get('/wishlist', [WishlistController::class, 'ViewWishlist'])->name('wishlist');


Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishlistProduct']);

Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlistProduct']);





//Paytm Payment
//Route::post('paytm-payment', [PaytmController::class, 'paytmPayment'])->name('paytm.payment');
//Route::post('paytm-callback',[PaytmController::class,'paytmCallback'])->name('status');
//Route::get('paytm-purchase', [PaytmController::class, 'paytmPurchase'])->name('paytm.purchase');


Route::get('/initiate',[PaytmController::class, 'initiate'])->name('initiate.payment');
Route::post('/payment',[PaytmController::class, 'pay'])->name('make.payment');
Route::post('/payment/status', [PaytmController::class, 'paymentCallback'])->name('status');


//order
Route::get('/my/orders', [AllUserController::class, 'MyOrders'])->name('my.orders');
Route::get('/order_details/{order_id}', [AllUserController::class, 'OrderDetails']);
Route::get('/invoice_download/{order_id}', [AllUserController::class, 'InvoiceDownload']);

//Order Return
Route::post('/return/order/{order_id}', [AllUserController::class, 'ReturnOrder'])->name('return.order');
Route::get('/return/order/list', [AllUserController::class, 'ReturnOrderList'])->name('return.order.list');
Route::get('/cancel/orders', [AllUserController::class, 'CancelOrders'])->name('cancel.orders');


/// Order Traking Route 
Route::post('/order/tracking', [AllUserController::class, 'OrderTraking'])->name('order.tracking');  

});



 // My Cart Page All Routes

Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');

Route::get('/user/get-cart-product', [CartPageController::class, 'GetCartProduct']);

Route::get('/user/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartProduct']);

Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);

Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);




// Admin Coupons All Routes 

Route::prefix('coupons')->group(function(){

Route::get('/view', [CouponController::class, 'CouponView'])->name('manage-coupon');

Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');

Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');

Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupon.update');

Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');


});


// Admin Shipping All Routes 

Route::prefix('shipping')->group(function(){

//Ship division	

Route::get('/division/view', [ShippingAreaController::class, 'DivisionView'])->name('manage-division');

Route::post('/division/store', [ShippingAreaController::class, 'DivisionStore'])->name('division.store');

Route::get('/division/edit/{id}', [ShippingAreaController::class, 'DivisionEdit'])->name('division.edit');


Route::post('/division/update/{id}', [ShippingAreaController::class, 'DivisionUpdate'])->name('division.update');

Route::get('/division/delete/{id}', [ShippingAreaController::class, 'DivisionDelete'])->name('division.delete');


// Ship District 
Route::get('/district/view', [ShippingAreaController::class, 'DistrictView'])->name('manage-district');

Route::post('/district/store', [ShippingAreaController::class, 'DistrictStore'])->name('district.store');

Route::get('/district/edit/{id}', [ShippingAreaController::class, 'DistrictEdit'])->name('district.edit');

Route::post('/district/update/{id}', [ShippingAreaController::class, 'DistrictUpdate'])->name('district.update');

Route::get('/district/delete/{id}', [ShippingAreaController::class, 'DistrictDelete'])->name('district.delete');




// Ship State 
Route::get('/state/view', [ShippingAreaController::class, 'StateView'])->name('manage-state');

Route::post('/state/store', [ShippingAreaController::class, 'StateStore'])->name('state.store');

Route::get('/state/edit/{id}', [ShippingAreaController::class, 'StateEdit'])->name('state.edit');

Route::post('/state/update/{id}', [ShippingAreaController::class, 'StateUpdate'])->name('state.update');

Route::get('/state/delete/{id}', [ShippingAreaController::class, 'StateDelete'])->name('state.delete');


});
// Frontend Coupon Option

Route::post('/coupon-apply', [CartController::class, 'CouponApply'])->name('couponApply');

Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation'])->name('couponCalculation');

Route::get('/coupon-remove', [CartController::class, 'CouponRemove'])->name('couponRemove');


 // Checkout Routes 

Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

Route::get('/district-get/ajax/{division_id}', [CheckoutController::class, 'DistrictGetAjax']);

Route::get('/state-get/ajax/{district_id}', [CheckoutController::class, 'StateGetAjax']);

Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');



// Admin Order All Routes 

Route::prefix('orders')->group(function(){

Route::get('/pending/orders', [OrderController::class, 'PendingOrders'])->name('pending-orders');

Route::get('/pending/orders/details/{order_id}', [OrderController::class, 'PendingOrdersDetails'])->name('pending.order.details');

Route::get('/confirmed/orders', [OrderController::class, 'ConfirmedOrders'])->name('confirmed-orders');

Route::get('/processing/orders', [OrderController::class, 'ProcessingOrders'])->name('processing-orders');

Route::get('/picked/orders', [OrderController::class, 'PickedOrders'])->name('picked-orders');

Route::get('/shipped/orders', [OrderController::class, 'ShippedOrders'])->name('shipped-orders');

Route::get('/delivered/orders', [OrderController::class, 'DeliveredOrders'])->name('delivered-orders');

Route::get('/cancel/orders', [OrderController::class, 'CancelOrders'])->name('cancel-orders');

Route::get('/pending/confirm/{order_id}', [OrderController::class, 'PendingToConfirm'])->name('pending-confirm');

Route::get('/confirm/processing/{order_id}', [OrderController::class, 'ConfirmToProcessing'])->name('confirm.processing');

Route::get('/processing/picked/{order_id}', [OrderController::class, 'ProcessingToPicked'])->name('processing.picked');

Route::get('/picked/shipped/{order_id}', [OrderController::class, 'PickedToShipped'])->name('picked.shipped');

Route::get('/shipped/delivered/{order_id}', [OrderController::class, 'ShippedToDelivered'])->name('shipped.delivered');

Route::get('/delivered/canclled/{order_id}', [OrderController::class, 'DeliveredToCancelled'])->name('delivered.cancelled');

Route::get('/invoice/download/{order_id}', [OrderController::class, 'AdminInvoiceDownload'])->name('invoice.download');
});


// Admin Reports Routes 
Route::prefix('reports')->group(function(){

Route::get('/view', [ReportController::class, 'ReportView'])->name('all-reports');

Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date'); 

Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');

Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');

});



// Admin Get All User Routes 
Route::prefix('alluser')->group(function(){

Route::get('/view', [AdminProfileController::class, 'AllUsers'])->name('all-users');


});


// Admin Site Setting Routes 
Route::prefix('setting')->group(function(){

Route::get('/site', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');

Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');

Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting'); 

Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');

});


// Admin Return Order Routes 
Route::prefix('return')->group(function(){

Route::get('/admin/request', [ReturnController::class, 'ReturnRequest'])->name('return.request');

Route::get('/admin/return/approve/{order_id}', [ReturnController::class, 'ReturnRequestApprove'])->name('return.approve');

Route::get('/admin/all/request', [ReturnController::class, 'ReturnAllRequest'])->name('all.request');

});

/// Frontend Product Review Routes

Route::post('/review/store', [ReviewController::class, 'ReviewStore'])->name('review.store');

// Admin Manage Review Routes 
Route::prefix('review')->group(function(){

Route::get('/pending', [ReviewController::class, 'PendingReview'])->name('pending.review');

Route::get('/admin/approve/{id}', [ReviewController::class, 'ReviewApprove'])->name('review.approve');

Route::get('/publish', [ReviewController::class, 'PublishReview'])->name('publish.review');

Route::get('/delete/{id}', [ReviewController::class, 'DeleteReview'])->name('delete.review');

});

// Admin Manage Stock Routes 
Route::prefix('stock')->group(function(){

Route::get('/product', [ProductController::class, 'ProductStock'])->name('product.stock');


});



// Admin User Role Routes 
Route::prefix('adminuserrole')->group(function(){

Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all.admin.user');

Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add.admin');

Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin.user.store');

Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');

Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');

Route::get('/delete/{id}', [AdminUserController::class, 'DeleteAdminRole'])->name('delete.admin.user');

});

/// Product Search Route 
Route::post('/search', [IndexController::class, 'ProductSearch'])->name('product.search');


// Advance Search Routes 
Route::post('search-product', [IndexController::class, 'SearchProduct']);

// Shop Page Route 
Route::get('/shop', [ShopController::class, 'ShopPage'])->name('shop.page');

Route::post('/shop/filter', [ShopController::class, 'ShopFilter'])->name('shop.filter');


// All course frontend

Route::prefix('AllCourse')->group(function(){

Route::get('/view', [AllCourseController::class, 'View'])->name('all.course');

//Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');

//Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');

//Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupon.update');

//Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');


});

Route::get('/course/details/{id}/{slug}', [AllCourseController::class, 'CourseDetails']);

Route::get('/course/cart/{id}', [AllCourseController::class, 'CourseCart'])->name('course.cart');


Route::group(['prefix'=>'course','middleware' => ['user','auth'],'namespace'=>'User'],function(){
    
Route::get('/initiate',[PaytmController::class, 'initiateCourse'])->name('initiate.course.payment');
Route::post('/payment',[PaytmController::class, 'payCourse'])->name('make.course.payment');
Route::post('/payment/status', [PaytmController::class, 'paymentCallbackCourse']);
});



/// school 

Route::prefix('School')->group(function(){

Route::get('/view', [SchoolController::class, 'View'])->name('school');

});

///// my course
Route::group(['prefix'=>'MyCourse','middleware' => ['user','auth'],'namespace'=>'User'],function(){

Route::get('/myCourse', [CourseController::class, 'MyCourse'])->name('mycourse');
Route::get('/videos/{id}', [CourseController::class, 'Videos'])->name('tutorial');
Route::get('/playing/{courseId}/video/{videoId}', [CourseController::class, 'Play'])->name('play-video');

});




// Terms and condition

Route::get('/terms', [IndexController::class, 'Terms'])->name('terms');

Route::get('/privacy', function () {
    return view('frontend.common.privacy');
})->name('privacy');

Route::get('/shipping', function () {
    return view('frontend.common.shipping');
})->name('shipping');






// enquiry form submission 
Route::prefix('Enquiry')->group(function(){

Route::get('/viewschool',[EnquiryController::class, 'SchoolEnquiryView'])->name('all.schoolEnquiry'); 
Route::get('/viewstudent',[EnquiryController::class, 'StudentEnquiryView'])->name('all.StudentEnquiry'); 
Route::post('/school',[EnquiryController::class, 'EnquirySchoolStore'])->name('school.enquiry');
Route::post('/student',[EnquiryController::class, 'EnquiryStudentStore'])->name('student.enquiry');
});


Route::prefix('chat')->group(function (){

Route::get('/adminsendmessage',[ChatController::class, 'adminindex'])->name('all.adminsendmessage'); 
Route::post('/sendmessage',[ChatController::class, 'adminstore'])->name('all.adminstoremessage'); 
Route::get('/sendmessage',[ChatController::class, 'index'])->name('all.sendmessage'); 
Route::post('/storemessage',[ChatController::class, 'store'])->name('all.storemessage'); 




});



// Route::controller(App\Http\Controllers\Backend\ChatController::class)->group(function (){
//     Route::get('sendmessage','index');
//     Route::post('sendmessage','store');
//     Route::post('adminsendmessage','adminstore');
//     Route::get('adminsendmessage','adminindex');
// });



Route::prefix('location')->group(function(){

    Route::get('/states',[LocationController::class, 'statesView'])->name('all.states'); 
    Route::get('/cities',[LocationController::class, 'citiesView'])->name('all.cities'); 
    Route::get('/schools',[LocationController::class, 'schoolsView'])->name('all.schools'); 
    Route::get('/enquiryschools',[LocationController::class, 'enquiryschoolsAdd'])->name('all.enquiryschools'); 
    Route::get('/schoolResponseView',[LocationController::class, 'schoolResponseView'])->name('all.schoolResponseView'); 
    Route::post('/search/by/date', [LocationController::class, 'ReportByDate'])->name('search-by-date'); 
    Route::post('/search/between/date', [LocationController::class, 'ReportBetweenDate'])->name('search-between-date'); 
    Route::post('/search/nextmeet/date', [LocationController::class, 'ReportByNextMeetDate'])->name('search-by-next-meet'); 


    Route::get('/enquiryschools/edit/{id}',[LocationController::class, 'enquiryschoolsedit'])->name('enquiryschools.edit'); 



    Route::post('/states/store',[LocationController::class, 'stateStore'])->name('states.store'); 
    Route::post('/city/store',[LocationController::class, 'cityStore'])->name('city.store'); 
    Route::post('/schools/store',[LocationController::class, 'schoolStore'])->name('school.store'); 
    Route::post('/enquiryschools/store',[LocationController::class, 'enquiryschoolsStore'])->name('enquiryschools.store'); 


    Route::post('/enquiryschools/update',[LocationController::class, 'enquiryschoolsUpdate'])->name('enquiryschools.update'); 


    Route::get('/city/ajax/{state_id}', [LocationController::class, 'GetCity']);
    Route::get('/school/ajax/{city_id}', [LocationController::class, 'GetSchool']);
    });


    Route::get('students',[StudentController::class, 'index']);
Route::post('students',[StudentController::class, 'store']);
Route::get('/fetch-students',[StudentController::class, 'view']);