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

// Enrutamiento por get
// Route::get('hello', function() {
// 	return '<h1> Hello World! </h1>';
// });
// Enrutamiento con cualquier método (get/post/put/delete)
// Route::any('user/list', function() {
// 	$users = App\User::all();
// 	return dd($users);
// });
// Enrutamiento a una vista
//Route::view('article/list', 'articleslist', ['articles' => App\Article::all()]);
// Enrutamiento con Parámetro
// Route::get('user/show/{id}', function($id) {
// 	$user = App\User::find($id);
// 	return dd($user);
// });
// Enrutamiento con nombre
// Route::get('category/list', function() {
// 	$categories = App\Category::all();
// 	return dd($categories);
// })->name('categorias');

/* - - - - - - - - - - - - - - - - - - - - - - */
/* Inicio - - - - - - - - - - - - - - - - - - - */
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome');
/* - - - - - - - - - - - - - - - - - - - - - - */
/* Users - - - - - - - - - - - - - - - - - - - */
Route::resource('users', 'UserController');
/* - - - - - - - - - - - - - - - - - - - - - - */
/* Categories - - - - - - - - - - - - - - - - - - - */
Route::resource('categories', 'CategoryController');
/* - - - - - - - - - - - - - - - - - - - - - - */
/* Articles - - - - - - - - - - - - - - - - - - - */
Route::resource('articles', 'ArticleController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Ajax 
Route::post('loadcat', 'HomeController@loadcat');

// PDF
Route::get('articlespdf', 'ArticleController@pdf');