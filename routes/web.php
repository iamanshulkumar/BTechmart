<?php
#{{---------------------------------------------------🔱HAR HAR MAHADEV🔱-----------------------------------------------------------------}}

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ViewController;

//Create Routes
// Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');

//View Routes
Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
Route::get('/vieuserlist', [ViewController::class, 'vieuserlist'])->name('vieuserlist');
Route::get('/vieuserlistings', [ViewController::class, 'vieuserlistings'])->name('vieuserlistings');
Route::get('/viewagentlist', [ViewController::class, 'viewagentlist'])->name('viewagentlist');
Route::get('/viewagentlistings', [ViewController::class, 'viewagentlistings'])->name('viewagentlistings');
Route::get('/viewvendorlist', [ViewController::class, 'viewvendorlist'])->name('viewvendorlist');
Route::get('/viewpropertydetails',[ViewController::class,'viewpropertydetails'])->name('viewpropertydetails');
Route::get('/viewenquirylist',[ViewController::class,'viewenquirylist'])->name('viewenquirylist');
Route::get('/viewaddemployee',[ViewController::class,'viewaddemployee'])->name('viewaddemployee');
Route::get('/employeesetup',[ViewController::class,'employeesetup'])->name('employeesetup');

Route::get('/', function () {
    return view('welcome');
});
Route::post('/logout', function () {
    [AuthenticatedSessionController::class, 'destroy'];
    return view('auth.login');
});
// //Auth Routes
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Fortify::loginView(function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/Admin/dashboard', function () {
        return view('Admin.dashboard');
    })->name('dashboard');
});
