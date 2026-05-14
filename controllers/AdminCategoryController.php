<?php

class AdminCategoryController
{
    public function index()
    {
        require_once './configs/checkAdmin.php';

        $categoryModel = new Category();

        $categories = $categoryModel->getAll();

        $view = 'admin/categories/index.php';

        require_once PATH_VIEW_MAIN;
    }

    public function create()
    {
        require_once './configs/checkAdmin.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];

            $categoryModel = new Category();

            $categoryModel->insert($name);

            header('Location: ?action=admin-categories');

            exit;
        }

        $view = 'admin/categories/create.php';

        require_once PATH_VIEW_MAIN;
    }

    public function delete()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $categoryModel = new Category();

        $categoryModel->delete($id);

        header('Location: ?action=admin-categories');
    }
}