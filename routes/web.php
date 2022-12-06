<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\Frontend\HomepageController::class, 'showHomepage'])->name('homepage');
Route::get('/stores',[App\Http\Controllers\Frontend\HomepageController::class, 'showStores'])->name('stores');
Route::get('/stores/{slug}',[App\Http\Controllers\Frontend\HomepageController::class, 'showStoreDetails'])->name('store-details');
Route::get('/become-a-vendor',[App\Http\Controllers\Frontend\HomepageController::class, 'showBecomeAVendor'])->name('become-a-vendor');
Route::post('/become-a-vendor',[App\Http\Controllers\Frontend\HomepageController::class, 'storeVendorRegistration']);

Route::prefix('/settings')->group(function(){
    Route::get('/locations', [App\Http\Controllers\Admin\SettingsController::class, 'locationSetup'])->name('location-setup');
});

Auth::routes();
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/process/payment',[App\Http\Controllers\OnlinePaymentController::class, 'processOnlinePayment']);

Route::get('/home', function(){
    return redirect()->route('customer-dashboard');
})->name('home');


Route::group(['prefix'=>'app', 'middleware'=>'is_customer'],function(){
    Route::get('/', [App\Http\Controllers\UserController::class, 'customerDashboard'])->name('customer-dashboard');
    Route::get('/fund-wallet', [App\Http\Controllers\SMSController::class, 'showTopUpForm'])->name('top-up');
    Route::post('/fund-wallet', [App\Http\Controllers\SMSController::class, 'processTopUpRequest']);
    Route::get('/fund-wallet/transactions', [App\Http\Controllers\SMSController::class, 'showTopUpTransactions'])->name('top-up-transactions');
    Route::get('/compose-sms', [App\Http\Controllers\SMSController::class, 'showComposeMessageForm'])->name('compose-sms');
    Route::get('/preview-message',[App\Http\Controllers\SMSController::class, 'previewMessage'])->name('preview-message');
    Route::post('/send-text-message',[App\Http\Controllers\SMSController::class, 'sendTextMessage'])->name('send-text-message');

    Route::get('/schedule-sms', [App\Http\Controllers\SMSController::class, 'showScheduleSmsForm'])->name('schedule-sms');
    Route::get('/api-settings', [App\Http\Controllers\SMSController::class, 'showApiInterface'])->name('api-settings');

    Route::get('/senders/create', [App\Http\Controllers\SMSController::class, 'showSenderIdForm'])->name('create-senders');
    Route::post('/senders/create', [App\Http\Controllers\SMSController::class, 'createSenderId']);
    Route::get('/senders/registered', [App\Http\Controllers\SMSController::class, 'showRegisteredSenderIds'])->name('registered-senders');

    Route::get('/phone-groups',[App\Http\Controllers\SMSController::class, 'showPhoneGroupForm'])->name('phone-groups');
    Route::post('/phone-groups',[App\Http\Controllers\SMSController::class, 'setNewPhoneGroup']);
    Route::post('/edit-phone-group',[App\Http\Controllers\SMSController::class, 'setNewPhoneGroup'])->name('edit-phone-group');

    Route::get('/batch-report', [App\Http\Controllers\SMSController::class, 'batchReport'])->name('batch-report');

    Route::post('/regenerate-api-token',[App\Http\Controllers\UserController::class, 'reGenerateApiToken'])->name('regenerate-api-token');
});


Route::group(['prefix'=>'super-channel', 'middleware'=>'is_admin'],function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin-dashboard');
});

/*
 * Vendor routes
 */
Route::group(['prefix'=>'vendor', 'middleware'=>'is_vendor'],function(){
    Route::get('/', [App\Http\Controllers\Vendor\VendorController::class, 'showVendorDashboard'])->name('vendor-dashboard');
    Route::get('/products', [App\Http\Controllers\Vendor\ProductController::class, 'showProducts'])->name('vendor-products');
    Route::get('/add-product', [App\Http\Controllers\Vendor\ProductController::class, 'showAddProductForm'])->name('vendor-add-product');
});


