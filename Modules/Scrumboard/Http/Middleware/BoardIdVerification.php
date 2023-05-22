<?php

namespace Modules\Scrumboard\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Validation\ValidationException;

class BoardIdVerification
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $board = Board::find($id);
        
        if($board) {
            return $next($request);
        } else {
            throw ValidationException::withMessages([
                'id' => ['Board ID not found'],
             ]);
            
        }

        return $next($request);
    }
}
