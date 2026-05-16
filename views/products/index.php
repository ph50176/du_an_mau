<style>

/* ================= TITLE ================= */

.shop-page-title{

    font-size:32px;

    font-weight:bold;

    margin:40px 0 30px;

    text-align:center;

    color:#222;
}

/* ================= LIST ================= */

.shop-grid{

    width:1350px;

    margin:0 auto 50px;

    display:grid;

    grid-template-columns:repeat(5, 1fr);

    gap:20px;
}

/* ================= CARD ================= */

.shop-card{

    background:white;

    border-radius:14px;

    overflow:hidden;

    box-shadow:0 5px 18px rgba(0,0,0,0.08);

    transition:0.3s;

    position:relative;
}

.shop-card:hover{

    transform:translateY(-5px);

    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

/* ================= IMAGE ================= */

.shop-image-box{

    position:relative;

    overflow:hidden;
}

.shop-image{

    width:100%;

    height:220px;

    object-fit:cover;

    transition:0.4s;
}

.shop-card:hover .shop-image{

    transform:scale(1.05);
}

/* ================= STAR ================= */

.shop-rating{

    position:absolute;

    top:10px;

    right:10px;

    background:white;

    padding:5px 10px;

    border-radius:30px;

    font-size:13px;

    font-weight:bold;

    color:#ffb400;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* ================= CONTENT ================= */

.shop-content{

    padding:15px;
}

/* ================= NAME ================= */

.shop-name{

    font-size:16px;

    font-weight:bold;

    color:#222;

    margin-bottom:10px;

    min-height:42px;

    text-align:center;
}

/* ================= PRICE ================= */

.shop-price{

    color:#f19916;

    font-size:20px;

    font-weight:bold;

    text-align:center;

    margin-bottom:15px;
}

/* ================= BUTTONS ================= */

.shop-actions{

    display:flex;

    gap:8px;
}

/* DETAIL BUTTON */

.shop-detail-btn{

    flex:1;

    height:40px;

    border-radius:8px;

    background:#f5f5f5;

    color:#222;

    text-decoration:none;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:13px;

    font-weight:bold;

    transition:0.3s;
}

.shop-detail-btn:hover{

    background:#ddd;
}

/* BUY BUTTON */

.shop-buy-btn{

    flex:1;

    height:40px;

    border-radius:8px;

    background:#f19916;

    color:white;

    text-decoration:none;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:13px;

    font-weight:bold;

    transition:0.3s;
}

.shop-buy-btn:hover{

    background:#d8840d;
}

/* ================= SHOW MORE ================= */

.show-more-box{

    width:100%;

    display:flex;

    justify-content:center;

    margin-bottom:60px;
}

.show-more-btn{

    padding:14px 35px;

    border:none;

    border-radius:10px;

    background:#f19916;

    color:white;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.show-more-btn:hover{

    background:#d8840d;
}

/* ================= HIDDEN ================= */

.hidden-product{

    display:none;
}

/* ================= RESPONSIVE ================= */

@media(max-width:1400px){

    .shop-grid{

        width:100%;

        padding:0 20px;

        grid-template-columns:repeat(4,1fr);
    }

}

@media(max-width:1100px){

    .shop-grid{

        grid-template-columns:repeat(3,1fr);
    }

}

@media(max-width:768px){

    .shop-grid{

        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:576px){

    .shop-grid{

        grid-template-columns:1fr;
    }

}

</style>

<!-- ================= TITLE ================= -->

<h1 class="shop-page-title">

    Sản phẩm đề xuất

</h1>

<!-- ================= LIST ================= -->

<div class="shop-grid">

    <?php foreach($products as $index => $product): ?>

        <div class="shop-card <?= $index >= 15 ? 'hidden-product extra-product' : '' ?>">

            <!-- IMAGE -->
            <a
                href="?action=product-detail&id=<?= $product['id'] ?>"
            >

                <div class="shop-image-box">

                    <img
                        src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                        class="shop-image"
                    >

                    <!-- STAR -->
                    <div class="shop-rating">

                        ⭐ 4.9

                    </div>

                </div>

            </a>

            <!-- CONTENT -->
            <div class="shop-content">

                <!-- NAME -->
                <div class="shop-name">

                    <?= $product['name'] ?>

                </div>

                <!-- PRICE -->
                <div class="shop-price">

                    <?= number_format($product['price']) ?>

                    VNĐ

                </div>

                <!-- BUTTONS -->
                <div class="shop-actions">

                    <!-- DETAIL -->
                    <a
                        href="?action=product-detail&id=<?= $product['id'] ?>"
                        class="shop-detail-btn"
                    >

                        Chi tiết

                    </a>

                    <!-- BUY -->
                    <a
                        href="?action=buy-now&id=<?= $product['id'] ?>"
                        class="shop-buy-btn"
                    >

                        Mua hàng

                    </a>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

</div>

<!-- ================= SHOW MORE ================= -->

<?php if(count($products) > 15): ?>

    <div class="show-more-box">

        <button
            class="show-more-btn"
            onclick="showMoreProducts()"
        >

            Hiển thị thêm sản phẩm

        </button>

    </div>

<?php endif; ?>

<!-- ================= SCRIPT ================= -->

<script>

function showMoreProducts(){

    const products = document.querySelectorAll('.extra-product');

    products.forEach(product => {

        product.style.display = 'block';

    });

    document.querySelector('.show-more-box').style.display = 'none';
}

</script>