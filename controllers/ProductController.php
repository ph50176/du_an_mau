<?php

class ProductController
{
    public function index()
{
    $productModel = new Product();
    $categoryModel = new Category();

    $categories = $categoryModel->getAll();

    // lấy keyword từ URL
    $keyword = $_GET['category_id'] ?? '';

    // nếu có keyword thì search
    if(!empty($keyword))
    {
        $products = $productModel->searchByName($keyword);
    }
    else
    {
        $products = $productModel->getAll();
    }

    $title = "Sản phẩm";

    $view = 'products/index.php';

    require_once PATH_VIEW . 'layouts/main.php';
}

    public function detail()
    {
        $id = $_GET['id'];

        $productModel = new Product();

        $product = $productModel->findById($id);

        $view = 'products/detail.php';

        require_once PATH_VIEW_MAIN;
    }
}