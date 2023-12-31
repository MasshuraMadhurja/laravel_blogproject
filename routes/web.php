<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'homepage']);


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/home', [HomeController::class, 'index'])
->middleware('auth')->name('home');
//Route::get('/', [HomeController::class, 'index']);
Route::get('/homepage', [HomeController::class, 'homepage'])->middleware('auth')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [AdminController::class, 'post_page']);
Route::get('/adminhome', [AdminController::class, 'adminhome']);
Route::post('/add_post', [AdminController::class, 'add_post']);
Route::get('/show_post', [AdminController::class, 'show_post']);
Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);
Route::get('/update_post_admin/{id}',[AdminController::class,'update_post_admin']);
Route::post('/edit_post/{id}',[AdminController::class,'edit_post']);
Route::get('/post_details/{id}',[HomeController::class,'post_details']);
Route::get('/create_post',[HomeController::class,'create_post'])->middleware('auth');
Route::post('/user_post',[HomeController::class,'user_post']);
Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth');
Route::get('/delete_post/{id}',[HomeController::class,'delete_post'])->middleware('auth');
Route::get('/update_post/{id}',[HomeController::class,'update_post'])->middleware('auth');
Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data'])->middleware('auth');
Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/reject/{id}',[AdminController::class,'reject']);

Route::get('/aboutusmore',[HomeController::class,'aboutusmore']);