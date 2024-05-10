<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login (){
        return view('login');
    }
    public function log(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'data'=>$user,
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
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

            $user = json_decode($response)->data->name;

            $token = $response->json('token');

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
