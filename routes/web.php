<?php

use Illuminate\Support\Facades\Route;

/** Home **/
Route::get('/', function(){
    return view ('index');
})->name('index');

/** View PTB */
Route::middleware(['teachers','auth:teacher'])->name('ptb.')->group(function () {
    route::view('autotronica',  'imports.ptb-Autotronica')          ->name('autotronica');
    route::view('construccion', 'imports.ptb-Construccion')         ->name('construccion');
    route::view('hospitalidad', 'imports.ptb-Hospitalidad')         ->name('hospitalidad');
    route::view('informatica',  'imports.ptb-Informatica')          ->name('informatica');
    route::view('mecanica',     'imports.ptb-Mecanica-Automotriz')  ->name('mecanica');
});


/** Pendientes */
Route::view('import','importar')                                    ->name('import');
Route::post('import-list-excel', 'ImportController@ImportExcel')    ->name('datos.import.excel');

/** Contact */
Route::view('contactanos','contacts.contact')->name('contact');

/** Login */
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

/* login admin */
Route::prefix('administrador')->namespace('Auth')->name('admin.')->group(function(){
    Route::get('login',  'LoginAdminController@showLoginForm')      ->name('login');
    Route::post('login', 'LoginAdminController@login')              ->name('login');
    Route::get('area',   'LoginAdminController@secret')             ->name('secret');
});

/* login Student */
Route::prefix('alumno')->namespace('Auth')->name('student.')->group(function(){
    Route::get('login',         'LoginStudentController@showLoginForm')    ->name('login');
    Route::post('login',        'LoginStudentController@login')            ->name('login');
    Route::get('area',          'LoginStudentController@secret')           ->name('secret');
});
/** Login teacher */
Route::prefix('docente')->namespace('Auth')->name('teacher.')->group(function(){
    Route::get('login',        'LoginTeacherController@showLoginForm')   ->name('login');
    Route::post('login',       'LoginTeacherController@login')           ->name('login');
    Route::get('area',         'LoginTeacherController@secret')          ->name('secret');
});
route::view('logros-Parcial',   'achievements.logros-parcial')      ->name('logros.parcial');
    route::view('logros-Semestral', 'achievements.logros-semestral')    ->name('logros.semestral');


Route::middleware(['admins', 'auth:admin'])->group(function(){
    Route::resource('administrar/carreras', 'CareerController')
    ->parameters(['carreras' => 'career'])
    ->names('career');

    Route::get('/listar/alumno',    'StudentController@index')  ->name('list.student');
    Route::get('/listar/docente',   'TeacherController@index')  ->name('list.teacher');

    Route::resource('administrar/grupos','GroupController')->parameters(['grupos' => 'group'])->names('group');

    /** achievements **/
    
});
