<h1>Thanh toán</h1>

<?php if($product): ?>

    <!-- MUA NGAY -->

    <div style="display:flex; gap:20px;">

        <img
            src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
            width="200"
        >

        <div>

            <h2>
                <?= $product['name'] ?>
            </h2>

            <h3 style="color:red;">

                <?= number_format($product['price']) ?>
                VNĐ

            </h3>

        </div>

    </div>

<?php else: ?>

    <!-- GIỎ HÀNG -->

    <?php

        $total = 0;

        foreach($carts as $cart):

            $total +=
                $cart['price']
                * $cart['quantity'];

    ?>

        <div style="
            display:flex;
            gap:20px;
            margin-bottom:20px;
        ">

            <img
                src="<?= BASE_ASSETS_UPLOADS . $cart['image'] ?>"
                width="120"
            >

            <div>

                <h3>
                    <?= $cart['name'] ?>
                </h3>

                <p>

                    SL:
                    <?= $cart['quantity'] ?>

                </p>

                <h4 style="color:red;">

                    <?= number_format(
                        $cart['price']
                        * $cart['quantity']
                    ) ?>

                    VNĐ

                </h4>

            </div>

        </div>

    <?php endforeach; ?>

    <h2>

        Tổng tiền:
        <?= number_format($total) ?> VNĐ

    </h2>

<?php endif; ?>

<hr>

<h2>Thông tin nhận hàng</h2>

<form method="POST" action="?action=order-checkout">

    <input
    type="text"
    name="customer_name"
    placeholder="Họ tên"
    required
    style="
        width:400px;
        height:40px;
    "
>

    <br><br>

    <input
    type="text"
    name="phone"
    placeholder="Số điện thoại"
    required
    style="
        width:400px;
        height:40px;
    "
>

    <br><br>

    <input
    type="text"
    name="address"
    placeholder="Địa chỉ"
    required
    style="
        width:400px;
        height:40px;
    "
>

    <br><br>

    <button
        style="
            width:200px;
            height:50px;
            background:#f19916;
            border:none;
            color:white;
            border-radius:10px;
            font-size:16px;
        "
    >
        Đặt hàng
    </button>

</form>