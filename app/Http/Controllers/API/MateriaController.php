<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarMateriaRequest;
use App\Http\Requests\GuardarMateriaRequest;
use App\Http\Resources\MateriaResource;
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

        $materia = MateriaResource::collection(Materia::all())->response()->setStatusCode(200);

        // return view('api.materia',['materia'=>$materia]);
        return $materia;
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
        /* Materia::create($request->all());
        return response()->json([
            'res'=> true,
            'msg'=> 'Materia Guardada exitosamente.'
        ],200); */
        return (new MateriaResource(Materia::create([
            'nombre'=> $request->nombre,
            'codigo_escolar'=>$request->codigo_escolar
        ])))->additional(['message'=>'Materia agregado Correctamente'])->response()->setStatusCode(200);
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
        /* return response()->json([
            'res'=> true,
            'msg'=> $materia
        ],200); */
        return (new MateriaResource($materia))->response()->setStatusCode(200);
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
        /* $materia->update($request->all());
        return response()->json([
            'res'=> true,
            'status' => $request->getStatusCode(),
            'msg' => $request->getMessage()
        ],200); */
        $materia->update($request->all());
        return (new MateriaResource($materia))
        ->additional(['message'=>"Materia actualizado"])
        ->response()
        ->setStatusCode(200);
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
        /* $materia->delete();
        return response()->json([
            'res'=> true,
            'msg' => "Se ha eliminado correctamente"
        ],200); */
        $materia->delete();
        return (new MateriaResource($materia))
        ->additional(['message'=>"Materia Eliminado correctamente"])
        ->response()
        ->setStatusCode(200);
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
