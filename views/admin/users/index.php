<h1>Quản lý người dùng</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </tr>

    <?php foreach($users as $user): ?>

        <tr>

            <td><?= $user['id'] ?></td>

            <td><?= $user['name'] ?></td>

            <td><?= $user['email'] ?></td>

            <td><?= $user['role'] ?></td>

            <td>

                <a
                    href="?action=admin-user-delete&id=<?= $user['id'] ?>"
                >
                    Xóa
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

</table>