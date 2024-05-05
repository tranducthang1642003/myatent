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

Route::prefix('job')->group(function() {
    Route::get('/', 'JobController@index')->name('job.index');
    Route::post('/job/add', 'JobController@addJob')->name('job.add.post');
    Route::get('/show', 'JobController@showJob')->name('job.show');
    Route::delete('/job/{id}', 'JobController@destroyJob')->name('job.destroy');
    Route::get('/job/{id}/edit', 'JobController@edit')->name('job.edit');
    Route::put('/job/{id}', 'JobController@jobUpdate')->name('job.update');
  
    Route::get('/job/search', 'JobController@search')->name('job.search');
    Route::get('/job/{id}/filter', 'JobController@showFilterForm')->name('job.filter');
    Route::post('/job/filter', 'JobController@filter')->name('job.filter.post');
    
    

});
