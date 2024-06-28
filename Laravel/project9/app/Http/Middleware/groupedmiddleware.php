<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class groupedmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->age >= 18){
            echo "<h3 class='bg-success text-white text-center p-3'>Valid Age</h3>";
        }else{
            return redirect("/errorpage");
        }
        return $next($request);
    }
}
