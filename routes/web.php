<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\insertData;
use App\Http\Controllers\posterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\search;
use App\Http\Controllers\Usercontroller;
use App\Models\posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home',[
        'posts'=> posts::orderby('id','DESC')->paginate(5),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//require __DIR__.'/auth.php';

route::get('/dashbored',[insertData::class,'insert'])->name('dashbored');
route::get('/home',[insertData::class,'insert'])->name('just.home');
route::get('/register',[Usercontroller::class,'show'])->name('user.show');
route::post('/usersignup',[Usercontroller::class,'insert'])->name('user.signup');
route::get('/login',[Usercontroller::class,'getbacktologin'])->name('go.login');
route::post('logincheck',[AuthenticatedSessionController::class,'store'])->name('get.login');
route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('session.destroy');
route::get('/create',[posterController::class, 'showcreate'])->name('show.create');
route::post('/formvalid/{userid}',[posterController::class,'insertform'])->name('formvalid');
route::post('/search',[search::class,'dosearch'])->name('go.search');
route::delete('/deletion{id}',[posterController::class,'destroy'])->name('destroyer');
route::get('/jobs/{idd}',[posterController::class,'show'])->name('show.show');
route::get('/editsec/{eid}/edit',[posterController::class,'edit'])->name('editr.edit');
route::post('/jobs/{comid}/comments',[CommentController::class,'store'])->name('job.comments.store');
route::put('/edvale{eidd}',[posterController::class,'saveedit'])->name('edval.update');
route::get('/showprofile',[Usercontroller::class,'showprofile'])->middleware('auth')->name('profile.show');

