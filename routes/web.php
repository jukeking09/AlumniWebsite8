<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IDCardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ContactController;


//Route For HomeController
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appoinment', [HomeController::class, 'appoinment'])->name('appoinment');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/constitution', [HomeController::class, 'constitution'])->name('constitution');
Route::get('/connect', [HomeController::class, 'connect'])->name('connect');
Route::get('/executivebody', [HomeController::class, 'executivebody'])->name('executivebody');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/giveback', [HomeController::class, 'giveback'])->name('giveback');
Route::get('/alumni_photos/{filename}', [AdminController::class,'showImage'])->name('alumni_photos');
Route::get('/executive-image/{filename}', [AdminController::class, 'showExecutiveMemberImage'])->name('executive.image');

//Authenticated Routes
Route::get('/userdashboard', [UserController::class, 'dashboard'])->name('users-dashboard')->middleware('auth','role:user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update')->middleware('auth');
Route::post('/profile/change-password', [UserController::class, 'changePassword'])->name('profile.change-password')->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit')->middleware('auth');
Route::get('/profile/change-password', [UserController::class, 'changePasswordForm'])->name('profile.change-password-form')->middleware('auth');


//Route For LoginController
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');;
Route::post('/register', [LoginController::class, 'store'])->name('register.store')->middleware('guest');

//Route For JobController
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/my', [JobController::class, 'myJobs'])->name('jobs.myJobs')->middleware('auth');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
Route::get('/jobs/edit/{id}', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth');
Route::post('/jobs/update/{id}', [JobController::class, 'update'])->name('jobs.update')->middleware('auth');
Route::post('/jobs/delete/{id}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('auth');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/pdf/{filename}', [JobController::class, 'downloadPdf'])->name('jobs.viewPdf');

//Route For ArticleController
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/my', [ArticleController::class, 'myArticles'])->name('articles.myArticles')->middleware('auth');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');
Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::post('/articles/update/{id}', [ArticleController::class, 'update'])->name('articles.update')->middleware('auth');
Route::post('/articles/delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy')->middleware('auth');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/image/{filename}', [ArticleController::class, 'showImage'])->name('articles.image');

//Route For MemberController
Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('member.dashboard')->middleware('auth','role:member');
Route::get('/memberprofile/edit', [MemberController::class, 'editProfile'])->name('member.profile.edit')->middleware('auth','role:member');
Route::post('/memberprofile/update', [MemberController::class, 'updateProfile'])->name('member.profile.update')->middleware('auth','role:member');
Route::get('/memberprofile/change-password', [MemberController::class, 'changePasswordForm'])->name('member.profile.change-password')->middleware('auth','role:member');
Route::post('/memberprofile/change-password', [MemberController::class, 'changePassword'])->name('member.profile.change-password.store')->middleware('auth','role:member');

//Route For EventController
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create')->middleware('auth','role:member');
Route::post('/events/store', [EventController::class, 'store'])->name('events.store')->middleware('auth','role:member');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit')->middleware('auth','role:member');
Route::post('/events/update/{id}', [EventController::class, 'update'])->name('events.update')->middleware('auth','role:member');
Route::post('/events/delete/{id}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('auth','role:member');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
// New routes for image upload after event date
Route::get('/events/{id}/upload-images', [EventController::class, 'showUploadImagesForm'])->name('events.showUploadImagesForm');
Route::post('/events/{id}/upload-images', [EventController::class, 'uploadImages'])->name('events.uploadImages');
Route::get('/my-events', [EventController::class, 'myEvents'])->name('events.myEvents')->middleware('auth','role:member');

// Add this route for serving event images securely from private storage
Route::get('/event-image/{filename}', [App\Http\Controllers\EventController::class, 'showEventImage'])->name('event-image.show');


//Route For AdminController
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/titles', [AdminController::class, 'titles'])->name('titles.index');
    Route::post('/titles', [AdminController::class, 'storeTitle'])->name('titles.store');
    Route::put('/titles/{id}', [AdminController::class, 'updateTitle'])->name('titles.update');

    Route::get('/country-codes', [AdminController::class, 'countryCodes'])->name('country_codes.index');
    Route::post('/country-codes', [AdminController::class, 'storeCountryCode'])->name('country_codes.store');
    Route::put('/country-codes/{id}', [AdminController::class, 'updateCountryCode'])->name('country_codes.update');

    Route::get('/courses', [AdminController::class, 'courses'])->name('courses.index');
    Route::post('/courses', [AdminController::class, 'storeCourse'])->name('courses.store');
    Route::put('/courses/{id}', [AdminController::class, 'updateCourse'])->name('courses.update');

    Route::get('/departments', [AdminController::class, 'departments'])->name('departments.index');
    Route::post('/departments', [AdminController::class, 'storeDepartment'])->name('departments.store');
    Route::put('/departments/{id}', [AdminController::class, 'updateDepartment'])->name('departments.update');

    Route::get('/roles', [AdminController::class, 'roles'])->name('roles.index');
    Route::post('/roles', [AdminController::class, 'storeRole'])->name('roles.store');
    Route::put('/roles/{id}', [AdminController::class, 'updateRole'])->name('roles.update');

    Route::get('/prominent-alumni/create', [AdminController::class, 'alumnis'])->name('prominent_alumni.create');
    Route::post('/prominent-alumni', [AdminController::class, 'storeAlumni'])->name('prominent_alumni.store');  
    Route::put('/prominent-alumni/{id}', [AdminController::class, 'updateAlumni'])->name('prominent_alumni.update');
    Route::get('/prominent-alumni/image/{filename}', [AdminController::class, 'showImage'])->name('prominent_alumni.image');
    // User management
    Route::get('/users', [AdminController::class, 'users'])->name('users.index');
    Route::put('/users/{id}/role', [AdminController::class, 'updateUserRole'])->name('users.updateRole');
    
    // Executive Members management
    Route::get('/executive-members', [AdminController::class, 'executiveMembers'])->name('executive_members.index');
    Route::post('/executive-members', [AdminController::class, 'storeExecutiveMember'])->name('executive_members.store');
    Route::put('/executive-members/{id}', [AdminController::class, 'updateExecutiveMember'])->name('executive_members.update');
    Route::get('/executive-members/image/{filename}', [AdminController::class, 'showExecutiveMemberImage'])->name('executive_members.image');
    Route::post('/executive-members/{id}/disable', [AdminController::class, 'disableExecutiveMember'])->name('executive_members.disable');
    Route::post('/executive-members/{id}/enable', [AdminController::class, 'enableExecutiveMember'])->name('executive_members.enable');
});

Route::get('/generate-id-card/{id}', [IDCardController::class, 'generateIdCard'])->name('generateIdCard')->middleware('auth');

//Route For Reset Password
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request')->middleware('guest');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('guest');
Route::get('/password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset')->middleware('guest');
Route::post('/password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update')->middleware('guest');


//Route for Contact Us
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

