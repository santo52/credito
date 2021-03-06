<?php

Route::get('/', function () {
    return Redirect::route('home');
});

Route::get('usuarios', [
    'before' => 'permissions:users',
    'as' => 'users',
    'uses' => 'UserController@showAll'
]);

Route::get('eliminar-usuario/{id}', [
    'before' => 'permissions:users',
    'as' => 'userDelete',
    'uses' => 'UserController@userDelete'
]);

Route::get('nuevo-usuario', [
    'before' => 'permissions:users',
    'as' => 'userNew',
    'uses' => 'UserController@newUser'
]);

Route::post('nuevo-usuario', [
    'before' => 'permissions:users',
    'as' => 'userNew',
    'uses' => 'UserController@createUser'
]);

Route::post('usuarios', [
    'before' => 'permissions:users',
    'as' => 'searchUsers',
    'uses' => 'UserController@searchUsers'
]);

Route::get('usuariosTarjeta', [
    'before' => 'permissions:users',
    'as' => 'searchUsersCard',
    'uses' => 'UserController@searchUsersCard'
]);

Route::get('usuarios/{id}', [
    'before' => 'permissions:users',
    'as' => 'userShow',
    'uses' => 'UserController@userShow'
]);

Route::get('usersExcel', [
    'before' => 'permissions:users',
    'as' => 'usersExcel',
    'uses' => 'UserController@usersExcel'
]);

Route::get('usersPdf', [
    'before' => 'permissions:users',
    'as' => 'usersPdf',
    'uses' => 'UserController@usersPdf'
]);

Route::get('roles', [
    'before' => 'permissions:roles',
    'as' => 'roles',
    'uses' => 'RolesController@showAll'
]);

Route::get('rol/{id}', [
    'before' => 'permissions:roles',
    'as' => 'rol',
    'uses' => 'RolesController@show'
]);

Route::get('eliminar-rol/{id}', [
    'before' => 'permissions:roles',
    'as' => 'deleteRol',
    'uses' => 'RolesController@deleteRol'
]);

Route::post('rol/{id}', ['before' => 'permissions:roles', 'as' => 'updateRol','uses' => 'RolesController@updateRol' ]);
Route::post('roles', ['before' => 'permissions:roles', 'as' => 'newRol','uses' => 'RolesController@newRol' ]);

Route::post('uploadUser/{id}', [
    'uses' => 'UserController@updateUser',
    'as' => 'updateUser'
]);

Route::post('updateValueCredit/{id}','CreditController@updateValueCredit');

Route::get('administradores', ['before' => 'permissions:users', 'as' => 'usersAdmin','uses' => 'UserController@showAllAdmin' ]);
Route::get('enviar-email', ['before' => 'permissions:users', 'as' => 'usersAdmin','uses' => 'MailController@index' ]);

//Subida excel
Route::get('subidaExcel', [
    'as' => 'excel',
    'uses' => 'UserController@showExcel'
]);

Route::post('subidaExcel', [
    'as' => 'excel',
    'uses' => 'UserController@uploadExcel'
]);

//Subida excel diario
Route::get('subidaExcelDiario', ['as' => 'diario', 'uses' => 'UserController@showExcelDaily']);
Route::post('subidaExcelDiario', ['as' => 'diario', 'uses' => 'UserController@uploadExcelDaily']);

//slider

Route::get('slider', [
    'as' => 'slider',
    'uses' => 'SliderController@showSlider'
]);

Route::post('slider', [
    'as' => 'slider',
    'uses' => 'SliderController@saveSlider'
]);

Route::post('administrar', [
    'as' => 'administratorSlider',
    'uses' => 'SliderController@uploadSlider'
]);

Route::get('administratorSlider/{id}', [
    'uses' => 'SliderController@deleteSlider',
    'as' => 'deleteSlider'
]);

//regiones

Route::get('Regiones',[
    'as' => 'location',
    'uses' => 'CreditController@showLocations'
]);

Route::post('Regiones', [
    'as' => 'location',
    'uses' => 'CreditController@addLocations'
]);

Route::get('deleteLocation/{id}', [
    'uses' => 'CreditController@deleteLocation',
    'as' => 'deleteLocation'
]);

//actualizar usuario

Route::post('Actualizar/{id}', ['as' => 'update', 'uses' => 'UserController@updateClient']);
Route::get('Actualizar/{id}', ['as' => 'update', 'uses' => 'UserController@userShow']);

//mostrar solicitudes de credito

Route::get('solicitudes',[
    'as' => 'request',
    'uses' => 'CreditController@showRequest'
]);

// Aceptar o rechazar credito

Route::get('showCreditRequest/{id}', [
    'as' => 'showCreditRequest',
    'uses' => 'CreditController@showCreditRequest'
]);

Route::post('showCreditRequest/{id}', [
    'as' => 'acceptCredit',
    'uses' => 'CreditController@acceptCredit'
]);


//Variables generales

Route::get('variables', [
    'as' => 'variables',
    'uses' => 'CreditController@showVariables'
]);

Route::post('variables/{id}', [
    'as' => 'variables/{id}',
    'uses' => 'CreditController@saveVariables'
]);

//estado del credito
Route::get('estadoCredito', ['as' => 'state', 'uses' => 'UserController@showState']);

Route::get('showCreditRequest/reprobate/{id}', [
    'uses' => 'CreditController@reprobateCredit',
    'as' => 'reprobateCredit'
]);

/*Route::post('showCreditRequest/reprobate/{id}',[
    'uses' => 'CreditController@reprobateCredit',
    'as' => 'reprobateCredit'
]);*/

//puntos de venta

Route::post('puntos', [
    'as' => 'point',
    'uses' => 'PointController@create'
]);

Route::get('puntos', [
    'as' => 'point',
    'uses' => 'PointController@show'
]);

Route::get('puntos/{id}', [
    'as' => 'pointDelete',
    'uses' => 'PointController@delete'
]);

Route::post('paz-y-salvo/{id}', [
    'as' => 'peace',
    'uses' => 'UserController@peacePDF'
]);

Route::get('database', [
    'uses' => 'UpdateController@index'
]);

Route::post('database', [
    'uses' => 'UpdateController@update',
    'as' => 'updateDatabase'
]);

Route::get('pdf/{id}', [
    'uses'  =>  'ExtractsController@downloadExtract',
    'as'    =>  'ExtractPdf'
]);