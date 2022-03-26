<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Perjalanan;

class PerjalananController extends Controller
{
    public function index()
    {
        $perjalans = \App\Perjalanan::all();
        return view('/perjalanan.index', compact('perjalans'));
    }

    public function create(Request $request)
    {
        \App\Perjalanan::create($request->all());
        return redirect('/perjalanan');
    }
}


