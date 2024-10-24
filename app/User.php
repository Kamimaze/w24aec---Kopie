<?php

class User {
    public string $id;
    public string $email;

    public string $password;
    public string $firstName;
    public string $lastName;

    public function __construct()
    {
        $this->id = null;
        $this->email = null;
        $this->password = null;
        $this->firstName = null;
        $this->lastName = null;
    }
    public function send():bool{
        return false;
    }

}