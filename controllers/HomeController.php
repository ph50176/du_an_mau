<?php

class HomeController
{
    public function index()
    {
        // PRODUCT
        $productModel = new Product();

        $products = $productModel->getAllProducts();

        // CATEGORY
        $categoryModel = new Category();

        $categories = $categoryModel->getAll();

        // VIEW
        $view = 'home/index.php';

        require_once PATH_VIEW_MAIN;
    }
}