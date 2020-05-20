<?php

use Illuminate\Support\Facades\Route;

/** Home **/
Route::get('/', function(){
    return view ('index');
})->name('index');
/** RUTAS TEACHERS */
/** View PTB */
Route::middleware(['teachers',  'auth:teacher'])->name('ptb.')->group(function () {
    route::view('autotronica',  'teachers.imports.ptb-Autotronica')          ->name('autotronica');
    route::view('construccion', 'teachers.imports.ptb-Construccion')         ->name('construccion');
    route::view('hospitalidad', 'teachers.imports.ptb-Hospitalidad')         ->name('hospitalidad');
    route::view('informatica',  'teachers.imports.ptb-Informatica')          ->name('informatica');
    route::view('mecanica',     'teachers.imports.ptb-Mecanica-Automotriz')  ->name('mecanica');
});

Route::middleware(['teachers', 'auth:teacher'])->name('achievements.')->group(function(){
    route::view('logros-Parcial',   'achievements.logros-parcial')          ->name('partial');
    route::view('logros-Semestral', 'achievements.logros-semestral')        ->name('biannual');
});

/** Pendientes */
Route::view('import','importar')                                    ->name('import');
Route::post('import-list-excel', 'ImportController@ImportExcel')    ->name('datos.import.excel');

/** Contact */
Route::view('contactanos','contacts.contact')->name('contact');

/** RUTAS DE LOGIN */
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

/* login admin */
Route::prefix('administrador')->namespace('Auth')->name('admin.')->group(function(){
    Route::get('login',  'LoginAdminController@showLoginForm')              ->name('login');
    Route::post('login', 'LoginAdminController@login')                      ->name('login');
    Route::get('area',   'LoginAdminController@secret')                     ->name('secret');
});

/* login Student */
Route::prefix('alumno')->namespace('Auth')->name('student.')->group(function(){
    Route::get('login',         'LoginStudentController@showLoginForm')    ->name('login');
    Route::post('login',        'LoginStudentController@login')            ->name('login');
    Route::get('area',          'LoginStudentController@secret')           ->name('secret');
});
/** Login teacher */
Route::prefix('docente')->namespace('Auth')->name('teacher.')->group(function(){
    Route::get('login',        'LoginTeacherController@showLoginForm')     ->name('login');
    Route::post('login',       'LoginTeacherController@login')             ->name('login');
    Route::get('area',         'LoginTeacherController@secret')            ->name('secret');
});

/* RUTAS DE ADMINISTRADOR */
Route::middleware(['admins', 'auth:admin'])->group(function(){
    Route::resource('administrar/carreras', 'CareerController')
    ->parameters(['carreras' => 'career'])
    ->names('career');

    Route::get('/listar/alumno',    'StudentController@index')  ->name('list.student');
    Route::get('/listar/docente',   'TeacherController@index')  ->name('list.teacher');
    Route::resource('administrar/grupos','GroupController')     ->parameters(['grupos'  => 'group'])->names('group');
    Route::resource('administrar/avisos','NoticeController')    ->parameters(['avisos'   => 'notice'])->names('notices');
    Route::get('aviso/modal','NoticeController@modalnotice')    ->name('notice.modal');
});
