<?php

namespace App;
use Exception;

class UserController
{

    /**
     * @throws Exception
     */
    public function handle()
    {
        $repo = new UserRepository();
        // Тут, конечно, будет $_POST['email']:
        $user = $repo->findByEmail('vasya@email.com');
        if (empty($user)) {
            throw new Exception('Пользователь не найден!');
        }
        return <<<RESPONSE
Имя пользователя: $user->name
RESPONSE;
    }

}