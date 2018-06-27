<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    private $user;
    public function _construct(User $user){}
    {
    	$this->user =$user;
    }
    public function register(Request $request)
    {
    	$user = $this->user->create([
    		'name' => $request->get('name'),
    		'email' =>$request->get('email'),
    		'password' => Hash::make($request->get('password'))

    	]);
    	return reponse()->json([
    		'status' => 200,
    		'message' => 'Success',
    		'data' => $user,
    		'code' => 1
    	]);

    }
    public function login(Request $request)
    {
    	$login = $request->only('email','password');
    	$token = null;
    	try{
    		if(!$token = JWTAuth::attempt($login))
    		{
    			return reponse()->json(['Invalid email or password'],422);
    		}

    	}catch(JWTAuthException $e){
    		return reponse()->json(['fail to create token ', 500]);
    	}
    	return reponse()->json(compact('token'));
    }
    public function getUser(Request $request)
    {
    	$user = JWTAuth::toUser($request->token);
    	return reponse()->json(['result' => $user]);
    }
}
