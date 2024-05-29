<?php

class User
{
    private $dataFile = 'Data/Users.json';

    public function __construct()
    {
        if (!file_exists($this->dataFile)) {
            file_put_contents($this->dataFile, json_encode([]));
        }
    }

    public function addUser($username, $password)
    {
        $users = json_decode(file_get_contents($this->dataFile), true);

        if (!isset($users[$username])) {
            $users[$username] = password_hash($password, PASSWORD_DEFAULT);
            file_put_contents($this->dataFile, json_encode($users));
            return true;
        }
        return false;
    }

    public function validateUser($username, $password)
    {
        $users = json_decode(file_get_contents($this->dataFile), true);

        if (isset($users[$username]) && password_verify($password, $users[$username])) {
            return true;
        }
        return false;
    }
}
?>
