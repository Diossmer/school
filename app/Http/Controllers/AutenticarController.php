<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccesoRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AutenticarController extends Controller
{
    public function registros(RegistroRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return response()->json([
            'res'=>true,
            'msg'=>'Usuario Registrado Correctamente....'
        ]);
    }
    public function accesologin(AccesoRequest $request)
    {
        //
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'msg' => ['Las credenciales son malas....'],
            ]);
        }
    
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'res'=>true,
            'token'=>$token
        ],200);
    }
    public function cerrarSesion(Request $request)
    {
       $request->user()->currentAccessToken()->delete();
       return response()->json([
        'res'=>true,
        'msg'=>'token eliminado'
    ],200);
    }
}
