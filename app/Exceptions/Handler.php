<?php

namespace App\Exceptions;


use ErrorException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
//        $this->renderable(function (ErrorException $e) {
//            return response()->json(['message' => 'error'], 500);
//        });
////        $this->renderable(function (QueryException $e) {
////            return response()->json(['message' => 'error'], 500);
////        });

    }
}
