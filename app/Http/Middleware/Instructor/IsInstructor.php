<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsInstructor
{
    public function handle($request, Closure $next)
    {
        $foundInstructor=false;
        $instructor=NULL;

        $instructor = DB::table('instructors')->where('user_id', Auth::id())->first();

        if($instructor!=NULL)
        { $foundInstructor=true; }
        if($foundInstructor==true)
        {return $next($request);}

        else return redirect()->route('auth_error','Instructor');
    }

}
