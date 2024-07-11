<?php

require_once __DIR__ . '/../vendor/autoload.php';
use function App\Routes\createRouter;

try{
    $router = createRouter();
    $router->dispatch();
} catch (Exception $e) {
    echo $e->getMessage();
}

