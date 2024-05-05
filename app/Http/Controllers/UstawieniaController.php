<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UstawieniaController extends Controller
{
    public function index()
    {
        return view('ustawienia'); // Załadowanie widoku dla zakładki Ustawienia
    }
}
