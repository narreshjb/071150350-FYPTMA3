<?php

use App\Http\Controllers\AmdinBarberController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepage/admin', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('isAdmin');

//set barber for admin
Route::get('/homepage/admin/barbers', [App\Http\Controllers\HomeController::class, 'barberindex'])->name('admin.barberuser')->middleware('isAdmin');
Route::get('/homepage/admin/barbers/confirm/{id}', [App\Http\Controllers\HomeController::class, 'barberconfirm'])->name('admin.barberconfirm')->middleware('isAdmin');

Route::get('/homepage/admin/barbers/unconfirm/{id}', [App\Http\Controllers\HomeController::class, 'barberunconfirm'])->name('admin.barberunconfirm')->middleware('isAdmin');
Route::get('/home/admin/barber/index',[AmdinBarberController::class,'index'])->name('admin.barbarindex')->middleware('isAdmin');


//set barber menual

Route::get('/homepage/admin/barber/manualpage',[AmdinBarberController::class,'barbermanual'])->name('admin.barbermanualpage');
Route::post('/home/admin/barber/manualpost',[AmdinBarberController::class,'barbermanualpost'])->name('admin.barbermanualpost');
//clouse barber menual

Route::get('home/admin/barber/schedul/{id}',[AmdinBarberController::class,'setschedul'])->name('admin.barbarschedul')->middleware('isAdmin');
Route::post('home/admin/barber/schedul/post/{id}',[AmdinBarberController::class,'post'])->name('admin.barbarschedulpost')->middleware('isAdmin');

Route::get('home/admin/barber/schedul/all/show',[AmdinBarberController::class,'showschedul'])->name('admin.barbarschedulshow')->middleware('isAdmin');

Route::get('home/admin/barber/schedul/update/page/{id}',[AmdinBarberController::class,'updateschedulpage'])->name('admin.barbarschedulupdatepage')->middleware('isAdmin');


Route::get('home/admin/barber/schedul/update/{id}',[AmdinBarberController::class,'updateschedul'])->name('admin.barbarschedulupdate')->middleware('isAdmin');
Route::post('home/admin/barber/single/schedul/update/post/{id}',[AmdinBarberController::class,'updateschedulpost'])->name('admin.barbarschedulupdatepost')->middleware('isAdmin');
Route::get('home/admin/barber/single/schedul/delete/{id}',[AmdinBarberController::class,'deleteschedul'])->name('admin.barbarscheduldelete')->middleware('isAdmin');
//active unactive for barber
Route::get('/home/admin/barber/account/active/{id}',[AmdinBarberController::class,'active'])->name('admin.barberactive')->middleware('isAdmin');
Route::get('/home/admin/barber/account/unactive/{id}',[AmdinBarberController::class,'unactive'])->name('admin.barberunactive')->middleware('isAdmin');
//time slot

Route::get('/home/admin/barber/timeslot/unactive/{id}',[AmdinBarberController::class,'slotunactive'])->name('admin.slotunactive');
Route::get('/home/admin/barber/timeslot/active/{id}',[AmdinBarberController::class,'slotactive'])->name('admin.slotactive');
// admin booking check
Route::get('home/admin/customer/advance/booking',[AmdinBarberController::class,'advancebook'])->name('admin.customeradvancebooking')->middleware('isAdmin');
Route::get('home/admin/customer/current/booking',[AmdinBarberController::class,'currentbook'])->name('admin.customerbooking')->middleware('isAdmin');
Route::get('home/admin/customer/old/booking',[AmdinBarberController::class,'oldbook'])->name('admin.customeroldbooking')->middleware('isAdmin');

Route::get('home/admin/customer/advancecurrent/booking/confirm/{id}',[AmdinBarberController::class,'adconfirm'])->name('admin.customerbookingadconfirm')->middleware('isAdmin');
Route::get('home/admin/customer/advancecurrent/booking/cancel/{id}',[AmdinBarberController::class,'adcancel'])->name('admin.customerbookingadcancel')->middleware('isAdmin');
Route::get('home/admin/customer/current/booking/confirm/{id}',[AmdinBarberController::class,'confirm'])->name('admin.customerbookingconfirm')->middleware('isAdmin');
Route::get('home/admin/customer/current/booking/cancel/{id}',[AmdinBarberController::class,'cancel'])->name('admin.customerbookingcancel')->middleware('isAdmin');

Route::get('home/admin/customer/current/booking/rescheduling',[AmdinBarberController::class,'reschedul'])->name('admin.bookingreschedul')->middleware('isAdmin');

Route::get('home/admin/feddback',[AmdinBarberController::class,'feedbackhome'])->name('admin.feddback');

Route::get('home/admin/feddback/delete/{id}',[AmdinBarberController::class,'feedbackdelete'])->name('admin.feddbackdelete');
//admin customer

Route::get('home/admin/customer/list',[AmdinBarberController::class,'customerlist'])->name('admin.customerlist')->middleware('isAdmin');

Route::get('home/admin/customer/delete/{id}',[AmdinBarberController::class,'customerdelete'])->name('admin.customerdelete')->middleware('isAdmin');
Route::get('home/admin/customer/view/{id}',[AmdinBarberController::class,'customerview'])->name('admin.customerview')->middleware('isAdmin');


//users control

Route::get('home/customer/barber/schedul/all/show',[CustomerController::class,'showschedul'])->name('admin.customerschedulshow');
Route::get('home/customer/barber/apointment/page/{id}',[CustomerController::class,'apointmentpage'])->name('customer.apointmentpage');
Route::post('home/customer/barber/apointment/post/{id}',[CustomerController::class,'post'])->name('customer.apointmentpost');

Route::get('home/customer/barber/apointment/my',[CustomerController::class,'apointment'])->name('customer.apointment');
Route::get('home/customer/barber/apointment/cancel/my/{id}',[CustomerController::class,'delete'])->name('customer.apointmentdelete');
Route::get('home/customer/barber/apointment/updatepage/my/{id}/{b_id}',[CustomerController::class,'apointmentupdate'])->name('customer.apointmentupdatepage');
Route::post('home/customer/barber/update/my/apointment/{id}',[CustomerController::class,'apointmentupdatepost'])->name('customer.apointmentupdate');

Route::get('/home/customer/profile/update',[CustomerController::class,'update'])->name('customer.profile');
Route::post('home/customer/prodile/update/post',[CustomerController::class,'updateprofile'])->name('customer.profileupdate');

Route::get('home/customer/feedback/page',[CustomerController::class,'feedbackpage'])->name('customer.feedbackpage');

Route::post('home/customer/feedback/post',[CustomerController::class,'feedback'])->name('customer.feedbackpost');

Route::get('home/customer/feddback',[CustomerController::class,'feedbackhome'])->name('customer.feddback');
