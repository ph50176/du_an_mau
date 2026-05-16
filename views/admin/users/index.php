<style>

.admin-user-page{
    width: 95%;
    margin: 40px auto;
    font-family: Arial, Helvetica, sans-serif;
}

/* ================= HEADER ================= */

.admin-user-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.admin-user-title{
    font-size:32px;
    font-weight:bold;
    color:#222;
}

.admin-back-btn{
    padding:12px 22px;
    background:#f19916;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-weight:bold;
    transition:0.3s;
}

.admin-back-btn:hover{
    background:#d98408;
}

/* ================= TABLE ================= */

.admin-user-table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:14px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.admin-user-table th{
    background:#f19916;
    color:white;
    padding:18px;
    text-align:center;
    font-size:15px;
}

.admin-user-table td{
    padding:18px;
    border-bottom:1px solid #eee;
    text-align:center;
    font-size:15px;
}

/* ================= ROLE ================= */

.role-admin{
    background:#e8fff0;
    color:#16a34a;
    padding:6px 14px;
    border-radius:30px;
    font-weight:bold;
    font-size:13px;
}

.role-user{
    background:#eef2ff;
    color:#4338ca;
    padding:6px 14px;
    border-radius:30px;
    font-weight:bold;
    font-size:13px;
}

/* ================= ACTION ================= */

.delete-user-btn{
    display:inline-block;
    padding:10px 18px;
    background:#ff4d4f;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-size:14px;
    font-weight:bold;
    transition:0.3s;
}

.delete-user-btn:hover{
    background:#d9363e;
    transform:translateY(-2px);
}

/* ================= EMPTY ================= */

.empty-user{
    padding:40px;
    text-align:center;
    background:white;
    border-radius:14px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    font-size:18px;
    color:#777;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .admin-user-header{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

    .admin-user-table{
        display:block;
        overflow-x:auto;
    }

}

</style>

<div class="admin-user-page">

    <!-- HEADER -->
    <div class="admin-user-header">

        <div class="admin-user-title">

            Quản lý người dùng

        </div>

        <a
            href="?action=admin"
            class="admin-back-btn"
        >
            ← Quay lại Admin
        </a>

    </div>

    <?php if(empty($users)): ?>

        <div class="empty-user">

            Chưa có người dùng nào

        </div>

    <?php else: ?>

        <!-- TABLE -->
        <table class="admin-user-table">

            <tr>

                <th>ID</th>

                <th>Tên</th>

                <th>Email</th>

                <th>Role</th>

                <th>Hành động</th>

            </tr>

            <?php foreach($users as $user): ?>

                <tr>

                    <!-- ID -->
                    <td>

                        #<?= $user['id'] ?>

                    </td>

                    <!-- NAME -->
                    <td>

                        <?= $user['name'] ?>

                    </td>

                    <!-- EMAIL -->
                    <td>

                        <?= $user['email'] ?>

                    </td>

                    <!-- ROLE -->
                    <td>

                        <?php if($user['role'] == 'admin'): ?>

                            <span class="role-admin">

                                Admin

                            </span>

                        <?php else: ?>

                            <span class="role-user">

                                User

                            </span>

                        <?php endif; ?>

                    </td>

                    <!-- ACTION -->
                    <td>

                        <a
                            href="?action=admin-user-delete&id=<?= $user['id'] ?>"
                            class="delete-user-btn"
                            onclick="return confirm('Bạn có chắc muốn xóa người dùng này?')"
                        >

                            Xóa

                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </table>

    <?php endif; ?>

</div>