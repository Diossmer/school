<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarMateriaRequest;
use App\Http\Requests\GuardarMateriaRequest;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materia = Materia::all();
        return view('api.materia',['materia'=>$materia]);
        // return $materia;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarMateriaRequest $request)
    {
        //
        Materia::create($request->all());
        return response()->json([
            'res'=> true,
            'msg'=> 'Materia Guardada exitosamente.'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
        return response()->json([
            'res'=> true,
            'msg'=> $materia
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarMateriaRequest $request, Materia $materia)
    {
        //
        $materia->update($request->all());
        return response()->json([
            'res'=> true,
            'status' => $request->getStatusCode(),
            'msg' => $request->getMessage()
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
        $materia->delete();
        return response()->json([
            'res'=> true,
            'msg' => "Se ha eliminado correctamente"
        ],200);
    }
    /**
     * También se puede eliminar de esta forma el id
     *
     *    public function destroy($materia)
     *    {
     *        // $materia->delete();
     *        Materia::destroy($materia);
     *        return response()->json([
     *            'res'=> true,
     *            'msg' => "Se ha eliminado correctamente"
     *        ],200);
     *    }
     */
}
