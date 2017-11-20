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
Route::group(['namespace' => 'Site'], function() {
   Route::get('/', 'SiteController@index');
   Route::get('/contato', 'SiteController@contato');
   Route::get('/categoria/{id}', 'SiteController@categoria');
   Route::get('/categoria2/{id?}', 'SiteController@categoria2');
});


/*
Route::get('/categoria/{idCategoria}', function ($idCategoria){
   return "Posts da categoria => {$idCategoria}";
});

Route::get('/contato', function () {
   return "Contato";
});

Route::get('/empresa', function () {
   return view('empresa');
});

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
   Route::get('/', function(){
      return "Dashboard";
   });

   Route::get('users', function(){
      return "Painel - Usuário";
   });
   Route::get('financeiro', function(){
      return "Painel - Financeiro";
   });

});

*/