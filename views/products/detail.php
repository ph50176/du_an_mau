<h1>Chi tiết sản phẩm</h1>

<div style="display:flex; gap:30px;">

    <div style="width:400px;">

        <img
            src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
            width="100%"
            style="object-fit:cover;"
        >

    </div>

    <div>

        <h2><?= $product['name'] ?></h2>

        <h3 style="color:red;">
            <?= number_format($product['price']) ?> VNĐ
        </h3>

        <p>
            <?= $product['description'] ?>
        </p>

        <a href="?action=add-to-cart&id=<?= $product['id'] ?>">

    <button>
        Thêm vào giỏ hàng
    </button>

</a>

    </div>

</div>