<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentsForbiddenWords
{
    protected $forbbiden=[
        'texto',
        'censurado'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        foreach ($this->forbbiden as $word) {
            $request->merge([
                'name' => str_replace($word, '***', $request->input('name')),
                'content' => str_replace($word, '***', $request->input('content')),
            ]);
        }
        return $next($request);
    }
}
