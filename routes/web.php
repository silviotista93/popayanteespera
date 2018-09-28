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
//RUTAS PRUEBAS
Route::get('servicios',function (){

    return \App\Servicio::with('servicios')->get();
});
Route::get('sitios/{id}',function ($id){

    return \App\Servicio::where('id_usuario','=',$id)->with('tipoServicio')->get();
});



//RUTAS PARA EL SISTEMA WEB
Route::group(['namespace' =>'Web'], function (){
    Route::get('/','HomeController@index')->name('home');

    //RESTAURANTES

    //Detalle Restuarante
     Route::get('/detalle-restaurant/{id}','RestauranteController@showRestaurante')->name('showRestaurante');
    //Todos los Restuarantes
    Route::get('/resturantes','RestauranteController@allRestaurante')->name('allRestaurantes');

    //HOTELES
    Route::get('/detalle-hotel','HotelesController@showHotel')->name('showHotel');
});

//RUTAS PARA EL ADMINISTRADOR
Route::group(['namespace' =>'Admin'], function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    //EMPRESARIOS

    //Agregar Empresarios...
    Route::get('/dashboard/agregar-empresa','AgregarEmpresaController@index')->name('addEmpresa');
    Route::post('/dashboard/empresario-agregado','AgregarEmpresaController@agregarEmpresario')->name('empresarioAgregado');
    //Todos los Empresarios
    Route::get('/dashboard/todos-empresarios','EmpresariosController@index')->name('allEmpresarios');
    Route::get('/api/empresarios',function (){
        return datatables()->of(\App\User::role(['Empresario'])->get())->toJson();
    });
    //Asignar Servicio
    Route::post('/dashboard/asignar-servicio','AgregarEmpresaController@asignarServicio')->name('asignarServicio');

    //SITIOS DEL EMPRESARIO
    Route::get('/dashboard/empresas','SitiosController@index')->name('sitiosEmpresario');
    Route::get('/api/sitios/{id}',function ($id){
        return datatables()->of(\App\Servicio::where('id_usuario','=',$id)->with('tipoServicio')->get())->toJson();
    });

    //RESTAURANTES
    //Agregar Restaurante.........
    Route::get('/dashboard/restaurante/{id}','RestaurantesController@addRestaurante')->name('showRestaurant');
    //Agregar Actualizar.........
    Route::put('/dashboard/restaurante-actualizado/{servicio}','RestaurantesController@updateRestaurante')->name('updateRestaurant');
    Route::post('restaurante-imagen','RestaurantesController@imagen')->name('imagenRestaurant');
    Route::post('restaurante-fotoSitio','RestaurantesController@fotoSitio')->name('fotoSitioRestaurant');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
Route:: get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

