<?php

class AdminOrderController
{
    // danh sách đơn hàng
    public function index()
    {
        require_once './configs/checkAdmin.php';

        $orderModel = new Order();

        $orders = $orderModel->getAllOrders();

        $view = 'admin/orders/index.php';

        require_once PATH_VIEW_MAIN;
    }

    // xác nhận đơn
    public function confirm()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $orderModel = new Order();

        $order = $orderModel->findById($id);

        // xử lý trạng thái tiếp theo
        switch($order['status'])
        {
            case 'Chờ xác nhận':
                $newStatus = 'Đang đóng gói';
                break;

            case 'Đang đóng gói':
                $newStatus = 'Đang giao hàng';
                break;

            case 'Đang giao hàng':
                $newStatus = 'Đã giao thành công';
                break;

            default:
                $newStatus = $order['status'];
                break;
        }

        $orderModel->updateStatus($id, $newStatus);

        header("Location: ?action=admin-orders");
        exit;
    }

    // hủy đơn
    public function cancel()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $orderModel = new Order();

        $orderModel->updateStatus($id, 'Đã hủy');

        header("Location: ?action=admin-orders");
        exit;
    }

    public function delete()
    {
        require_once './configs/checkAdmin.php';

        $id = $_GET['id'];

        $orderModel = new Order();

        $orderModel->delete($id);

        header('Location: ?action=admin-orders');
    }
}