<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/category/{p_id?}",[PublicController::class,"index"])->name("filter");
Route::get("/products/{p_id}",[PublicController::class,"viewProduct"])->name("viewproduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkOut"])->name("checkout");
Route::post("/coupon/apply",[PublicController::class,"applyCoupon"])->name("applycoupon");
Route::post("/payment/process",[PublicController::class,"paymentProcess"])->name("paymentprocess");
Route::get("/coupon/remove",[PublicController::class,"removeCoupon"])->name("removecoupon");
Route::get("/payment/order",[PublicController::class,"order"])->name("paymentnow");
Route::post("/payment/call-back",[PublicController::class,"paymentCallback"])->name("paymentcallback");

Route::get("/add-to-cart/{p_id}",[PublicController::class,"addTCart"])->name("addtocart");
Route::get("/remove-from-cart/{p_id}",[PublicController::class,"removeFromCart"])->name("removefromcart");
Route::get("/remove-item-from-cart/{p_id}",[PublicController::class,"removeItemFromCart"])->name("removeitemfromCart");
Route::resource("address",AddressController::class)->only("store");
//Admin Route
Route::prefix("admin")->group(function(){
   Route::get('/',[AdminController::class,"dashboard"])->name("admin.home");
   Route::resources(["product"=>ProductController::class,
                    "category"=>CategoryController::class,
                    "brand"=>BrandController::class,
                    "coupon"=>CouponController::class,
                    "order"=>OrderController::class,
                    "payment"=>PaymentController::class,
                    "user"=>UserController::class,
                    "address"=>AddressController::class,
        ]);
});

//----------------auth------Route

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
