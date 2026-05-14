<?php

class OrderController
{
    public function checkout()
    {
        // PRODUCT
        $product = null;

        // CART
        $carts = $_SESSION['cart'] ?? [];

        // SUBMIT ORDER
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $customer_name = $_POST['customer_name'];

            $phone = $_POST['phone'];

            $address = $_POST['address'];

            if (empty($carts)) {
                die('Giỏ hàng trống');
            }

            $total_price = 0;

            foreach($carts as $cart){

                $total_price +=
                    $cart['price']
                    * $cart['quantity'];
            }

            $user_id =
                $_SESSION['user']['id']
                ?? null;

            $orderModel = new Order();

            // CREATE ORDER
            $order_id = $orderModel->createOrder(

                $user_id,

                $customer_name,

                $phone,

                $address,

                $total_price
            );

            // CREATE ORDER ITEMS
            foreach($carts as $cart){

                $orderModel->createOrderItem(

                    $order_id,

                    $cart['id'],

                    $cart['name'],

                    $cart['price'],

                    $cart['quantity']
                );
            }

            // CLEAR CART
            unset($_SESSION['cart']);

            echo "
                <h1>
                    Đặt hàng thành công 🎉
                </h1>
            ";

            return;
        }

        $view = 'checkout/index.php';

        require_once PATH_VIEW_MAIN;
    }
}