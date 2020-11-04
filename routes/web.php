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

Auth::routes();

//Routes
Route::middleware(['auth','revalidate'])->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    ///////////////////////////////////////Embarques//////////////////////////////////////////////////////////
    Route::get('/embarque_terrestre', function () {
        return view('vistas_prueba.embarque_terrestre.index');
    });
    Route::get('/embarque_terrestre_ver', function () {
        return view('vistas_prueba.embarque_terrestre.ver');
    });

  ///////////////////////////////////////Administración/////////////////////////////////////////////////////////

    //////////////////BALANCE////////////////////////////////////
    Route::get('/balance', function () {
        return view('vistas_prueba.administracion.balance.index');
    });
    //////////////////EMBARQUES/////////////////////////////////////
    Route::get('/embarques', function () {
        return view('vistas_prueba.administracion.embarques.index');
    });
    Route::get('/embarques-ver', function () {
        return view('vistas_prueba.administracion.embarques.ver');
    });
    //////////////fact_emitidas////////////////////////////////////////
    Route::get('/fact_emitidas', function () {
        return view('vistas_prueba.administracion.fact_emitidas.index');
    });
    Route::get('/fact_emitidas_create', function () {
        return view('vistas_prueba.administracion.fact_emitidas.create');
    });
    //////////////////fact_recibidas//////////////////////////////////////
    Route::get('/fact_recibidas', function () {
        return view('vistas_prueba.administracion.fact_recibidas.index');
    });
    Route::get('/fact_recibidas_create', function () {
        return view('vistas_prueba.administracion.fact_recibidas.create');
    });


    /////////////////////OPERACIONES Y TRAFICO//////////////////////////////////////////////////////
    ///////Reporte de operaciones///
    Route::get('/reporte_operaciones', function() {
      return view('vistas_prueba.operaciones.reporte_operaciones.index');
    });
    Route::get('/reporte_operaciones_ver', function () {
        return view('vistas_prueba.operaciones.reporte_operaciones.ver');
    });
    //////Reporte de viajes Prueba/////////
    Route::get('/reporte_viajes1', function() {
      return view('vistas_prueba.operaciones.reporte_viajes.index');
    });
    Route::get('/reporte_viajes_ver', function () {
        return view('vistas_prueba.operaciones.reporte_viajes.ver');
    });
    ///Posible Proveedor/////////////
    Route::get('/posibles_proveedores', function () {
        return view('vistas_prueba.operaciones.posible_proveedor.index');
    });
    ///Proveedor/////////////
    Route::get('/proveedores', function () {
        return view('vistas_prueba.operaciones.proveedor.index');
    });
    ///Embarques/////////////
    Route::get('/operaciones_embarques', function () {
        return view('vistas_prueba.operaciones.embarques.index');
    });

    ////////////Ventas prueba//////////////////
    Route::get('ventas_prospectos', function() {
      return view('vistas_prueba.ventas.prospectos.index');
    });
    Route::get('posibles_clientes', function() {
      return view('vistas_prueba.ventas.posibles_clientes.index');
    });
    Route::get('clientes', function() {
      return view('vistas_prueba.ventas.clientes.index');
    });


      //roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
            ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
            ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
            ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
            ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
            ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
            ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
            ->middleware('permission:roles.edit');

            //Usuarios
    Route::get('users', 'UserController@index')->name('users.index')
            ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
            ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
            ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
            ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
            ->middleware('permission:users.edit');

    ///Embarques//
    Route::post('shipments/store', 'ShipmentController@store')->name('shipments.store')
            ->middleware('permission:shipments.create');

    Route::get('shipments', 'ShipmentController@index')->name('shipments.index')
            ->middleware('permission:shipments.index');

    Route::get('shipments/create', 'ShipmentController@create')->name('shipments.create')
            ->middleware('permission:shipments.create');

    Route::put('shipments/{shipment}', 'ShipmentController@update')->name('shipments.update')
            ->middleware('permission:shipments.edit');

    Route::get('shipments/{shipment}', 'ShipmentController@show')->name('shipments.show')
            ->middleware('permission:shipments.show');

    Route::delete('shipments/{shipment}', 'ShipmentController@destroy')->name('shipments.destroy')
            ->middleware('permission:shipments.destroy');

    Route::get('shipments/{shipment}/edit', 'ShipmentController@edit')->name('shipments.edit')
            ->middleware('permission:shipments.edit');

            ///Facturas emitidas//
    Route::post('factemitidas/store', 'FactemitidaController@store')->name('factemitidas.store')
            ->middleware('permission:factemitidas.create');

    Route::get('factemitidas', 'FactemitidaController@index')->name('factemitidas.index')
            ->middleware('permission:factemitidas.index');

    Route::get('factemitidas/create', 'FactemitidaController@create')->name('factemitidas.create')
            ->middleware('permission:factemitidas.create');

    Route::put('factemitidas/{factemitida}', 'FactemitidaController@update')->name('factemitidas.update')
            ->middleware('permission:factemitidas.edit');

    Route::delete('factemitidas/{factemitida}', 'FactemitidaController@destroy')->name('factemitidas.destroy')
            ->middleware('permission:factemitidas.destroy');

    Route::get('factemitidas/{factemitida}/edit', 'FactemitidaController@edit')->name('factemitidas.edit')
            ->middleware('permission:factemitidas.edit');

            ///Facturas recibidas//
    Route::post('factrecibidas/store', 'FactrecibidaController@store')->name('factrecibidas.store')
            ->middleware('permission:factrecibidas.create');

    Route::get('factrecibidas', 'FactrecibidaController@index')->name('factrecibidas.index')
            ->middleware('permission:factrecibidas.index');

    Route::get('factrecibidas/create', 'FactrecibidaController@create')->name('factrecibidas.create')
            ->middleware('permission:factrecibidas.create');

    Route::put('factrecibidas/{factrecibida}', 'FactrecibidaController@update')->name('factrecibidas.update')
            ->middleware('permission:factrecibidas.edit');

    Route::delete('factrecibidas/{factrecibida}', 'FactrecibidaController@destroy')->name('factrecibidas.destroy')
            ->middleware('permission:factrecibidas.destroy');

    Route::get('factrecibidas/{factrecibida}/edit', 'FactrecibidaController@edit')->name('factrecibidas.edit')
            ->middleware('permission:factrecibidas.edit');

    //////Reporte de viajes Prueba/////////
    Route::post('repviajes/store', 'RepviajeController@store')->name('repviajes.store')
            ->middleware('permission:repviajes.create');

    Route::get('repviajes', 'RepviajeController@index')->name('repviajes.index')
            ->middleware('permission:repviajes.index');

    Route::get('repviajes/{repviaje}', 'RepviajeController@show')->name('repviajes.show')
            ->middleware('permission:repviajes.show');

    Route::get('repviajescreate', 'RepviajeController@create')->name('repviajes.create')
            ->middleware('permission:repviajes.create');

    Route::put('repviajes/{repviaje}', 'RepviajeController@update')->name('repviajes.update')
            ->middleware('permission:repviajes.edit');

    Route::delete('repviajes/{repviaje}', 'RepviajeController@destroy')->name('repviajes.destroy')
            ->middleware('permission:repviajes.destroy');

    Route::get('repviajes/{repviaje}/edit', 'RepviajeController@edit')->name('repviajes.edit')
           ->middleware('permission:repviajes.edit');

});
