<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class proyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$proyectos[]=['titulo'=>"Proyecto C++"];
        $proyectos[]=['titulo'=>"Proyecto Laravel"];
        $proyectos[]=['titulo'=>"Proyecto Android Studio"];
        $proyectos[]=['titulo'=>"Proyecto Web"];*/
        $proyectos=DB::table('projects')->get();
        return view('proyectos',compact('proyectos'));
    }

}
 