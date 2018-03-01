<?php

namespace App\Exceptions;

use Exception;
use App\Exceptions\NoActiveAccountException;
use App\Exceptions\UnauthorizedException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Validation\ValidationException::class,
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
        switch($exception){
            case ($exception instanceof NotFoundHttpException):
                return $this->renderException($exception);
                break;
            case ($exception instanceof ModelNotFoundException):
                return $this->renderException($exception);
                break;
            case ($exception instanceof UnauthorizedException):
                return $this->renderException($exception);
                break;
            case ($exception instanceof NotFoundHttpException):
                return $this->renderException($exception);
                break;
            default:
                return parent::render($request, $exception);
        }
    }

    protected function renderException($e) {
        switch ($e){
            case ($e instanceof NotFoundHttpException):
                return response()->view('errors.404', [], 404);
                break;
            case ($e instanceof ModelNotFoundException):
                return response()->view('errors.404', [], 404);
                break;
            case ($e instanceof UnauthorizedException):
                return response()->view('errors.unauthorized');
                break;
            case ($e instanceof NoActiveAccountException):
                return response()->view('errors.no-active-account');
                break;
            default:
                return (new SymfonyDisplayer(config('app.debug')))
                    ->createResponse($e);
        }
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception) {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        return redirect()->guest('login');
    }
}
