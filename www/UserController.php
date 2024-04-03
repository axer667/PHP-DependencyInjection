<?php

namespace App;
use Exception;

class UserController
{
    public function __construct(
        private UserRepository $userRepository
    )
    {}

    /**
     * @throws Exception
     */
    public function handle()
    {
        $user = $this->userRepository->findByEmail('vasya@email.com');
        if (empty($user)) {
            throw new \Exception('Пользователь не найден!');
        }
        return <<<RESPONSE
Имя пользователя: $user->name
RESPONSE;
    }

}