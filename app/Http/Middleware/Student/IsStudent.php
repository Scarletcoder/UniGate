<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsStudent
{
    public function handle($request, Closure $next)
    {
        $foundStudent=false;
        $student=NULL;

        $student = DB::table('students')->where('user_id', Auth::id())->first();

        if($student!=NULL)
        { $foundStudent=true; }
        if($foundStudent==true)
        {return $next($request);}

        else return redirect()->route('auth_error','Student');
    }

}
