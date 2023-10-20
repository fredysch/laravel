<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/projetos', 'App\Http\Controllers\ProjectController@index');

Route::get('/treinamentos', function () {
    return view('cursos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::post('/send-contact', [ContactController::class, 'send'])->name('send-contact');


