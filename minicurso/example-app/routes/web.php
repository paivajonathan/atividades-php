<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', [PessoaController::class, 'index']);
