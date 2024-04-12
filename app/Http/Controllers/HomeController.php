<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'message' => 'TESTE DE MENSAGEM VIA CONTROLLER'
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
