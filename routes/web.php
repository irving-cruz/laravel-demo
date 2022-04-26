<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\contactoController;



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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Util cuando solo vamos a regresar una vista con poca o niguna información (páginas sin lógica)
//Route::view('/','home',['nombre'=>"IrvingCM"])->name('home');
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contacto','contacto')->name('contacto');
Route::post('/contacto',[contactoController::class,'store'])->name('contacto');


/*$proyectos[]=['titulo'=>"Proyecto C++"];
$proyectos[]=['titulo'=>"Proyecto Laravel"];
$proyectos[]=['titulo'=>"Proyecto Android Studio"];
$proyectos=[];*/
//Route::view('/proyectos','proyectos',compact('proyectos'))->name('proyectos');
//Route::get('/proyectos','App\Http\Controllers\proyectosController'); //Método parche Laravel9
//Route::get('/proyectos',proyectosController::class)->name('proyectos'); //Método nuevo pero necesitamos el "use" de arriba
Route::get('/proyectos',[proyectosController::class,'index'])->name('proyectos');


/* Route::get('/',function() { 
    $nombre="Irving";
    //return view('home')->with('nombre',$nombre);
    return view('home',['nombre'=>$nombre]);
})->name('home');
 */

/* Route::get('saludo/{nombre?}',function($nombre="anónimo") {
    return "Saludos ". $nombre;
}); */

/*
Route::get('/', function () {
    return "Hola Mundo de Laravel";
});

Route::get('irving', function () {
    return "Bienvenido a la página de Irving";
});*/


//Si fuera udem.com = Route::get('/',function)
//Si fuera udem.com/irving = Route::get('contacto',function)
