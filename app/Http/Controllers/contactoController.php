<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function store()
    {
        //return $request->get('name');
        return request('name');
    }
}
