<h1>Quản lý danh mục</h1>

<a href="?action=admin-category-create">

    Thêm danh mục

</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>

        <th>ID</th>

        <th>Tên danh mục</th>

        <th>Hành động</th>

    </tr>

    <?php foreach($categories as $category): ?>

        <tr>

            <td>
                <?= $category['id'] ?>
            </td>

            <td>
                <?= $category['name'] ?>
            </td>

            <td>

                <a
                    href="?action=admin-category-delete&id=<?= $category['id'] ?>"
                >
                    Xóa
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

</table>