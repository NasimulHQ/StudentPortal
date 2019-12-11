<?php

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
    return redirect()
        ->to('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function (){
    Route::get('/student', 'StudentController@index')->name('student');
    Route::get('/student/create', 'StudentController@create')->name('student.create');
    Route::post('student/store', 'StudentController@store')->name('student.store');
    Route::get('student/{id}/edit', 'StudentController@edit')->name('student.edit');
    Route::get('student/{id}/update', 'StudentController@update')->name('student.update');
    Route::get('student/{id}/destroy', 'StudentController@destroy')->name('student.destroy');

    Route::get('/result/{id}', 'ResultController@index')->name('result.index');
    Route::get('/result/create/{id}', 'ResultController@create')->name('result.create');
    Route::post('result/store', 'ResultController@store')->name('result.store');
    Route::get('result/{id}/edit', 'ResultController@edit')->name('result.edit');
    Route::get('result/{id}/update', 'ResultController@update')->name('result.update');
    Route::get('result/{id}/destroy', 'ResultController@destroy')->name('result.destroy');
});


