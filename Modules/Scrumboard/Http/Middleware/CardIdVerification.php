<?php

namespace Modules\Scrumboard\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Scrumboard\Entities\Card;
use Illuminate\Validation\ValidationException;

class CardIdVerification
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $card = Card::find($id);
        
        if($card) {
            return $next($request);
        } else {
            throw ValidationException::withMessages([
                'id' => ['Card ID not found'],
             ]);
            
        }
    }
}
