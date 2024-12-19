<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public static function index() {
        $pessoas = Pessoa::all();
        return response()->json($pessoas);
    }
}
