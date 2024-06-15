<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function _construct() {
        $this->middleware('auth:admin-api',['except'=>['adminlogin','adminregister']]);
    }
    public function registerAdmin(Request $request){
        $admin=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        if($admin){
            return response()->json(['status'=>true, 'message' =>$admin],200);
        }else{
            return response()->json(['status'=>false],200);
        }
    }

    public function loginAdmin(Request $request){
            $credentials = request(['email', 'password']);



            if (! $token = auth()->guard('admin-api')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return $token;

    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('admin-api')->factory()->getTTL() * 60
        ]);
    }

    public function profileAdmin()
    {
        return response()->json(auth()->guard('admin-api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutAdmin()
    {
        auth()->guard('admin-api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

}
