<?php

class OrderController
{
    public function checkout()
    {
        $view = 'checkout/index.php';

        require_once PATH_VIEW_MAIN;
    }

    public function order()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $customer_name = $_POST['customer_name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';

        if (
            empty($customer_name)
            || empty($phone)
            || empty($address)
        ) {

            echo "Vui lòng nhập đầy đủ thông tin";

            return;
        }

        // Lấy giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        if (empty($carts)) {

            echo "Giỏ hàng trống";

            return;
        }

        $total_price = 0;

        foreach ($carts as $item) {

            $total_price +=
                $item['price']
                * $item['quantity'];
        }

        $orderModel = new Order();

        // Tạo đơn hàng
        $order_id = $orderModel->createOrder(
            $customer_name,
            $phone,
            $address,
            $total_price
        );

        // Thêm sản phẩm
        foreach ($carts as $item) {

            $orderModel->insertOrderItem(
                $order_id,
                $item['id'],
                $item['name'],
                $item['price'],
                $item['quantity']
            );
        }

        // Xóa giỏ hàng
        unset($_SESSION['cart']);

        $_SESSION['success'] = 'Đặt hàng thành công';

        header('Location: ?action=cart');

        exit;
    }
}
}