<?php

namespace P5blog\models;

class User
{
    use Hydrator;

    private $id;
    private $admin;
    private $email;
    private $password;
    private $name;

    public function __construct($table)
    {
        $this->hydrate($table);
    }

    public function getOne($id)
    {

    }
}