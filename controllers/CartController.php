<?php

class CartController
{
    public function add()
    {
        $id = $_GET['id'];

        $productModel = new Product();

        $product = $productModel->getProductById($id);

        if (!$product) {
            die('Sản phẩm không tồn tại');
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$id])) {

            $_SESSION['cart'][$id]['quantity'] += 1;

        } else {

            $_SESSION['cart'][$id] = [

                'id' => $product['id'],

                'name' => $product['name'],

                'price' => $product['price'],

                'image' => $product['image'],

                'quantity' => 1
            ];
        }

        header('Location: ?action=cart');
    }

    public function index()
    {
        $carts = $_SESSION['cart'] ?? [];

        $view = 'cart/index.php';

        require_once PATH_VIEW_MAIN;
    }
}