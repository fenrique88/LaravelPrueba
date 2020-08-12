<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function index(Request $request)
    {
        if($request->has(key:'txtbuscar'))
        {
            $estudiantes=Estudiantes::where('name','like','%'.$request->txtbuscar.'%')->get();

        }else{

            $estudiantes=Estudiantes::all();

        }
        
        //$estudiantes=Estudiantes::all();//Select * from table
        return $estudiantes;
    }*/

    public function index()
    {
        $estudiantes=Estudiantes::all();//Select * from table
        return $estudiantes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//para post en postman
    {
        /*$recibe = $request->all();
        Estudiantes::create($recibe);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado existosamente'
        ], status:200);
        */



        //store también se utiliza para hacer el into a una tabla
        //crea la tabla con los datos que se recibe
        //$estudiante = Estudiantes::create($request->all());
        //return $estudiante;

        $estudiante = Estudiantes::create($request->all());
        //return $estudiante;
        return response()->json([
            'res' => true,
            'message' => 'Registro creado exitosamente'
        ]);
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $estudiantes)
    {
        /*
        $actualiza = $request->all();
        $estudiantes->update($actualiza);
        return response()->json([
            'res' => true,
            'message' => 'registro actualizado'

        ]);
        */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiantes)
    {
       //$estudiantes ->delete();
       // return $estudiante;
       //return response()->json(null,204);

       
        
    }
}


