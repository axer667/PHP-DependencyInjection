<?php
require_once('Container.php');
require_once('UserController.php');
require_once('UserRepository.php');
require_once('Db.php');

use App\Container;

try {
    $controller = (new Container())->get('controller.user');
    echo $controller->handle();
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}