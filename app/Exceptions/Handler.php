<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * Daftar pengecualian yang tidak dilaporkan.
     *
     * @var array
     */
    protected $dontReport = [
        // Anda dapat menambahkan pengecualian yang tidak ingin dilaporkan di sini
    ];

    /**
     * Daftar pengecualian yang tidak dilacak.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Laporkan atau log pengecualian.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render tanggapan untuk pengecualian.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // Jika pengecualian adalah 404 (Not Found), tampilkan halaman custom 404
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }

        return parent::render($request, $exception);
    }
}
