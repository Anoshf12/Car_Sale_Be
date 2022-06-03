<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends BaseController
{
    /**
     * Login api
     * 
     * @return \\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        } 
        else if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $admin = Auth::user();
            $success['user_name'] =  $admin->user_name;
            // $token = Auth::attempt($admin);
            // if (!$token) {
            //     return response()->json([
            //         'status' => 'error',
            //         'message' => 'Unauthorized',
            //     ], 401);
            // }
            // $admin = Auth::user();
            // return response()->json([
            //         'status' => 'success',
            //         'user' => $admin,
            //         'authorisation' => [
            //             'token' => $token,
            //             'type' => 'bearer',
            //         ]
            //     ]);

            return $this->sendResponse($success, 'User login success.'); 
        }
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
    public function index()
    {
        $admin = Admin::all();
        return response()->json([
            'admins' => $admin
        ]);
    
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return $this->sendResponse([], 'Request deleted successfully.');
    
    }

}