<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;

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

// root
// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('admin/testimonial', TestimoniController::class);
Route::get('/admin', [DashboardController::class, 'admin_page']);
Route::get('/', [HomepageController::class, 'index']);
