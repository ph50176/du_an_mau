<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.admin-order-page{
    width:95%;
    margin:40px auto;
    font-family:Arial, Helvetica, sans-serif;
}

/* ================= TOP BAR ================= */

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    flex-wrap:wrap;
    gap:15px;
}

/* ================= TITLE ================= */

.admin-order-title{
    font-size:32px;
    font-weight:bold;
    color:#222;
}

/* ================= BUTTON ================= */

.top-buttons{
    display:flex;
    gap:12px;
}

.back-btn,
.delete-btn-top{

    padding:12px 20px;

    border-radius:12px;

    text-decoration:none;

    color:white;

    font-weight:bold;

    transition:0.3s;
}

.back-btn{

    background:#1677ff;
}

.back-btn:hover{

    background:#0958d9;

    transform:translateY(-2px);
}

.delete-btn-top{

    background:#ff4d4f;
}

.delete-btn-top:hover{

    background:#d9363e;

    transform:translateY(-2px);
}

/* ================= TABLE ================= */

.admin-order-table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 5px 25px rgba(0,0,0,0.08);
}

.admin-order-table thead{
    background:#f19916;
}

.admin-order-table th{
    padding:18px 15px;
    color:white;
    font-size:15px;
    text-transform:uppercase;
}

.admin-order-table td{
    padding:18px 15px;
    text-align:center;
    border-bottom:1px solid #f1f1f1;
}

.admin-order-table tr:hover{
    background:#fafafa;
}

/* ================= CUSTOMER ================= */

.customer-name{
    font-weight:bold;
    color:#222;
}

/* ================= PRICE ================= */

.order-price{
    color:#f19916;
    font-weight:bold;
}

/* ================= STATUS ================= */

.order-status{
    padding:8px 14px;
    border-radius:30px;
    font-size:13px;
    font-weight:bold;
    display:inline-block;
}

.status-confirm{
    background:#fff4df;
    color:#f19916;
}

.status-packing{
    background:#e7f1ff;
    color:#1677ff;
}

.status-shipping{
    background:#e8fff1;
    color:#00a854;
}

.status-success{
    background:#dcfce7;
    color:#15803d;
}

.status-cancel{
    background:#ffe2e2;
    color:#d9363e;
}

/* ================= ACTION ================= */

.action-group{
    display:flex;
    justify-content:center;
    gap:10px;
    flex-wrap:wrap;
}

.btn-action{
    border:none;
    padding:10px 15px;
    border-radius:10px;
    color:white;
    font-size:14px;
    font-weight:bold;
    cursor:pointer;
    text-decoration:none;
    transition:0.3s;
}

.btn-confirm{
    background:#f19916;
}

.btn-confirm:hover{
    background:#d8840d;
}

.btn-cancel{
    background:#ff4d4f;
}

.btn-cancel:hover{
    background:#d9363e;
}

.btn-delete{
    background:#222;
}

.btn-delete:hover{
    background:black;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    .admin-order-table{
        display:block;
        overflow-x:auto;
        white-space:nowrap;
    }

}

</style>

<div class="admin-order-page">

    <!-- TOP -->
    <div class="top-bar">

        <h1 class="admin-order-title">

            Quản lý đơn hàng

        </h1>

        <div class="top-buttons">

            <!-- QUAY LẠI ADMIN -->
            <a
                href="?action=admin"
                class="back-btn"
            >
                ← Quay lại Admin
            </a>

        </div>

    </div>

    <!-- TABLE -->
    <table class="admin-order-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Khách hàng</th>

                <th>SĐT</th>

                <th>Địa chỉ</th>

                <th>Tổng tiền</th>

                <th>Trạng thái</th>

                <th>Thao tác</th>

            </tr>

        </thead>

        <tbody>

            <?php foreach($orders as $order): ?>

                <tr>

                    <td>

                        #<?= $order['id'] ?>

                    </td>

                    <td class="customer-name">

                        <?= $order['customer_name'] ?>

                    </td>

                    <td>

                        <?= $order['phone'] ?>

                    </td>

                    <td>

                        <?= $order['address'] ?>

                    </td>

                    <td class="order-price">

                        <?= number_format($order['total_price']) ?>

                        VNĐ

                    </td>

                    <td>

                        <?php

                            $statusClass = '';

                            switch($order['status']){

                                case 'Đã xác nhận':
                                    $statusClass = 'status-confirm';
                                    break;

                                case 'Đang đóng gói':
                                    $statusClass = 'status-packing';
                                    break;

                                case 'Đang giao hàng':
                                    $statusClass = 'status-shipping';
                                    break;

                                case 'Đã giao thành công':
                                    $statusClass = 'status-success';
                                    break;

                                case 'Đã hủy':
                                    $statusClass = 'status-cancel';
                                    break;

                                default:
                                    $statusClass = 'status-confirm';

                            }

                        ?>

                        <span class="order-status <?= $statusClass ?>">

                            <?= $order['status'] ?>

                        </span>

                    </td>

                    <td>

                        <div class="action-group">

                            <?php if(
                                $order['status'] != 'Đã giao thành công'
                                && $order['status'] != 'Đã hủy'
                            ): ?>

                                <!-- XÁC NHẬN -->
                                <a
                                    href="?action=admin-order-confirm&id=<?= $order['id'] ?>"
                                    class="btn-action btn-confirm"
                                >

                                    Xác nhận

                                </a>

                                <!-- HỦY -->
                                <a
                                    href="?action=admin-order-cancel&id=<?= $order['id'] ?>"
                                    class="btn-action btn-cancel"
                                    onclick="return confirm('Bạn có chắc muốn hủy đơn?')"
                                >

                                    Hủy

                                </a>

                            <?php endif; ?>

                            <!-- XÓA -->
                            <a
                                href="?action=admin-order-delete&id=<?= $order['id'] ?>"
                                class="btn-action btn-delete"
                                onclick="return confirm('Bạn có chắc muốn xóa đơn hàng?')"
                            >

                                Xóa

                            </a>

                        </div>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>