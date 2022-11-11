<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1); 


        if(empty($locale)) { 
            return redirect()->to('/' . app()->getLocale());
        }

        if(in_array($locale, ['en','it'])) {
            App::setLocale($locale);
            $request->except(0); 
        }

        return $next($request);
    }
}
