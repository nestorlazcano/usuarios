<?php

Route::group(['middleware' => ['auth']], function(){
    route::get('/', 'HomeController@index');
    route::resource('/home', 'HomeController');
    route::resource('modulos', 'Jumpstart\ModulosController');
    route::resource('roles', 'Jumpstart\RolesController');
});

 Route::group(['middleware' => ['auth','admin']], function () {
            route::resource('admin','Jumpstart\AdminController');
            route::resource('historial', 'Jumpstart\HistorialController');
            route::resource('users', 'Jumpstart\AdminController');
});
    
Route::auth();

//Route::get('ajax','Jumpstart\AjaxController@index');
//Route::get('listall','Jumpstart\AjaxController@listall');

