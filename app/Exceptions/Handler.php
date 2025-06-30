<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    // ... other existing methods

    /**
     * Handle unauthenticated users
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }

        $guard = $exception->guards()[0] ?? null;

        switch ($guard) {
            case 'student':
                $login = route('student.login');
                break;
            case 'teacher':
                $login = route('teacher.login');
                break;
            default:
                $login = route('login');
                break;
        }

        return redirect()->guest($login);
    }
}
