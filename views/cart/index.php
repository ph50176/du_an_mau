<style>

/* ================= PAGE ================= */

.cart-page{

    width:1350px;

    margin:40px auto;
}

/* ================= TITLE ================= */

.cart-title{

    font-size:32px;

    font-weight:bold;

    margin-bottom:30px;

    color:#222;
}

/* ================= EMPTY ================= */

.cart-empty{

    font-size:22px;

    text-align:center;

    padding:80px 0;

    color:#777;
}

/* ================= TABLE ================= */

.cart-table{

    width:100%;

    border-collapse:collapse;

    background:white;

    border-radius:14px;

    overflow:hidden;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.cart-table th{

    background:#f19916;

    color:white;

    padding:18px;

    font-size:15px;
}

.cart-table td{

    padding:18px;

    text-align:center;

    border-bottom:1px solid #eee;
}

/* ================= IMAGE ================= */

.cart-image{

    width:90px;

    height:90px;

    object-fit:cover;

    border-radius:10px;
}

/* ================= NAME ================= */

.cart-name{

    font-size:16px;

    font-weight:bold;

    color:#222;
}

/* ================= PRICE ================= */

.cart-price{

    color:#f19916;

    font-weight:bold;
}

/* ================= QUANTITY ================= */

.quantity-box{

    display:flex;

    justify-content:center;

    align-items:center;

    gap:10px;
}

.quantity-btn{

    width:32px;

    height:32px;

    border:none;

    border-radius:6px;

    background:#f1f1f1;

    cursor:pointer;

    font-size:18px;

    transition:0.3s;
}

.quantity-btn:hover{

    background:#f19916;

    color:white;
}

.quantity-input{

    width:55px;

    height:32px;

    text-align:center;

    border:1px solid #ddd;

    border-radius:6px;
}

/* ================= DELETE ================= */

.delete-btn{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    width:38px;

    height:38px;

    border-radius:8px;

    background:#ff4d4f;

    color:white;

    text-decoration:none;

    transition:0.3s;
}

.delete-btn:hover{

    background:#d9363e;
}

/* ================= FOOTER ================= */

.cart-footer{

    margin-top:30px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    flex-wrap:wrap;

    gap:20px;
}

/* ================= TOTAL ================= */

.cart-total{

    font-size:28px;

    font-weight:bold;

    color:#222;
}

.cart-total span{

    color:#f19916;
}

/* ================= CHECKOUT ================= */

.checkout-btn{

    width:240px;

    height:55px;

    border:none;

    border-radius:12px;

    background:#f19916;

    color:white;

    font-size:17px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.checkout-btn:hover{

    background:#d8840d;
}
.success-alert{

    width:100%;

    background:#d4edda;

    color:#155724;

    padding:18px;

    border-radius:10px;

    margin-bottom:25px;

    font-size:16px;

    font-weight:bold;

    border:1px solid #c3e6cb;

    animation:showAlert 0.4s ease;
}

@keyframes showAlert{

    from{
        opacity:0;
        transform:translateY(-10px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}
</style>
<?php if(isset($_SESSION['success'])): ?>

    <div class="success-alert">

        <?= $_SESSION['success'] ?>

    </div>

    <?php unset($_SESSION['success']); ?>

<?php endif; ?>
<div class="cart-page">

    <!-- TITLE -->
    <h1 class="cart-title">

        Giỏ hàng của bạn

    </h1>

    <?php if(empty($carts)): ?>

        <div class="cart-empty">

            Giỏ hàng đang trống

        </div>

    <?php else: ?>

        <form method="POST" action="?action=checkout">

            <table class="cart-table">

                <tr>

                    <th>

                        Chọn

                    </th>

                    <th>

                        Ảnh

                    </th>

                    <th>

                        Tên sản phẩm

                    </th>

                    <th>

                        Giá

                    </th>

                    <th>

                        Số lượng

                    </th>

                    <th>

                        Thành tiền

                    </th>

                    <th>

                        Xóa

                    </th>

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

                        <!-- CHECKBOX -->
                        <td>

                            <input
                                type="checkbox"
                                name="selected_products[]"
                                value="<?= $cart['id'] ?>"
                                checked
                            >

                        </td>

                        <!-- IMAGE -->
                        <td>

                            <img
                                src="<?= BASE_ASSETS_UPLOADS . $cart['image'] ?>"
                                class="cart-image"
                            >

                        </td>

                        <!-- NAME -->
                        <td>

                            <div class="cart-name">

                                <?= $cart['name'] ?>

                            </div>

                        </td>

                        <!-- PRICE -->
                        <td>

                            <div class="cart-price">

                                <?= number_format($cart['price']) ?>

                                VNĐ

                            </div>

                        </td>

                        <!-- QUANTITY -->
                        <td>

                            <div class="quantity-box">

                                <!-- MINUS -->
                                <a
                                    href="?action=decrease-cart&id=<?= $cart['id'] ?>"
                                >

                                    <button
                                        type="button"
                                        class="quantity-btn"
                                    >

                                        -

                                    </button>

                                </a>

                                <!-- INPUT -->
                                <input
                                    type="text"
                                    value="<?= $cart['quantity'] ?>"
                                    class="quantity-input"
                                    readonly
                                >

                                <!-- PLUS -->
                                <a
                                    href="?action=increase-cart&id=<?= $cart['id'] ?>"
                                >

                                    <button
                                        type="button"
                                        class="quantity-btn"
                                    >

                                        +

                                    </button>

                                </a>

                            </div>

                        </td>

                        <!-- SUBTOTAL -->
                        <td>

                            <div class="cart-price">

                                <?= number_format($subtotal) ?>

                                VNĐ

                            </div>

                        </td>

                        <!-- DELETE -->
                        <td>

                            <a
                                href="?action=delete-cart&id=<?= $cart['id'] ?>"
                                class="delete-btn"
                            >

                                🗑

                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </table>

            <!-- FOOTER -->
            <div class="cart-footer">

                <!-- TOTAL -->
                <div class="cart-total">

                    Tổng tiền:

                    <span>

                        <?= number_format($total) ?>

                        VNĐ

                    </span>

                </div>

                <!-- CHECKOUT -->
                <button
                    type="submit"
                    class="checkout-btn"
                >

                    Thanh toán sản phẩm đã chọn

                </button>

            </div>

        </form>

    <?php endif; ?>

</div>