<?php

namespace App\Exceptions;

use BadMethodCallException;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof ModelNotFoundException
            || $exception instanceof NotFoundHttpException ) {

            return response()->json([
                'message' => 'resource not found'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($exception instanceof BadMethodCallException) {
            return response()->json([
                'message' => 'method not allowed'
            ], Response::HTTP_METHOD_NOT_ALLOWED);
        }

        if ($exception instanceof BadRequestHttpException) {
            return response()->json([
                'message' => $exception->getMessage() ? $exception->getMessage() : 'received bad request'
            ], Response::HTTP_BAD_REQUEST);
        }

        return parent::render($request, $exception);
    }
}
