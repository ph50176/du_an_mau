<?php

class AuthController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $email = $_POST['email'];

            $password = password_hash(
                $_POST['password'],
                PASSWORD_DEFAULT
            );

            $userModel = new User();

            $user = $userModel->getUserByEmail($email);

            if ($user) {
                die('Email đã tồn tại');
            }

            $userModel->register(
                $name,
                $email,
                $password
            );

            header('Location: ?action=login');
        }

        $view = 'auth/register.php';

        require_once PATH_VIEW_MAIN;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];

            $password = $_POST['password'];

            $userModel = new User();

            $user = $userModel->getUserByEmail($email);

            if (!$user) {
                die('Email không tồn tại');
            }

            if (!password_verify(
                $password,
                $user['password']
            )) {
                die('Sai mật khẩu');
            }

            $_SESSION['user'] = $user;

            header('Location: /');
        }

        $view = 'auth/login.php';

        require_once PATH_VIEW_MAIN;
    }

        public function logout()
        {
            unset($_SESSION['user']);

            header('Location: /');

            exit;
        }
}