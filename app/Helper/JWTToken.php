<?php 

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{

    function CreateToken($useremail):string{
        $key= env('JWT_key');
        $payload=[
            'iss' => 'laravelToken',
            'iat' => time(),
            'exp' => time()+60*60,
            'useremail' => $useremail
            
        ];

        JWT::encode($payload, $key, 'HS256');
    }

    function VerifyToken($token){

        try{
            $key=env('JWT_key');
            $decode= JWT::decode($token, new Key($key, 'HS256'));
            return $decode->useremail;

        }
        catch(Exception $e){
            return response()->json([
                'message' => 'unautherised'
            ]);
        }
        
    }
    function DeleteToken(){}
}