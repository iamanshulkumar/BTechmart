<?php
#-------------------------------------------------🙏JAI SHREE RAM🚩---------------------------------------------------------------

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\frontend\FrontViewController;

//Create Routes
// Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');

//View Routes
Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
Route::get('/vieuserlist', [ViewController::class, 'vieuserlist'])->name('vieuserlist');
Route::get('/vieuserlistings', [ViewController::class, 'vieuserlistings'])->name('vieuserlistings');
Route::get('/viewagentlist', [ViewController::class, 'viewagentlist'])->name('viewagentlist');
Route::get('/viewagentlistings', [ViewController::class, 'viewagentlistings'])->name('viewagentlistings');
Route::get('/viewvendorlist', [ViewController::class, 'viewvendorlist'])->name('viewvendorlist');






Route::get('/', function () {
    return view('Frontend.home');
});

//Auth Routes
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

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


//Frontend-Routes
Route::get('/signup', [FrontViewController::class, 'frontendsignup'])->name('frontendsignup');
Route::get('/grid-listing', [FrontViewController::class, 'frontendgridlisting'])->name('frontendgridlisting');
Route::get('/list-listing', [FrontViewController::class, 'frontendlistlisting'])->name('frontendlistlisting');
Route::get('/singleproperty', [FrontViewController::class, 'frontsingleproperty'])->name('frontsingleproperty');
Route::get('/agentgrid', [FrontViewController::class, 'frontagentgrid'])->name('frontagentgrid');
Route::get('/agentdetails', [FrontViewController::class, 'frontagentdetails'])->name('frontagentdetails');