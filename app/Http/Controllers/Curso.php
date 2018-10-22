<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso as Model;

class Curso extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $object = Model::all();
        return view('cursos.index',compact('object') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object=Model::find($id);
        return view('cursos.show', compact('object') );
    }
}
