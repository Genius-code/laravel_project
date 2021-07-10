<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/services/{id?}', function ($id= null) {
//    $services = [
//        1 => 'E-commerce',
//        2 => 'Responsive Design',
//        3 => 'Web Security'
//    ];
//   return view('services', ['services' => $services, 'id' => $id]);
//})->where(['id' => "[1-3]"]);
//
//Route::get('/protofolio', function () {
//    return view('protofolio');
// });
//
// Route::get('/contact', function () {
//    return view('contact');
// });
//
// Route::get('/about', function () {
//    return view('about');
// });
//
// Route::get('/teams', function () {
//    return view('teams');
// });
//Route admin
//Route Admin
 Route::get('admin', function () {
     return view('backend/index');
 })->name('admin.index');

//Route Services

//Route Controller services
//Route Service Index
Route::get('/services',[ServiceController::class,'index'])->name('services.index');

//Route Service Show
Route::get('/services/{id}',[ServiceController::class,'show'])->where(['id' => '[0-9]+'])->name('services.show');

//Route Service Create
Route::get('/services/create',[ServiceController::class,'create'])->name('services.create');

//Route Services Store
Route::post('services/store',[ServiceController::class,'store'])->name('services.store');

//Route Services edit
Route::get('services/edit/{id}',[ServiceController::class,'edit'])->where('id' , '[0-9]+')->name('services.edit');

//Route Service update
Route::put('services/update/{id}',[ServiceController::class,'update'])->where('id' , '[0-9]+')->name('services.update');

//Route Service Delete
Route::delete('services/delete/{id}',[ServiceController::class,'destroy'])->where('id' , '[0-9]+')->name('services.delete');

//Route Pages
Route::resource('pages',PageController::class)->where(['page' => '[0-9]+']);

//Route Team
Route::resource('teams',TeamController::class)->where(['team' => '[0-9]+']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
