<h1>Quản lý sản phẩm</h1>

<a href="?action=admin-product-create">
    Thêm sản phẩm
</a>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Action</th>
    </tr>

    <?php foreach($products as $product): ?>

        <tr>

            <td>
                <?= $product['id'] ?>
            </td>

            <td>
                <?= $product['name'] ?>
            </td>

            <td>

                <img
                    src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                    width="100"
                >

            </td>

            <td>
                <?= number_format($product['price']) ?>
            </td>

            <td>

                <a
                    href="?action=admin-product-delete&id=<?= $product['id'] ?>"
                >
                    Xóa
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

</table>