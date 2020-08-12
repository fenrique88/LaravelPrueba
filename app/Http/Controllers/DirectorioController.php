<?php

namespace App\Http\Controllers;
use App\Directorio;
use App\Http\Requests\CreateDirectorioRequest;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //get listar registro
    public function index()

    {

        $Directorio=Directorio::all();//Select * from table
        return $Directorio;
        //return Directorio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



     //POST envia datos para guardar
    //public function store(Request $request)
    public function store(CreateDirectorioRequest $request)
    {
        $inserta=$request-> all();
        return Directorio::create($inserta);

        //$Directorio = Directorio::create($request->all());
        //return $Directorio;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     //PUT actualiza registros
    public function update(UpdateDirectorioRequest $request, Directorio $directorio)
    {
        $actualiza = $request->all();
        $directorio->update($actualiza);
        /*return response()->json([
            'res' => true,
            'message' => 'Registro actualizado correctamente'

        
        );*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
