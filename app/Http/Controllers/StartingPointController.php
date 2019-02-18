<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartingPointController extends Controller
{
    public function index()
    {
        return view('pages.startingpoint');
    }
}
