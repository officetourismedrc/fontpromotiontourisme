<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

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

Route::get('language/{locale}', function(Request $request, $locale){
    app()->setLocale($locale);
    session()->put('locale', $locale);
    //$request->session()->put('locale', $locale);

    return redirect()->back();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth:admin')->group(function (){
    Route::prefix('admin')->group(function (){
             Route::get('Office', [AdminDashboardController::class, 'index'])->name('admin.office');
    
        });
});

Route::prefix('article')->group(function (){
    Route::get('/{id}/{nameArt}', [ArticleController::class, 'generateArticle'])->name('article.article');
});

Route::prefix('document')->group(function (){
     Route::get('pdf/{id}', [ArticleController::class, 'pdfDocument'])->name('document.pdf');
     Route::get('download_pdf/{id}', [ArticleController::class, 'downloadPdf'])->name('download.pdf');
    Route::get('view_pdf/{id}', [ArticleController::class, 'viewPdf'])->name('view.pdf');
    });  

 Route::prefix('forum')->group(function (){
    Route::get('/{id}',  [ArticleController::class, 'viewForum'])->name('view.forum');
    Route::post('/ask',[ArticleController::class, 'store'])->name('create.question');
 });   

require __DIR__.'/auth.php';
//123jesus123@
//jkkjkkas@gmail.com
