<?php

use Illuminate\Support\Facades\Route;

/** Home **/
Route::get('/', function(){
    return view ('welcome');
})->name('index');

/** View PTB */
Route::middleware(['teachers','auth:teacher'])->group(function () {
    route::view('autotronica',  'imports.ptb-Autotronica')          ->name('ptb.autotronica');
    route::view('construccion', 'imports.ptb-Construccion')         ->name('ptb.construccion');
    route::view('hospitalidad', 'imports.ptb-Hospitalidad')         ->name('ptb.hospitalidad');
    route::view('informatica',  'imports.ptb-Informatica')          ->name('ptb.informatica');
    route::view('mecanica',     'imports.ptb-Mecanica-Automotriz')  ->name('ptb.mecanica');
});


/** achievements **/
route::view('logros-Parcial',   'achievements.logros-parcial')      ->name('logros.parcial');
route::view('logros-Semestral', 'achievements.logros-semestral')    ->name('logros.semestral');

/** Pendientes */
Route::view('import','importar')                                    ->name('import');
Route::post('import-list-excel', 'ImportController@ImportExcel')    ->name('datos.import.excel');

/** Contact */
Route::view('contactanos','contacts.contact')->name('contact');

/** Login */
Auth::routes(['register' => false]);


/* login admin */
Route::get('/administrador/login',  'Auth\LoginAdminController@showLoginForm')       ->name('admin.login');
Route::post('/administrador/login', 'Auth\LoginAdminController@login')               ->name('admin.login');
Route::get('/administrador/area',   'Auth\LoginAdminController@secret')              ->name('admin.secret');

/* login Student */
Route::get('/alumno/login',         'Auth\LoginStudentController@showLoginForm')    ->name('student.login');
Route::post('/alumno/login',        'Auth\LoginStudentController@login')            ->name('student.login');
Route::get('/alumno/area',          'Auth\LoginStudentController@secret')           ->name('student.secret');

/** Login teacher */
Route::get('/docente/login',        'Auth\LoginTeacherController@showLoginForm')   ->name('teacher.login');
Route::post('/docente/login',       'Auth\LoginTeacherController@login')           ->name('teacher.login');
Route::get('/docente/area',         'Auth\LoginTeacherController@secret')          ->name('teacher.secret');

Route::get('/home', 'HomeController@index')->name('home');
