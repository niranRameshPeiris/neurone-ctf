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
    return view('welcome');
});


// level routs
Route::get('/level0', function () {
    return view('level0');
});
Route::post('/level1', 'LevelController@PassLevel1')->name('level1');
Route::post('/level2', 'LevelController@PassLevel2')->name('level2');
Route::post('/level3', 'LevelController@PassLevel3')->name('level3');
Route::post('/level4', 'LevelController@PassLevel4')->name('level4');
Route::post('/level5', 'LevelController@PassLevel5')->name('level5');
Route::post('/level6', 'LevelController@PassLevel6')->name('level6');
Route::post('/level7', 'LevelController@PassLevel7')->name('level7');
Route::post('/level8', 'LevelController@PassLevel8')->name('level8');
Route::post('/level9', 'LevelController@PassLevel9')->name('level9');
Route::post('/level10', 'LevelController@PassLevel10')->name('level10');
Route::post('/level11', 'LevelController@PassLevel11')->name('level11');
Route::post('/level12', 'LevelController@PassLevel12')->name('End');

