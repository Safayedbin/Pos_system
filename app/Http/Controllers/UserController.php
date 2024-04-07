<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Finally_;

class UserController extends Controller
{
    public function UserRegistration(Request $request){
        
        try{
            User::create([
                'firstname' =>$request->input('firstname'),
                'lastname' =>$request->input('lastname'),
                'email' =>$request->input('email'),
                'mobile' =>$request->input('mobile'),
                'password' =>$request->input('password'),
                
            ]);
    
            return response()->json([
                'message' => 'success'
                
            ], 200); 
        }
        catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage()
                
            ],503);
        }
        finally{

        }
    }
    
    public function UserLogins(Request $request){}

    public function UserLogouts(Request $request){}
}
