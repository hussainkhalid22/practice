<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is at least 18 years old
        $age = $request->input('age');
        if ($age < 18) {
            // If not, return a 403 Forbidden response
            return response()->json(['error' => 'You must be at least 18 years old.'], 403);
        }
        return $next($request);
    }
}
