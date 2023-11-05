<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'blog'])->name('Blogs');
Route::get('/blog-details/{id}', [FrontendController::class, 'blogdetails'])->name('Blog-Details');
Route::post('store-comment',[CommentsController::class,'store'])->name('Store-Comment');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('Dashboard');

    //Category
    Route::resource('category', CategoryController::class);
    Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('Category-Delete');



    // Blogs
    Route::resource('blog', BlogController::class);
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('Blog-Delete');
    Route::resource('category', CategoryController::class);
    
    // Comments
    Route::get('comment',[CommentsController::class,'index'])->name('All-Comments');
    Route::get('approve-comment',[CommentsController::class,'approve'])->name('Approve-Comment');
    Route::get('/comment/delete/{id}', [CommentsController::class, 'delete'])->name('Comment-Delete');
    
    // My Profile
    Route::get('myprofile',[BackendController::class,'myprofile'])->name('myprofile');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
