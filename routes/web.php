<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/asdf', function () {
    return view('welcome');
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/students/create',[StudentController::class, 'create'])->name('student.create');
Route::post('/students/store',[StudentController::class, 'store'])->name('student.store');
Route::get('/students/delete/{id}',[StudentController::class, 'delete'])->name('student.delete');








Route::get('asf', function () {
    return view('fataa.index');
    
});

Route::get('pengangguran', function (){
    $angka1 = 50000;
    $angka2 = 10000;
    $hasil = $angka1 - $angka2;
    return $hasil; 

});

Route::get('asdf', function (){
    return view('fataa.home');
});
// Route::get('stud', function (){
//     return view('students.index');
// });