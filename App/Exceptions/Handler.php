<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
            switch ($exception->getStatusCode()) {
                case 403:
                    return response()->view('errors.403', [], 403);
                case 404:
                    return response()->view('errors.404', [], 404);
                case 500:
                    return response()->view('errors.500', [], 500);
                default:
                    return parent::render($request, $exception);
            }
        }

        return parent::render($request, $exception);
    }
} 