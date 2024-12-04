<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Global middleware yang akan dijalankan untuk semua request.
     *
     * @var array
     */
    //protected $middleware = [
        // Menangani proxy header untuk aplikasi.
        //\App\Http\Middleware\TrustProxies::class,
        // Menangani CORS (Cross-Origin Resource Sharing).
        //\Illuminate\Http\Middleware\HandleCors::class,
        // Memblokir request saat aplikasi dalam mode maintenance.
        //\App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Memvalidasi ukuran maksimal POST request.
        //\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Menghapus spasi berlebih dari input.
        //\App\Http\Middleware\TrimStrings::class,
        // Mengubah string kosong menjadi null.
        //\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    //];

    /**
     * Grup middleware yang digunakan berdasarkan kategori tertentu.
     *
     * @var array
     */
    //protected $middlewareGroups = [
        //'web' => [
            //\App\Http\Middleware\EncryptCookies::class,
            //\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            //\Illuminate\Session\Middleware\StartSession::class,
            // Jika Anda menggunakan fitur otentikasi session.
            //\Illuminate\Session\Middleware\AuthenticateSession::class,
            //\Illuminate\View\Middleware\ShareErrorsFromSession::class,
            //\App\Http\Middleware\VerifyCsrfToken::class,
            //\Illuminate\Routing\Middleware\SubstituteBindings::class,
        //],

        //'api' => [
            // Membatasi jumlah request API per menit.
            //'throttle:api',
            //\Illuminate\Routing\Middleware\SubstituteBindings::class,
        //],
    //];

    /**
     * Middleware khusus yang dapat ditetapkan untuk rute tertentu.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        //'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        //'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        //'can' => \Illuminate\Auth\Middleware\Authorize::class,
        //'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        //'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        //'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        //'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        //'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class, // Middleware khusus admin
    ];

    /**
     * Urutan prioritas middleware yang harus dijalankan.
     *
     * @var array
     */
    //protected $middlewarePriority = [
        //\Illuminate\Session\Middleware\StartSession::class,
        //\Illuminate\View\Middleware\ShareErrorsFromSession::class,
        //\App\Http\Middleware\Authenticate::class,
        //\Illuminate\Routing\Middleware\SubstituteBindings::class,
        //\Illuminate\Auth\Middleware\Authorize::class,
    //];
}
