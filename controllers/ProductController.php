<?php

class ProductController
{
    public function index()
    {
        $productModel = new Product();

        $products = $productModel->getAllProducts();

        $view = 'products/index.php';

        require_once PATH_VIEW_MAIN;
    }

    public function detail()
    {
        $id = $_GET['id'];

        $productModel = new Product();

        $product = $productModel->getProductById($id);

        $view = 'products/detail.php';

        require_once PATH_VIEW_MAIN;
    }
}