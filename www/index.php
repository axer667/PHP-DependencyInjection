<?php
require_once('Container.php');
require_once('UserController.php');
require_once('UserRepository.php');
require_once('Db.php');

use App\Container;
use App\UserController;

try {
    $controller = (new Container())->get(UserController::class);
    echo $controller->handle();
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}