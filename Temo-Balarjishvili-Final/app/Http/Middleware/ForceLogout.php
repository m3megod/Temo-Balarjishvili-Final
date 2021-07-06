<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ForceLogout
{
    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

       
        if (! empty($user->force_logout)) {
           
            $user->force_logout = false;
            $user->save();

         
            Auth::guard('web')->logout();

            return redirect()->route('login');
        }

        return $next($request);
    }
}
