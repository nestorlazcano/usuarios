<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    
    protected $auth;
    
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next, $guard = null)
    {
        //if (Auth::guard($guard)->check()) {
        if ($this->auth->check()) {
            
//            $rol = $this->auth->user()->id_rol;
//            
//            switch($rol){
//                case 1:
//                    //return redirect()->to('admin');
//                    break;
//                case 2:
//                    return redirect()->to('normal');
//                    break;
//                case 3:
//                    return redirect()->to('consul');
//                    break;
//                default :
//                    return redirect()->to('login');
//                    break;
//                
//            }
            
        }
        return $next($request);
        
    }
}
