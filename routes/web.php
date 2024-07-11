<?php

namespace App\Routes;

use App\Controllers\TaskController;
use MiladRahimi\PhpRouter\Router;

function createRouter(): Router
{
$router = Router::create();

$router->get('/', [TaskController::class, 'index']);
$router->post('/tasks', [TaskController::class, 'save']);
$router->get('/tasks/{id}/edit', [TaskController::class, 'edit']);
$router->patch('/tasks/{id}', [TaskController::class, 'update']);
$router->delete('/tasks/{id}', [TaskController::class, 'delete']);

return $router;
}