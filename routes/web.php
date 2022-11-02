<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::get('/hello', function () {

    return 'hello';
});

Route::get('/monday', function () {
    return view('monday');
});

Route::get('/tuesday', function () {
    $single = 'its Tuesday!';
    return view('tuesday', ['just_one' => $single]);
});

Route::get('/wednesday/{query}/{another}', function ($query, $another) {
    return view('wednesday', ['name' => $query, 'surname' => $another]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/persons', [PersonController::class, 'index'])->name('persons.index');



Route::get('/persons/create', [PersonController::class, 'create'])->name('persons.create');
Route::post('/persons', [PersonController::class, 'store'])->name('persons.store');
Route::get('/persons/{person}', [PersonController::class, 'show'])->name('persons.show');

Route::delete('/persons/{person}', [PersonController::class, 'destroy'])->name('persons.destroy');

require __DIR__.'/auth.php';
