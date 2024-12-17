<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataUsers;
use Illuminate\Support\Facades\Auth;

Route::group([
    'middleware' => 'api',
], function ($router) {

    // Ruta para logout
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');

    // Ruta para refresh del token
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');

    // Ruta para obtener el usuario autenticado
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');

    // Ruta para obtener usuarios (requiere autenticación)
    Route::get('/obtenerusuarios', [DataUsers::class, 'obtenerusuarios'])->middleware('auth:api')->name('obtenerusuarios');
// Rutas para empleados (requieren autenticación)
    Route::get('/empleados', [EmpleadoController::class, 'index']); // Mostrar todos los empleados
    Route::get('/empleados/{id}', [EmpleadoController::class, 'show']); // Mostrar un empleado por ID
    Route::post('/empleados', [EmpleadoController::class, 'store']); // Crear un nuevo empleado
    Route::put('/empleados/{id}', [EmpleadoController::class, 'update']); // Actualizar un empleado
    Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroy']); // Eliminar un empleado
});

// Rutas públicas
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta de prueba para verificar si la API está funcionando correctamente
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando correctamente']);
});
