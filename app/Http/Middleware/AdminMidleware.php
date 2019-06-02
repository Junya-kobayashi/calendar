<?php
  namespace App\Http\MiddleWare;

  use Closure;

  class AdminMiddleware
  {
    public function handle($request, Closure $next)
    {
      if($request -> session() -> has('user')){
        return $next($request);
      }

      return redirect('/')
        -> with(
          'message',
          [ 'type' => 'danger', 'text' => 'you need to login']
        );
    }
  }