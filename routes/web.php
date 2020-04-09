<?php

use Illuminate\Support\Facades\Route;

/** Home **/
Route::get('/', function(){
    return view ('general.master');
});

/** Login */
Route::post('login','LoginController@login')->name('login');
Route::post('import-list-excel', 'ImportController@ImportExcel')->name('datos.import.excel');

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
Route::view('import','importar')->name('import');

/** Contact */
Route::view('contactanos','contacts.contact')->name('contact');
