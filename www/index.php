<?php
require_once('UserController.php');
require_once('UserRepository.php');
require_once('Db.php');

use App\UserController;

try {
    $controller = new UserController();
    echo $controller->handle();
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}