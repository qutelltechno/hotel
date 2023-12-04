<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

##Admin dashboard
Route::get('/admin/home', function () {
    // return view('dashboard.home');
        return view('dashboard2.index');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

##receptionist   dashboard
Route::get('/receptionist/home', function () {
    return view('dashboard.home');
})->middleware(['auth', 'role:receptionist'])->name('receptionist.dashboard');

##customer home
Route::get('/customer/home', function () {
    return view('customer.home');
})->middleware(['auth', 'role:customer'])->name('customer.dashboard');

##Room
Route::middleware(['auth'])->group(function () {
    Route::resource('rooms', RoomController::class)->except('show');

});

##test
// Route::get('test', function () {
//     $user = User::find(1);
//     return $user->role->name;
// });