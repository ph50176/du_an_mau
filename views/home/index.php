<h1>Trang chủ</h1>

<div style="display:flex; gap:20px; flex-wrap:wrap;">

    <?php foreach($products as $product): ?>

        <div
            style="
                width:250px;
                border:1px solid #ccc;
                padding:10px;
            "
        >

            <img
                src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                width="100%"
                height="220"
                style="object-fit:cover;"
            >

            <h3><?= $product['name'] ?></h3>

            <p>
                <?= number_format($product['price']) ?> VNĐ
            </p>

            <a
                href="?action=product-detail&id=<?= $product['id'] ?>"
            >
                Xem chi tiết
            </a>

        </div>

    <?php endforeach; ?>

</div>