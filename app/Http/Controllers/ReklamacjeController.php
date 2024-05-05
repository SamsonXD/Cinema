<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReklamacjeController extends Controller
{
    public function index()
    {
        return view('reklamacje.index'); // Załadowanie widoku dla zakładki Reklamacje
    }
}
