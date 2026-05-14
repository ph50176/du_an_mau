<?php

class AdminUserController
{
    public function index()
    {
        require_once './configs/checkAdmin.php';

        $userModel = new User();

        $users = $userModel->getAllUsers();

        $view = 'admin/users/index.php';

        require_once PATH_VIEW_MAIN;
    }

    public function delete()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $userModel = new User();

        $userModel->deleteUser($id);

        header('Location: ?action=admin-users');
    }
}