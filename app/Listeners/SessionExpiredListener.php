<?php

namespace App\Listeners;

use App\Events\SessionExpired;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redirect;

class SessionExpiredListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(SessionExpired $event)
    {
        // Redirigir al usuario al formulario de inicio de sesión
        return Redirect::route('/')->with('message', 'Tu sesión ha expirado. Inicia sesión nuevamente.');
    }
}