<?php

namespace App\Service;

class CurrentUser
{
    private $username;
    private $role;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
