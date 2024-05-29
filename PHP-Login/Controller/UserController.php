<?php
require 'Model/User.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showLogin()
    {
        include 'View/login.php';
    }

    public function register()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($this->userModel->addUser($username, $password)) {
            include 'View/success.php';
        } else {
            echo 'Registration failed!';
        }
    }

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($this->userModel->validateUser($username, $password)) {
            echo 'Login successful!';
        } else {
            include 'View/Failed.php';
        }
    }
}
?>
