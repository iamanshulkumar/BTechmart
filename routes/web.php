<?php
#{{---------------------------------------------------🔱HAR HAR MAHADEV🔱-----------------------------------------------------------------}}

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\frontend\FrontViewController;

//Create Routes
// Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');

//Admin View Routes (Admin Views)
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
Route::get('/adminprofile',[ViewController::class,'adminprofile'])->name('adminprofile');


Route::get('/', function () {
    return view('Frontend.home');
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


//Frontend-Routes
Route::get('/signup', [FrontViewController::class, 'frontendsignup'])->name('frontendsignup');
Route::get('/grid-listing', [FrontViewController::class, 'frontendgridlisting'])->name('frontendgridlisting');
Route::get('/propertylisting', [FrontViewController::class, 'frontendpropertylisting'])->name('frontendpropertylisting');
Route::get('/singleproperty', [FrontViewController::class, 'frontsingleproperty'])->name('frontsingleproperty');
Route::get('/agentgrid', [FrontViewController::class, 'frontagentgrid'])->name('frontagentgrid');
Route::get('/agentlist', [FrontViewController::class, 'frontagentlist'])->name('frontagentlist');
Route::get('/agentdetails', [FrontViewController::class, 'frontagentdetails'])->name('frontagentdetails');
Route::get('/frontdashboard', [FrontViewController::class, 'frontdashboard'])->name('frontdashboard');
Route::get('/frontuserprofile', [FrontViewController::class, 'frontuserprofile'])->name('frontuserprofile');
Route::get('/frontbookmarks', [FrontViewController::class, 'frontbookmarks'])->name('frontbookmarks');
Route::get('/frontmyproperty', [FrontViewController::class, 'frontmyproperty'])->name('frontmyproperty');
Route::get('/frontsubmitproperty', [FrontViewController::class, 'frontsubmitproperty'])->name('frontsubmitproperty');
Route::get('/frontmessages', [FrontViewController::class, 'frontmessages'])->name('frontmessages');
Route::get('/frontchoosepackage', [FrontViewController::class, 'frontchoosepackage'])->name('frontchoosepackage');
Route::get('/frontchangepassword', [FrontViewController::class, 'frontchangepassword'])->name('frontchangepassword');
Route::get('/addproperty', [FrontViewController::class, 'addproperty'])->name('addproperty');
Route::get('/checkout', [FrontViewController::class, 'checkout'])->name('checkout');
Route::get('/blogs', [FrontViewController::class, 'blogs'])->name('blogs');
Route::get('/blogdetail', [FrontViewController::class, 'blogdetail'])->name('blogdetail');
Route::get('/contactus', [FrontViewController::class, 'contactus'])->name('contactus');

// static pages
Route::get('/aboutus', [FrontViewController::class, 'aboutus'])->name('aboutus');
Route::get('/error404', [FrontViewController::class, 'error404'])->name('error404');
Route::get('/privacypolicy', [FrontViewController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/pricingpage', [FrontViewController::class, 'pricingpage'])->name('pricingpage');
Route::get('/faqs', [FrontViewController::class, 'faqs'])->name('faqs');
