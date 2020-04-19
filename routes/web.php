<?php

use Illuminate\Support\Facades\Route;

/** Home **/
Route::get('/', function(){
    return view ('welcome');
})->name('index');

/** View PTB */
route::view('autotronica',  'imports.ptb-Autotronica')          ->name('ptb.autotronica');
route::view('construccion', 'imports.ptb-Construccion')         ->name('ptb.construccion');
route::view('hospitalidad', 'imports.ptb-Hospitalidad')         ->name('ptb.hospitalidad');
route::view('informatica',  'imports.ptb-Informatica')          ->name('ptb.informatica');
route::view('mecanica',     'imports.ptb-Mecanica-Automotriz')  ->name('ptb.mecanica');

/** achievements **/
route::view('logros-Parcial',   'achievements.logros-parcial')      ->name('logros.parcial');
route::view('logros-Semestral', 'achievements.logros-semestral')    ->name('logros.semestral');

/** Pendientes */
Route::view('import','importar')                                    ->name('import');
Route::post('import-list-excel', 'ImportController@ImportExcel')    ->name('datos.import.excel');

/** Contact */
Route::view('contactanos','contacts.contact')->name('contact');

/** Login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/** Login administrator */
Route::get('/administrador/login',  'AdministratorsController@showLoginForm')   ->name('admin.login');
Route::post('/administrador/login', 'AdministratorsController@login')           ->name('adminPost.login');
Route::get('/administrador/area',   'AdministratorsController@secret')          ->name('admin.secret');


/** Login students */
Route::get('/estudiante/login',     'StudentLoginController@showLoginForm')     ->name('student.login');
Route::post('/estudiante/login',    'StudentLoginController@login')             ->name('studentPost.login');
Route::get('/estudiante/area',      'StudentLoginController@secret')            ->name('student.secret');

/** Login students */
Route::get('/docente/login',     'TeacherLoginController@showLoginForm')        ->name('teacher.login');
Route::post('/docente/login',    'TeacherLoginController@login')                ->name('teacherPost.login');
Route::get('/docente/area',      'TeacherLoginController@homeTeacher')          ->name('teacher.secret');
