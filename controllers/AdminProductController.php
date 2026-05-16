<?php

class AdminProductController
{
    public function index()
    {
        require_once './configs/checkAdmin.php';

        $productModel = new Product();

        $products = $productModel->getAllProducts();

        $view = 'admin/products/index.php';

        require_once PATH_VIEW_MAIN;
    }

    public function create()
    {
        require_once './configs/checkAdmin.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $image = $_FILES['image']['name'];

            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                PATH_ASSETS_UPLOADS . $image
            );

            $productModel = new Product();

            $productModel->insertProduct(
                $name,
                $price,
                $image,
                $description
            );

            header('Location: ?action=admin-products');
        }

        $view = 'admin/products/create.php';

        require_once PATH_VIEW_MAIN;
    }

    public function delete()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $productModel = new Product();

        $productModel->deleteProduct($id);

        header('Location: ?action=admin-products');
    }

    public function edit()
{
    require_once './configs/checkAdmin.php';

    $id = $_GET['id'];

    $productModel = new Product();

    $product = $productModel->find($id);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = $_POST['name'];

        $price = $_POST['price'];

        $description = $_POST['description'];

        $image = $product['image'];

        // upload ảnh mới
        if(!empty($_FILES['image']['name'])){

            $image = time() . $_FILES['image']['name'];

            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                './assets/uploads/' . $image
            );
        }

        $productModel->updateProduct(
            $id,
            $name,
            $price,
            $image,
            $description
        );

        header('Location: ?action=admin-products');

        exit;
    }

    $view = 'admin/products/edit.php';

    require_once PATH_VIEW_MAIN;
}
}