<?php

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
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/doc', function () {
    return view('doc');
});
Route::get('/hero', function () {
    return view('heroy');
}); 
Route::get('/news', function () {
    return view('news');
});


Route::get('/arhiv', 'AuthorController@arhiv')->name('arhiv');
Route::get('/arhiv/search', 'AuthorController@search')->name('search');
// Route::get('/arhiv/searchD', 'AuthorController@searchD')->name('searchD');

Route::post('/arhiv/author', 'AuthorController@store')->name('author.store');
Route::get('/arhiv/author', 'AuthorController@create')->name('arhiv.create');
Route::get('/arhiv/author/{id}', 'AuthorController@editAuthor')->name('arhiv.edit-author');
Route::post('/arhiv/author/{id}/update', 'AuthorController@UpdateAuthor')->name('arhiv.update-author');

Route::post('/arhiv/designer', 'AuthorController@storeD')->name('designer.storeD');
Route::get('/arhiv/designer', 'AuthorController@createD')->name('arhiv.createD');
Route::get('/arhiv/designer/{id}', 'AuthorController@editDesigner')->name('arhiv.edit-designer');
Route::post('/arhiv/designer/{id}/update', 'AuthorController@UpdateDesigner')->name('arhiv.update-designer');

Route::post('/arhiv/Child', 'AuthorController@storeChild')->name('Child.storeChild');
Route::get('/arhiv/Child', 'AuthorController@createChild')->name('arhiv.createChild');
Route::get('/arhiv/Child/{id}', 'AuthorController@editChild')->name('arhiv.edit-Child');
Route::post('/arhiv/Child/{id}/update', 'AuthorController@UpdateChild')->name('arhiv.update-Child');


Route::delete('/arhiv/{author}', 'AuthorController@destroy')->name('arhiv.delete');




Route::get('/main', 'MyPlaceController@main');
Route::get('/shop', 'MyPlaceController@shop');
Route::get('/main', 'MyPlaceController@local');
Route::get('/inf', 'MyPlaceController@information');
Route::get('/posts', 'PostController@index');

Route::post('/posts/update', 'PostController@update');
Route::post('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/', 'PostController@views');
Route::get('/catalog', 'PostController@catalog');
Route::get('/history', 'PostController@history');


Route::get('/admin', 'AdminController@admin');


Route::get('table/export', 'AdminController@tableExport')->name('table.export');
Route::get('table/exportW', 'AdminController@tableExportWorker')->name('table.exportW');
Route::get('table/exportU', 'AdminController@tableExportUser')->name('table.exportU');

Route::middleware(['admin'])->group(function(){
    Route::get('/table', 'AdminController@index')->name('table.index');
});


Route::get('/create', 'AdminController@create')->name('table.create');
Route::get('/create/worker', 'AdminController@create_worker')->name('table.create_worker');

Route::post('/table/worker', 'AdminController@store_worker')->name('table.store_worker');
Route::post('/table/post', 'AdminController@store')->name('table.store');




Route::patch('/table/{post}', 'AdminController@update')->name('table.update');
Route::get('/table/{post}/edit', 'AdminController@edit')->name('table.edit');


Route::delete('/table/{post}', 'AdminController@destroy')->name('table.delete');
Route::delete('/table/worker/{worker}', 'AdminController@destroyW')->name('table.deleteW');
Route::delete('/table/user/{user}', 'AdminController@destroyU')->name('table.deleteU');


Route::get('/work', 'WorkerController@worker');
Route::get('/hero', 'PostController@hero');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
