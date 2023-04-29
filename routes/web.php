<?php

use Illuminate\Support\Facades\Route;

/**
 * Route:get    | Consultar
 * Route:post   | Guardar
 * Route:delete | Eliminar
 * Route:put    | Actualizar
 */

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    // consultar la base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    // consultar la base de datos
    $post = $slug;

    return view('post', ['post' => $post]);
});
