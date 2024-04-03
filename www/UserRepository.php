<?php

namespace App;

class UserRepository
{

    private Db $db;

    public function __construct(
        Db $db
    )
    {
        $this->db = $db;
    }

    public function findByEmail(string $email): ?User
    {
        $res = $this->db->query(
            'SELECT * FROM users WHERE email=:email',
            [':email' => $email],
            User::class
        );
        return !empty($res) ? $res[0] : null;
    }

}