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

Route::post('enviar-email', 'EmailController@enviarEmail');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('servicios-de-limpieza')->group(
    function () {
        Route::get('/de-locales', function () {return view('sections.clean-services.main');});
        Route::get('/de-oficinas', function () {return view('sections.clean-services.office-cleaning');});
        Route::get('/de-ventanas', function () {return view('sections.clean-services.windows-cleaning');});
        Route::get('/industrial', function () {return view('sections.clean-services.industrial-cleaning');});
        Route::get('/de-comunidades', function () {return view('sections.clean-services.comunity-cleaning');});
        Route::get('/de-edificios', function () {return view('sections.clean-services.building-cleaning');});
    }
);

Route::prefix('servicios-de-jardineria')->group(
    function () {
        Route::get('/diseno-y-paisajismo', function () {return view('sections.garden-services.design-landscaping');});
        Route::get('/jardines-verticales', function () {return view('sections.garden-services.vertical-garden');});
        Route::get('/mantenimiento', function () {return view('sections.garden-services.maintenance');});
        Route::get('/podas-y-desbroces', function () {return view('sections.garden-services.pruning-clearing');});
        Route::get('/construccion-de-jardines', function () {return view('sections.garden-services.garden-construction');});
        Route::get('/tala-de-arboles', function () {return view('sections.garden-services.tree-felling');});
    }
);

 Route::get('/contacto', function () {return view('sections.contact.main');});
