<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('home');
>>>>>>> 2aff76d89f87a6da9feac8e817024badb8e2df20
});

Route::get('login', function() {
    return view('auth.login');
});

Route::get('logout', function() {
    return 'Logout usuario';
});

Route::get('proyectos', function() {
    return view('proyectos.index');
});

Route::get('proyectos/show/{id}', function($id) {
    return view('proyectos.show', array('id'=>$id));
})->where('id', '[0-9]+');

Route::get('proyectos/create', function() {
    return view('proyectos.create');
});

Route::get('proyectos/edit/{id}', function($id) {
    return view('proyectos.edit', array('id'=>$id));
})->where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null) {
    return $id ? 'Visualizar el currículo de '. $id : 'Visualizar el currículo propio';
})->where('id', '[0-9]*');
