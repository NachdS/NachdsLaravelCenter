<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
/*     public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    } */



    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          //$role = Auth::user()->role_id;
          $role = Role::join('users', 'users.role_id', 'roles.id')
          ->where('users.id', Auth::user()->id)
          ->select('roles.name')->first();
          switch ($role->name) {
            case 'formateur':
               return redirect('/instructor_dashboard');
               break;
            case 'condidat':
               return redirect('/student_dashboard');
               break; 
      
            default:
               return redirect('/index'); 
               break;
          }
        }
        return $next($request);
      }

}