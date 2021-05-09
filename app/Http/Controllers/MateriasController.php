<?php

namespace App\Http\Controllers;

use App\Models\materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        return materias::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          
      materias::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $editar = materias::findOrfail($id);
        return $editar;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materias $materias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $borrar=materias::findOrfail($id);
        $borrar->delete();
        
    }
}
