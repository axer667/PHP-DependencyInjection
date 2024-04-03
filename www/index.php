<?php
require_once('UserController.php');
require_once('UserRepository.php');
require_once('Db.php');

use App\Db;
use App\UserController;
use App\UserRepository;

try {
    $controller = (new UserController(
        new UserRepository(
            new Db()
        )
    ));
    echo $controller->handle();
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}