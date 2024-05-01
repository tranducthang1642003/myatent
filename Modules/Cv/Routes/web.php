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

Route::prefix('cv')->group(function() {
    Route::get('/', 'CvController@showAddCv')->name('cv_job.add');
    Route::post('/add', 'CvController@addCv')->name('cv_job.add');
    Route::get('/showCv', 'CvController@showCv');
    Route::delete('/cv/{id}', 'CvController@destroyCv')->name('cv.destroy');
    Route::get('/cv/{id}/edit', 'CvController@edit')->name('cv.edit');
    Route::put('/cv/{id}',  'CvController@update')->name('cv.update');

});
