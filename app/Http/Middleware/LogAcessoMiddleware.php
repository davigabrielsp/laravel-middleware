<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;

use Illuminate\Http\Request;

class LogAcessoMiddleware
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

        dd($request);
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->server->getRequestUri();
        LogAcesso::create(['log' => "IP $ip e rota $rota"]);

        //::create(['log' => 'IP xyas requisitou rota x']);
        //return $next($request);
       // return Response('chegou');
    }
}
