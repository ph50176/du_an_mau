<h1>Quản lý đơn hàng</h1>

<table border="1" cellpadding="10" width="100%">

    <tr>

        <th>ID</th>

        <th>Khách hàng</th>

        <th>SĐT</th>

        <th>Địa chỉ</th>

        <th>Tổng tiền</th>

        <th>Ngày đặt</th>

    </tr>

    <?php foreach($orders as $order): ?>

        <tr>

            <td>
                <?= $order['id'] ?>
            </td>

            <td>
                <?= $order['customer_name'] ?>
            </td>

            <td>
                <?= $order['phone'] ?>
            </td>

            <td>
                <?= $order['address'] ?>
            </td>

            <td>

                <?= number_format($order['total_price']) ?>

                VNĐ

            </td>

            <td>
                <?= $order['created_at'] ?>
            </td>

        </tr>

    <?php endforeach; ?>

</table>