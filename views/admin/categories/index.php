<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.admin-category-page{
    width:95%;
    margin:40px auto;
    font-family:Arial, Helvetica, sans-serif;
}

/* ================= TOP BAR ================= */

.category-top{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

    flex-wrap:wrap;

    gap:15px;
}

/* ================= TITLE ================= */

.category-title{

    font-size:32px;

    font-weight:bold;

    color:#222;
}

/* ================= BUTTON ================= */

.category-btn-group{

    display:flex;

    gap:12px;
}

.add-category-btn,
.back-admin-btn{

    padding:12px 20px;

    border-radius:12px;

    text-decoration:none;

    color:white;

    font-size:15px;

    font-weight:bold;

    transition:0.3s;
}

.add-category-btn{

    background:#f19916;
}

.add-category-btn:hover{

    background:#d8840d;

    transform:translateY(-2px);
}

.back-admin-btn{

    background:#1677ff;
}

.back-admin-btn:hover{

    background:#0958d9;

    transform:translateY(-2px);
}

/* ================= TABLE ================= */

.category-table{

    width:100%;

    border-collapse:collapse;

    background:white;

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 5px 25px rgba(0,0,0,0.08);
}

.category-table thead{

    background:#f19916;
}

.category-table th{

    padding:18px;

    color:white;

    font-size:15px;

    text-transform:uppercase;
}

.category-table td{

    padding:18px;

    text-align:center;

    border-bottom:1px solid #eee;

    font-size:15px;

    color:#333;
}

.category-table tr:hover{

    background:#fafafa;
}

/* ================= CATEGORY NAME ================= */

.category-name{

    font-weight:bold;

    color:#222;
}

/* ================= ACTION ================= */

.action-box{

    display:flex;

    justify-content:center;

    gap:10px;
}

.delete-btn{

    padding:10px 16px;

    border-radius:10px;

    background:#ff4d4f;

    color:white;

    text-decoration:none;

    font-size:14px;

    font-weight:bold;

    transition:0.3s;
}

.delete-btn:hover{

    background:#d9363e;

    transform:translateY(-2px);
}

/* ================= EMPTY ================= */

.empty-category{

    background:white;

    padding:50px;

    border-radius:18px;

    text-align:center;

    color:#888;

    font-size:20px;

    box-shadow:0 5px 25px rgba(0,0,0,0.06);
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .category-table{
        display:block;
        overflow-x:auto;
        white-space:nowrap;
    }

}

</style>

<div class="admin-category-page">

    <!-- TOP -->
    <div class="category-top">

        <h1 class="category-title">

            Quản lý danh mục

        </h1>

        <div class="category-btn-group">

            <!-- ADD -->
            <a
                href="?action=admin-category-create"
                class="add-category-btn"
            >

                + Thêm danh mục

            </a>

            <!-- BACK -->
            <a
                href="?action=admin"
                class="back-admin-btn"
            >

                ← Quay lại Admin

            </a>

        </div>

    </div>

    <?php if(empty($categories)): ?>

        <div class="empty-category">

            Chưa có danh mục nào

        </div>

    <?php else: ?>

        <!-- TABLE -->
        <table class="category-table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Tên danh mục</th>

                    <th>Hành động</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($categories as $category): ?>

                    <tr>

                        <td>

                            #<?= $category['id'] ?>

                        </td>

                        <td class="category-name">

                            <?= $category['name'] ?>

                        </td>

                        <td>

                            <div class="action-box">

                                <a
                                    href="?action=admin-category-delete&id=<?= $category['id'] ?>"
                                    class="delete-btn"
                                    onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')"
                                >

                                    Xóa

                                </a>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>