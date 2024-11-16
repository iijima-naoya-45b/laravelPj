<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Http\Middleware\HandleCors::class,  // CORSミドルウェア
        \Fruitcake\Cors\HandleCors::class,  // CORSミドルウェア（Laravel 7以降）
        // その他のグローバルミドルウェア...
    ];

    // 追加のルートミドルウェア
    protected $routeMiddleware = [
        'cors' => \Fruitcake\Cors\HandleCors::class,  // 必要に応じて、個別ルートでCORSを有効にする
    ];
}
