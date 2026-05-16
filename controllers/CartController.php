<?php

class CartController
{
    public function add()
    {
        $id = $_GET['id'];

        $productModel = new Product();

        // lấy sản phẩm theo id
        $product = $productModel->findById($id);

        if (!$product) {
            die('Sản phẩm không tồn tại');
        }

        // nếu chưa có cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // nếu sản phẩm đã tồn tại
        if (isset($_SESSION['cart'][$id])) {

            $_SESSION['cart'][$id]['quantity'] += 1;

        } else {

            // lưu đúng dữ liệu
            $_SESSION['cart'][$id] = [
                'id'       => $product['id'],
                'name'     => $product['name'],
                'price'    => $product['price'],
                'image'    => $product['image'],
                'quantity' => 1
            ];
        }

        header('Location: ?action=cart');
        exit;
    }

    public function index()
    {
        $carts = $_SESSION['cart'] ?? [];

        $title = "Giỏ hàng";

        $view = 'cart/index.php';

        require_once PATH_VIEW . 'layouts/main.php';
    }

    public function delete()
    {
        $id = $_GET['id'];

        unset($_SESSION['cart'][$id]);

        header('Location: ?action=cart');
        exit;
    }

    public function increase()
    {
        $id = $_GET['id'];

        $_SESSION['cart'][$id]['quantity']++;

        header('Location: ?action=cart');
        exit;
    }

    public function decrease()
    {
        $id = $_GET['id'];

        if ($_SESSION['cart'][$id]['quantity'] > 1) {
            $_SESSION['cart'][$id]['quantity']--;
        }

        header('Location: ?action=cart');
        exit;
    }
}