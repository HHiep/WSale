<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class Authenticate implements AuthenticatesRequests
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    private Auth $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $auth=$this->authenticate($guards);
        $isRouteAuth= $this->isRouteAuth($guards[0]);
        $routeHome = redirect()->route("$guards[0].home");
        $routeLogin = redirect()->route("$guards[0].authenticate.login");
        return $auth ? ($isRouteAuth ? $routeHome : $next($request)) : ($isRouteAuth ? $next($request) : $routeLogin);
    }
    private function authenticate(array $guards): bool
    {
        if (empty($guards)) {
            $guards = [null];
        }
        $auth = false;
        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                $auth = true;
            }
        }

        return $auth;
    }
    private function isRouteAuth($module): bool
    {
        $route = Route::currentRouteName();
        $authenticate = explode('.', $route);
        return isset($authenticate[1]) && $authenticate[1] === 'authenticate' && $route !== "$module.authenticate.logout";
    }
}
