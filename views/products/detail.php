<style>

/* ================= PAGE TITLE ================= */

.product-header{
    max-width: 1350px;
    margin: 40px auto 20px;
    padding: 0 20px;
    display:flex;
}

.product-header h1{
    font-size: 38px;
    color: #0b0404;
    margin-bottom: 10px;
}

.product-header p{
    color: #291e1e;
    font-size:26px;
    margin-left: 20px;
    margin-top: 10px;
}

/* ================= DETAIL PAGE ================= */

.product-page{
    max-width: 1350px;
    margin: 0 auto 50px;
    padding: 0 20px;
}

/* ================= BOX ================= */

.product-box{
    background: #fff;

    border-radius: 24px;

    padding: 40px;

    display: flex;
    gap: 60px;

    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

/* ================= IMAGE ================= */

.product-image{
    width: 480px;
    flex-shrink: 0;
}

.product-image img{
    width: 100%;
    height: 500px;

    object-fit: cover;

    border-radius: 20px;

    border: 1px solid #eee;
}

/* ================= INFO ================= */

.product-info{
    flex: 1;
}

/* ================= NAME ================= */

.product-name{
    font-size: 38px;
    font-weight: bold;

    color: #222;

    margin-bottom: 18px;
}

/* ================= META ================= */

.product-meta{
    display: flex;
    align-items: center;
    gap: 20px;

    flex-wrap: wrap;

    margin-bottom: 25px;
}

.product-rating{
    color: #ffb400;

    font-size: 18px;

    font-weight: bold;
}

.product-sold{
    font-size: 15px;

    color: #666;
}

/* ================= PRICE ================= */

.product-price{
    font-size: 34px;

    font-weight: bold;

    color: #f19916;

    margin-bottom: 30px;
}

/* ================= OPTION ================= */

.product-option{
    margin-bottom: 25px;
}

.product-option-title{
    font-size: 16px;

    font-weight: bold;

    margin-bottom: 12px;

    color: #222;
}

/* ================= COLOR ================= */

.color-list{
    display: flex;
    gap: 12px;
}

.color-item{
    width: 38px;
    height: 38px;

    border-radius: 50%;

    border: 2px solid #ddd;

    cursor: pointer;

    transition: 0.3s;
}

.color-item:hover{
    transform: scale(1.08);

    border-color: #f19916;
}

/* ================= QUANTITY ================= */

.quantity-box{
    display: flex;
    align-items: center;

    gap: 15px;
}

.quantity-btn{
    width: 38px;
    height: 38px;

    border: none;

    border-radius: 10px;

    background: #f1f1f1;

    font-size: 18px;

    cursor: pointer;

    transition: 0.3s;
}

.quantity-btn:hover{
    background: #f19916;

    color: white;
}

.quantity-input{
    width: 70px;
    height: 38px;

    border: 1px solid #ddd;

    border-radius: 10px;

    text-align: center;

    font-size: 16px;
}

/* ================= BUTTONS ================= */

.product-actions{
    display: flex;
    gap: 18px;

    margin: 35px 0;

    flex-wrap: wrap;
}

/* BUY NOW */

.buy-btn{
    height: 56px;

    padding: 0 40px;

    border-radius: 14px;

    border: none;

    background: #f19916;

    color: white;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
}

.buy-btn:hover{
    background: #db8508;
}

/* CART */

.cart-btn{
    height: 56px;

    padding: 0 40px;

    border-radius: 14px;

    border: 2px solid #f19916;

    background: white;

    color: #f19916;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;

    text-decoration: none;

    display: flex;
    align-items: center;
    justify-content: center;
}

.cart-btn:hover{
    background: #fff4e7;
}

/* ================= DESCRIPTION ================= */

.product-description-title{
    font-size: 22px;

    font-weight: bold;

    margin-bottom: 15px;

    color: #222;
}

.product-description{
    font-size: 15px;

    line-height: 1.9;

    color: #555;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    .product-box{
        flex-direction: column;
    }

    .product-image{
        width: 100%;
    }

    .product-image img{
        height: auto;
    }

}

</style>

<!-- ================= HEADER ================= -->

<div class="product-header">

    <h1>
        Chi tiết sản phẩm 
    </h1>

    <p>
        <?= $product['name'] ?>
    </p>

</div>

<!-- ================= PRODUCT ================= -->

<div class="product-page">

    <div class="product-box">

        <!-- IMAGE -->
        <div class="product-image">

            <img
                src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                alt=""
            >

        </div>

        <!-- INFO -->
        <div class="product-info">

            <!-- NAME -->
            <h1 class="product-name">
                <?= $product['name'] ?>
            </h1>

            <!-- META -->
            <div class="product-meta">

                <div class="product-rating">
                    ⭐⭐⭐⭐⭐ 4.9
                </div>

                <div class="product-sold">
                    Đã bán: 1.2k+
                </div>

            </div>

            <!-- PRICE -->
            <div class="product-price">
                <?= number_format($product['price']) ?> VNĐ
            </div>

            <!-- COLOR -->
            <div class="product-option">

                <div class="product-option-title">
                    Màu sắc
                </div>

                <div class="color-list">

                    <div class="color-item" style="background:black;"></div>

                    <div class="color-item" style="background:red;"></div>

                    <div class="color-item" style="background:blue;"></div>

                    <div class="color-item" style="background:silver;"></div>

                </div>

            </div>

            <!-- QUANTITY -->
            <div class="product-option">

                <div class="product-option-title">
                    Số lượng
                </div>

                <div class="quantity-box">

                    <button class="quantity-btn">
                        -
                    </button>

                    <input
                        type="text"
                        value="1"
                        class="quantity-input"
                    >

                    <button class="quantity-btn">
                        +
                    </button>

                </div>

            </div>

            <!-- BUTTONS -->
            <div class="product-actions">

                <a
                    href="?action=checkout&id=<?= $product['id'] ?>"
                >

                    <button class="buy-btn">
                        Mua ngay
                    </button>

                </a>

                <a
                    href="?action=add-to-cart&id=<?= $product['id'] ?>"
                    class="cart-btn"
                >
                    🛒 Thêm vào giỏ hàng
                </a>

            </div>

            <!-- DESCRIPTION -->
            <div class="product-description-title">
                Mô tả sản phẩm
            </div>

            <div class="product-description">
                <?= $product['description'] ?>
            </div>

        </div>

    </div>

</div>