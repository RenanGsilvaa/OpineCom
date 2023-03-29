<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpiniaoController extends Controller
{
    public function create()
    {
        return view('Opiniao.create');
    }
}
