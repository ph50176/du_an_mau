<?php

class AdminController
{
    public function dashboard()
    {
        require_once './configs/checkAdmin.php';

        $view = 'admin/dashboard.php';

        require_once PATH_VIEW_MAIN;
    }
}