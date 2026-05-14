<h1>Giỏ hàng</h1>

<?php if(empty($carts)): ?>

    <h3>Giỏ hàng trống</h3>

<?php else: ?>

    <table border="1" cellpadding="10" width="100%">

        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>

        <?php

            $total = 0;

            foreach($carts as $cart):

                $subtotal =
                    $cart['price']
                    * $cart['quantity'];

                $total += $subtotal;

        ?>

            <tr>

                <td width="120">

                    <img
                        src="<?= BASE_ASSETS_UPLOADS . $cart['image'] ?>"
                        width="100"
                    >

                </td>

                <td>
                    <?= $cart['name'] ?>
                </td>

                <td>
                    <?= number_format($cart['price']) ?>
                    VNĐ
                </td>

                <td>
                    <?= $cart['quantity'] ?>
                </td>

                <td>
                    <?= number_format($subtotal) ?>
                    VNĐ
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

    <h2>

        Tổng tiền:
        <?= number_format($total) ?> VNĐ

    </h2>

    <br>

    <a href="?action=checkout">

        <button
            style="
                width:220px;
                height:50px;
                background:#f19916;
                color:white;
                border:none;
                border-radius:10px;
                font-size:16px;
            "
        >
            Thanh toán
        </button>

    </a>

<?php endif; ?>