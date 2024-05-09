<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login (){
        return view('login');
    }
    public function auth(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            $validated = $validator->validated();

            $response = Http::post(env('API_URL').'/api/login', [
                'email' => $validated['email'],
                'password' => $validated['password'],
            ]);

            $user = json_decode($response)->content->name;

            $token = $response->json('token');
            dd($response);
            session(['name' => $user]);
            session(['token' => $token]);
            session()->save();

            return redirect('/dashboard');
        } catch (\Throwable $th) {
            //return back()->with('error',$th->getMessage());
        }
    }
    function logout(){
        session()->flush();
        return redirect('/login');
    }
}
