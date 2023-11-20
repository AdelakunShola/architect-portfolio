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
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Frontend\FrontendProjectController;
use App\Http\Controllers\Frontend\FrontendAboutController;
use App\Http\Controllers\Frontend\FrontendServicesController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SettingController;


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
    Route::get('/edit/project/type/{id}', 'EditProjectType')->name('edit.project.type');
    Route::post('/update/project/type/{id}', 'UpdateProjectType')->name('update.project.type'); 
    Route::get('/add/project/type', 'AddProjectType')->name('add.project.type');
    Route::post('/project/type/store', 'ProjectTypeStore')->name('projecttype.store');
    Route::get('/delete/project/type/{id}', 'DeleteProjectType')->name('delete.project.type');

});



////Project details Route
Route::controller(ProjectDetailController::class)->group(function() {

    Route::get('/edit/project/{id}', 'EditProject')->name('edit.project');
    Route::get('/delete/project/{id}', 'DeleteProject')->name('delete.project');
    Route::post('/update/project/{id}', 'UpdateProject')->name('update.project'); 
    Route::get('/project/list', 'ProjectList')->name('project.list');
    Route::get('/add/project', 'AddProject')->name('add.project');
    Route::post('/store/project', 'StoreProject')->name('project.store');
    Route::get('/multi/image/delete/{id}', 'MultiImageDelete')->name('multi.image.delete');
   

});



////client logo Route
Route::controller(ClientController::class)->group(function() {

    Route::get('/client/list/', 'ClientList')->name('client.list');
    Route::get('/add/client/', 'AddClient')->name('add.client');
    Route::post('/store/client/', 'StoreClient')->name('client.store');
    Route::get('/delete/client/{id}', 'DeleteClient')->name('client.delete'); 

   

});



////testimonial logo Route
Route::controller(TestimonialController::class)->group(function() {

    Route::get('/testimonial/list/', 'TestimonialList')->name('testimonial.list');
    Route::get('/add/testimonial/', 'AddTestimonial')->name('add.testimonial');
    Route::post('/store/testimonial/', 'StoreTestimonial')->name('store.testimonial');
    Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
    Route::post('/update/testimonial/{id}', 'UpdateTestimonial')->name('testimonial.update'); 
    Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');

   

});




////service  Route
Route::controller(ServiceController::class)->group(function() {

    Route::get('/service/list/', 'ServiceList')->name('service.list');
    Route::get('/add/service/', 'AddService')->name('add.service');
    Route::post('/store/service/', 'StoreService')->name('service.store');
    Route::get('/edit/service/{id}', 'EditService')->name('edit.service');
    Route::post('/update/service/{id}', 'UpdateService')->name('service.update'); 
    Route::get('/delete/service/{id}', 'DeleteService')->name('delete.service');
    

});




/// SITE SETTING All Route 
Route::controller(SettingController::class)->group(function(){

    Route::get('/site/setting', 'SiteSetting')->name('site.setting');
    Route::post('/site/update', 'SiteUpdate')->name('site.update');
   
      
});


/// backend contact message All Route 
Route::controller(ContactController::class)->group(function(){

    Route::get('/contact/message', 'AdminContactMessage')->name('contact.message');
   

});



});   // end admin group middleware



////Frontend all project 

Route::controller(FrontendProjectController::class)->group(function() {

    Route::get('/all/project', 'AllFrontendProject')->name('all.project');
    Route::get('/project/details/{id}', 'ProjectDetailsPage');
    
   
});


////Frontend about 

Route::controller(FrontendAboutController::class)->group(function() {

    Route::get('/about', 'FrontendAbout')->name('about');
    
});

////Frontend services 

Route::controller(FrontendServicesController::class)->group(function() {

    Route::get('/services', 'FrontendServices')->name('services');
      
});


Route::controller(ContactController::class)->group(function() {

    Route::get('/contactUs', 'FrontendContact')->name('contact.us');
    Route::post('/store/contact', 'StoreContactUs')->name('store.contact');
      
});
     
