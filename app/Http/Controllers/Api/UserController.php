<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:150|min:5',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:5'
            ], [
                'name.required' => 'Nombre requerido',
                'name.min' => 'Nombre debe tener al menos 5 caracteres.',
                'email.required' => 'E-mail requerido',
                'email.email' => 'El correo electrónico debe ser válido.',
                'email.unique' => 'Este email ya está registrado.',
                'password.required' => 'Contraseña requerida',
                'password.min' => 'La contraseña debe tener al menos 5 caracteres.'
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'Error al registrar el usuario', 'errors' => $validator->errors()], 400);
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 1,
                'msg' => 'Registrado correctamente',
                'access_token' => $token,
                'user_id' => $user->id
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'msg' => 'Error al registrar el usuario'], 500);
        }
    }

    public function login(Request $request)
    {   
        try{
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $user = User::where('email', '=', $request->email)->first();
            
            if (!$user) {
                return response()->json(['status' => 0, 'msg' => 'Credenciales incorrectas'], 401);
            }
        
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;

                 return response()->json([
                'status' => 1,
                'msg' => 'Inicio de sesión correctamente',
                'access_token' => $token,
                'user_id' => $user->id
                ], 200);

            }else{
                return response()->json(['status' => 0, 'msg' => 'Credenciales incorrectas'], 401);
            }
            
        }catch (\Exception $e) {
            return response()->json(['status' => 0, 'msg' => 'Error al iniciar sesión'], 500);
        }
    }
}
