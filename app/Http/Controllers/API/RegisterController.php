<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    /**
    * Register api
    *
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'user_name' => 'required',
            'password' => 'required|max:10|min:4',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $admin = Admin::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => bcrypt($request->password)
        ]);
        $token = Auth::login($admin);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $admin,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
        $success['user_name'] = $admin->user_name;
        return $this->sendResponse($success, 'Admin register Successfull.');
        // $input['password'] = bcrypt($input['password']);
        // $admin = Admin::create($input);
        // // $success['token'] =  $admin->createToken('MyApp')->accessToken;
        // // $success['name'] =  $admin->name;

        // return $this->sendResponse($success, 'User register successfully.');
    }

    
    /**
    * Login api
    *
    * @return \Illuminate\Http\Response
    */
    // public function index(Request $request)
    // {
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
    //         $user = Auth::user(); 
    //         $success['token'] =  $user->createToken('MyApp')->accessToken; 
    //         $success['name'] =  $user->name;

    //         return $this->sendResponse($success, 'User login successfully.');
    //     } 
    //     else{ 
    //         return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    //     } 
    // }
}