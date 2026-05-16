<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.admin-product-page{

    width:95%;

    margin:40px auto;

    font-family:Arial, Helvetica, sans-serif;
}

/* ================= TOP ================= */

.product-top{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

    flex-wrap:wrap;

    gap:15px;
}

/* ================= TITLE ================= */

.product-title{

    font-size:32px;

    font-weight:bold;

    color:#222;
}

/* ================= BUTTONS ================= */

.product-btn-group{

    display:flex;

    gap:12px;
}

.add-product-btn,
.back-admin-btn{

    padding:12px 20px;

    border-radius:12px;

    text-decoration:none;

    color:white;

    font-size:15px;

    font-weight:bold;

    transition:0.3s;
}

/* ADD */

.add-product-btn{

    background:#f19916;
}

.add-product-btn:hover{

    background:#d8840d;

    transform:translateY(-2px);
}

/* BACK */

.back-admin-btn{

    background:#1677ff;
}

.back-admin-btn:hover{

    background:#0958d9;

    transform:translateY(-2px);
}

/* ================= TABLE ================= */

.product-table{

    width:100%;

    border-collapse:collapse;

    background:white;

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 5px 25px rgba(0,0,0,0.08);
}

.product-table thead{

    background:#f19916;
}

.product-table th{

    padding:18px;

    color:white;

    font-size:15px;

    text-transform:uppercase;
}

.product-table td{

    padding:18px;

    text-align:center;

    border-bottom:1px solid #eee;

    color:#333;
}

.product-table tr:hover{

    background:#fafafa;
}

/* ================= PRODUCT NAME ================= */

.product-name{

    font-weight:bold;

    color:#222;
}

/* ================= IMAGE ================= */

.product-image{

    width:90px;

    height:90px;

    object-fit:cover;

    border-radius:12px;

    border:1px solid #eee;
}

/* ================= PRICE ================= */

.product-price{

    color:#f19916;

    font-size:17px;

    font-weight:bold;
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

.empty-product{

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

    .product-table{
        display:block;
        overflow-x:auto;
        white-space:nowrap;
    }

}
.edit-btn{

    padding:10px 16px;

    border-radius:10px;

    background:#1677ff;

    color:white;

    text-decoration:none;

    font-size:14px;

    font-weight:bold;

    transition:0.3s;
}

.edit-btn:hover{

    background:#0958d9;

    transform:translateY(-2px);
}
</style>

<div class="admin-product-page">

    <!-- TOP -->
    <div class="product-top">

        <h1 class="product-title">

            Quản lý sản phẩm

        </h1>

        <div class="product-btn-group">

            <!-- ADD -->
            <a
                href="?action=admin-product-create"
                class="add-product-btn"
            >

                + Thêm sản phẩm

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

    <?php if(empty($products)): ?>

        <div class="empty-product">

            Chưa có sản phẩm nào

        </div>

    <?php else: ?>

        <!-- TABLE -->
        <table class="product-table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Tên sản phẩm</th>

                    <th>Ảnh</th>

                    <th>Giá</th>

                    <th>Hành động</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($products as $product): ?>

                    <tr>

                        <!-- ID -->
                        <td>

                            #<?= $product['id'] ?>

                        </td>

                        <!-- NAME -->
                        <td class="product-name">

                            <?= $product['name'] ?>

                        </td>

                        <!-- IMAGE -->
                        <td>

                            <img
                                src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
                                class="product-image"
                            >

                        </td>

                        <!-- PRICE -->
                        <td class="product-price">

                            <?= number_format($product['price']) ?>

                            VNĐ

                        </td>

                        <!-- ACTION -->
                        <td>

                            
                            <div class="action-box">

                            <a
                                href="?action=admin-product-edit&id=<?= $product['id'] ?>"
                                class="edit-btn"
                            >

                                Sửa

                            </a>

                            <a
                                href="?action=admin-product-delete&id=<?= $product['id'] ?>"
                                class="delete-btn"
                                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')"
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