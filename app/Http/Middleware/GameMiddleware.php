<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Game;

class GameMiddleware
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

        $cantidad=Game::count();

        if($cantidad>=4){
            $activos=Game::where('is_online',1)->count();

            if($activos>=2){
                return $next($request);
            }
        }
        return abort(403);


        return abort(403);
    }
}
