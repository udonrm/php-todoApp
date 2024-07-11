<?php
namespace App\Controllers;

class TaskController
{
    public function index()
    {
        echo 'Hello, world!';
//        include_once __DIR__ . '/../config/database.php';
//        $tasks = $pdo->query('SELECT * FROM tasks')->fetchAll();
        include_once __DIR__ . '/../views/tasks/index.php';
    }
}