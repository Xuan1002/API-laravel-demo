<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exception\JWTException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class UserMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::toUser($request->input('token'));
        }catch(JWTException $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return reponse()->json(['token_expired'], $e->getStatusCode());
            }
            else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return reponse()->json(['token_invalid'], $e->getStatusCode());
            }else{
                return reponse()->json(['error' =>'Token is required']);
            }
        }
        return $next($request);
    }
}
