<style>

/* ================= RESET ================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

/* ================= MAIN ================= */

.home-wrapper{

    width:1350px;

    margin:40px auto;

    display:flex;

    gap:25px;

    align-items:flex-start;
}


/* ================= SIDEBAR ================= */

.sidebar{

    width:260px;

    background:white;

    border-radius:10px;

    padding:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

    flex-shrink:0;

    /* GIỚI HẠN CHIỀU CAO */

    max-height:585px;

    overflow:hidden;
}

.sidebar-title{

    font-size:24px;

    font-weight:bold;

    margin-bottom:20px;

    color:#222;
}

/* ================= CATEGORY ================= */

.category-list{

    display:flex;

    flex-direction:column;

    gap:12px;
}

.category-item{

    padding:14px 16px;

    border-radius:12px;

    background:#f7f7f7;

    text-decoration:none;

    color:#222;

    font-size:16px;

    transition:0.3s;
}

.category-item:hover{

    background:#f19916;

    color:white;

    transform:translateX(5px);
}

/* ================= CONTENT ================= */

.home-content{

    flex:1;
}

/* ================= PRODUCTS ================= */

.product-list{

    display:grid;

    grid-template-columns:repeat(4, 1fr);

    gap:25px;
}

/* ================= PRODUCT CARD ================= */

.product-card{

    background:white;

    border-radius:10px;

    overflow:hidden;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

    transition:0.3s;

    position:relative;
}

.product-card:hover{

    transform:translateY(-6px);

    box-shadow:0 10px 30px rgba(0,0,0,0.12);
}

/* ================= IMAGE ================= */

.product-image-box{

    position:relative;

    overflow:hidden;
    width: 250px;
    height: 280px;
}

.product-image{

    width:100%;

    height:280px;

    object-fit:cover;

    transition:0.4s;
}

.product-card:hover .product-image{

    transform:scale(1.08);
}

/* ================= STAR ================= */

.product-rating{

    position:absolute;

    top:12px;

    right:12px;

    background:white;

    padding:6px 10px;

    border-radius:30px;

    font-size:14px;

    font-weight:bold;

    color:#ffb400;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);

    z-index:5;
}

/* ================= HOVER CONTENT ================= */

.product-overlay{

    position:absolute;

    left:0;

    bottom:0;

    width:100%;

    padding:20px;

    background:linear-gradient(
        to top,
        rgba(0,0,0,0.85),
        rgba(0,0,0,0)
    );

    color:white;

    transform:translateY(100%);

    transition:0.35s;
}

.product-card:hover .product-overlay{

    transform:translateY(0%);
}

/* ================= NAME ================= */

.product-name{

    font-size:18px;

    font-weight:bold;

    margin-bottom:10px;
}

/* ================= PRICE ================= */

.product-price{

    font-size:22px;

    font-weight:bold;

    color:#f19916;
}
/* ================= RESPONSIVE ================= */

@media(max-width:1200px){

    .home-wrapper{

        width:100%;

        padding:0 20px;
    }

    .product-list{

        grid-template-columns:repeat(3, 1fr);
    }

}

@media(max-width:992px){

    .home-wrapper{

        flex-direction:column;
    }

    .sidebar{

        width:100%;
    }

    .product-list{

        grid-template-columns:repeat(2, 1fr);
    }

}



</style>



<!-- ================= HOME ================= -->

<div class="home-wrapper">

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="sidebar-title">

            Danh mục

        </div>

        <div class="category-list">

            <?php foreach($categories as $category): ?>

                <a
                    href="?action=products&category_id=<?= $category['name'] ?>"
                    class="category-item"
                >

                    <?= $category['name'] ?>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

    <!-- PRODUCTS -->

    <div class="home-content">

        <div class="product-list">

            <?php foreach(array_slice($products, 0, 8) as $product): ?>

                <div class="product-card">

    <a
        href="?action=product-detail&id=<?= $product['id'] ?>"
    >

        <div class="product-image-box">

            <img
                src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                class="product-image"
            >

            <!-- STAR -->
            <div class="product-rating">

                ⭐ 4.9

            </div>

            <!-- HOVER CONTENT -->
            <div class="product-overlay">

                <div class="product-name">

                    <?= $product['name'] ?>

                </div>

                <div class="product-price">

                    <?= number_format($product['price']) ?>

                    VNĐ

                </div>

            </div>

        </div>

    </a>

</div>

            <?php endforeach; ?>

        </div>

    </div>

</div>