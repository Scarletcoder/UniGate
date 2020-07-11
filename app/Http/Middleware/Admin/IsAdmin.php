<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        $foundAdmin=false;
        $admin=NULL;

        $admin = DB::table('admins')->where('user_id', Auth::id())->first();

        if($admin!=NULL)
        { $foundAdmin=true; }
        if($foundAdmin==true)
        {return $next($request);}

        else return redirect()->route('auth_error','Administrator');
    }

}
