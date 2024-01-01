<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\BookController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\RoomTypeController;
use App\Http\Controllers\Auth\AdminRegisteredUserController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\VehicleRepairController;
use App\Http\Controllers\FoodServiceController;
use App\Http\Controllers\FAQSController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;



 

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'Index']);
Route::any('/book/search', [BookController::class, 'BookSearch'])->name('booking.search');
Route::post('/book/reserve', [BookController::class, 'BookReserve'])->name('booking.reserve');
    

Route::get('/dashboard', function () {
    return view('frontend.dashboard.user_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home.index'); 
Route::get('/parking', [ParkingController::class, 'index'])->name('parking.index');
Route::get('/vehicle/repair', [VehicleRepairController::class, 'index'])->name('vehiclerepair.index'); 
Route::get('/food/service', [FoodServiceController::class, 'index'])->name('foodservice.index'); 
Route::get('/faqs', [FAQSController::class, 'index'])->name('faqs.index'); 
Route::get('/career/opportunities', [CareerController::class, 'index'])->name('careeropportunities.index'); 
Route::get('/advertising/opportunities', [AdvertisingController::class, 'index'])->name('advertisingopportunities.index'); 
Route::get('/about', [AboutController::class, 'index'])->name('about.index'); 
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); 

Route::middleware('auth')->group(function () {

    Route::get('/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/profile/store', [UserController::class, 'UserStore'])->name('profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/password/change/password', [UserController::class, 'ChangePasswordStore'])->name('password.change.store');
   
   
});

require __DIR__.'/auth.php';

// Admin Group Middleware 
Route::middleware(['auth','roles:admin'])->group(function(){
    
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

}); // End Admin Group Middleware 


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/admin/register', [AdminController::class, 'create'])->name('admin.register');
Route::post('/admin/store', [AdminRegisteredUserController::class, 'store'])->name('admin.store');


// Admin Group Middleware 
Route::middleware(['auth','roles:admin'])->group(function(){

 /// Team All Route 
Route::controller(TeamController::class)->group(function(){

    Route::get('/all/team', 'AllTeam')->name('all.team');
    Route::get('/add/team', 'AddTeam')->name('add.team');
    Route::post('/team/store', 'StoreTeam')->name('team.store');
    Route::get('/edit/team/{id}', 'EditTeam')->name('edit.team');
    Route::post('/team/update', 'UpdateTeam')->name('team.update');
    Route::get('/delete/team/{id}', 'DeleteTeam')->name('delete.team');

});


 /// Book Area All Route 
 Route::controller(TeamController::class)->group(function(){

    Route::get('/book/area', 'BookArea')->name('book.area');
    Route::post('/book/area/update', 'BookAreaUpdate')->name('book.area.update');
      
});

 /// RoomType All Route 
 Route::controller(RoomTypeController::class)->group(function(){

    Route::get('/room/type/list', 'RoomTypeList')->name('room.type.list');
    Route::get('/add/room/type', 'AddRoomType')->name('add.room.type');
    Route::post('/room/type/store', 'RoomTypeStore')->name('room.type.store'); 
      
});

}); // End Admin Group Middleware 
   