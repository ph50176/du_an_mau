<?php

class HomeController
{
    public function index()
    {
        $productModel = new Product();

        $products = $productModel->getAllProducts();

        $view = 'home/index.php';

        require_once PATH_VIEW_MAIN;
    }
}