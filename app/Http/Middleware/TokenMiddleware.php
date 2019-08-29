<?php

namespace vengine\Http\Middleware;

use Closure;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$request->header to $request->get
        if(is_null($request->get("token", null)))
        {
            return response(['message' => "Token Required"], 404);
        }

        $app = \vengine\Models\App::where("token", "=", $request->get("token"))
            ->get();
        if(empty($app->toArray()))
        {
            return response(['message' => "Token Invalid"], 404);
        }
//        $request->session()->set("app_id", $app[0]->id);
        return $next($request);
    }
}
