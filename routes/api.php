<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TaskController;

// Liste de toutes les tâches
Route::get('/tasks', [TaskController::class, 'index']);

// Créer une nouvelle tâche
Route::post('/tasks', [TaskController::class, 'store']);

// Détails d'une tâche
Route::get('/tasks/{task}', [TaskController::class, 'show']);

// Mettre à jour une tâche
Route::put('/tasks/{task}', [TaskController::class, 'update']);
Route::patch('/tasks/{task}', [TaskController::class, 'update']);

// Supprimer une tâche
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);



// Route::apiResource('tasks', TaskController::class);
