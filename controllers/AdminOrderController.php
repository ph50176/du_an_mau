<?php

class AdminOrderController
{
    public function index()
    {
        require_once './configs/checkAdmin.php';

        $orderModel = new Order();

        $orders = $orderModel->getAllOrders();

        $view = 'admin/orders/index.php';

        require_once PATH_VIEW_MAIN;
    }
}