<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProjectTypeController;
use App\Http\Controllers\Backend\ProjectDetailController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UserController::class, 'index']);
   

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Admin group Middleware
Route::middleware(['auth','roles:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');
});   // end admin group middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


//Admin group Middleware
Route::middleware(['auth','roles:admin'])->group(function(){


    ////Team All Route
    Route::controller(TeamController::class)->group(function() {

    Route::get('/all/team', 'AllTeam')->name('all.team');
    Route::get('/add/team', 'AddTeam')->name('add.team');
    Route::get('/edit/team/{id}', 'EditTeam')->name('edit.team');
    Route::get('/delete/team/{id}', 'DeleteTeam')->name('delete.team');
    Route::post('/team/store', 'StoreTeam')->name('team.store');
    Route::post('/team/update', 'UpdateTeam')->name('team.update');
   
});



 ////About us Route
 Route::controller(AboutController::class)->group(function() {

    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');


    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/update/multi', 'UpdateMulti')->name('update.multi');
});




 ////Home Slide Route
 Route::controller(HomeController::class)->group(function() {

    Route::get('/home/page', 'HomePage')->name('home.page');
    Route::post('/update/home', 'UpdateHome')->name('update.home');

    Route::get('/home/multi/image', 'HomeMultiImage')->name('home.multi.image');
    Route::post('/update/slide', 'UpdateSlide')->name('update.slide');
 
});




 ////Project type list Route
 Route::controller(ProjectTypeController::class)->group(function() {

    Route::get('/project/type/list', 'ProjectType')->name('project.type.list');
    Route::get('/add/project/type', 'AddProjectType')->name('add.project.type');
    Route::post('/project/type/store', 'ProjectTypeStore')->name('projecttype.store');

});



////Project details Route
Route::controller(ProjectDetailController::class)->group(function() {

    Route::get('/edit/project/{id}', 'EditProject')->name('edit.project'); 
    Route::get('/project/list', 'ProjectList')->name('project.list');
    Route::get('/add/project', 'AddProject')->name('add.project'); 
   

});

});   // end admin group middleware
