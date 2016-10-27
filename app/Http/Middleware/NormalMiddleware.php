<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class NormalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
    
    public function __construct(Guard $auth) {
        $this->auth=$auth;
    }


     public function handle($request, Closure $next)
    {
            if($this->auth->user()->normal()){
                return $next($request);
            }
            else{
//                abort(401);
                return redirect()->to("/home");
            }
    }
 
}
