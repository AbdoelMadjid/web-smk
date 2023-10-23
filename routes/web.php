<?php

use App\Models\Welcome;
use App\Models\Identity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JumbotronController;
use App\Models\Ekstrakurikuler;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/test', [HomeController::class, 'dashboard']);

Route::group(['middleware' => 'auth'], function () {
    // CheckSlug
    Route::get('/dashboard/master-data/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::get('/dashboard/master-data/category/checkSlug', [CategoryController::class, 'checkSlug']);

    // Main Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dashboard/identity', IdentityController::class);
    Route::resource('/dashboard/welcome', WelcomeController::class);
    Route::resource('/dashboard/header', HeaderController::class);
    Route::resource('/dashboard/sambutan', WelcomeController::class);
    Route::resource('/dashboard/master-data/kelas', KelasController::class);
    Route::resource('/dashboard/master-data/jurusan', JurusanController::class);
    Route::resource('/dashboard/master-data/category', CategoryController::class);
    Route::resource('/dashboard/master-data/posts', DashboardPostController::class);
    Route::resource('/dashboard/master-data/admin', AdminController::class);
    Route::resource('/dashboard/master-data/ekstrakurikuler', EkstrakurikulerController::class);
});
require __DIR__ . '/auth.php';
