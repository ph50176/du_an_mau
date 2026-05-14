<?php

class CheckoutController
{
    public function index()
    {
        $product = null;

        // MUA NGAY
        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $productModel = new Product();

            $product = $productModel->getProductById($id);
        }

        // GIỎ HÀNG
        $carts = $_SESSION['cart'] ?? [];

        $view = 'checkout/index.php';

        require_once PATH_VIEW_MAIN;
    }
}