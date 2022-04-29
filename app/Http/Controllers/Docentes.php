<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Docentes extends Controller
{
    public function docentes()
    {
        return view('varios.docentes');
    }
}
