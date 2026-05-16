<style>

.edit-product-page{

    width:600px;

    margin:50px auto;

    background:white;

    padding:35px;

    border-radius:18px;

    box-shadow:0 5px 25px rgba(0,0,0,0.08);

    font-family:Arial, Helvetica, sans-serif;
}

/* TITLE */

.edit-title{

    font-size:30px;

    font-weight:bold;

    margin-bottom:30px;

    color:#222;

    text-align:center;
}

/* FORM */

.edit-form{

    display:flex;

    flex-direction:column;

    gap:20px;
}

.edit-input,
.edit-textarea{

    width:100%;

    padding:15px;

    border:1px solid #ddd;

    border-radius:12px;

    font-size:15px;

    outline:none;

    transition:0.3s;
}

.edit-input:focus,
.edit-textarea:focus{

    border-color:#f19916;
}

/* TEXTAREA */

.edit-textarea{

    height:140px;

    resize:none;
}

/* IMAGE */

.old-image{

    width:160px;

    height:160px;

    object-fit:cover;

    border-radius:14px;

    border:1px solid #eee;
}

/* BUTTON */

.edit-btn{

    height:50px;

    border:none;

    border-radius:12px;

    background:#f19916;

    color:white;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.edit-btn:hover{

    background:#d8840d;
}

/* BACK */

.back-btn{

    display:inline-block;

    margin-top:20px;

    text-decoration:none;

    color:#1677ff;

    font-weight:bold;
}

</style>

<div class="edit-product-page">

    <div class="edit-title">

        Sửa sản phẩm

    </div>

    <form
        method="POST"
        enctype="multipart/form-data"
        class="edit-form"
    >

        <!-- NAME -->
        <input
            type="text"
            name="name"
            class="edit-input"
            value="<?= $product['name'] ?>"
            placeholder="Tên sản phẩm"
        >

        <!-- PRICE -->
        <input
            type="number"
            name="price"
            class="edit-input"
            value="<?= $product['price'] ?>"
            placeholder="Giá sản phẩm"
        >

        <!-- IMAGE -->
        <img
            src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>"
            class="old-image"
        >

        <input
            type="file"
            name="image"
            class="edit-input"
        >

        <!-- DESCRIPTION -->
        <textarea
            name="description"
            class="edit-textarea"
            placeholder="Mô tả sản phẩm"
        ><?= $product['description'] ?></textarea>

        <!-- BUTTON -->
        <button class="edit-btn">

            Cập nhật sản phẩm

        </button>

    </form>

    <a
        href="?action=admin-products"
        class="back-btn"
    >

        ← Quay lại

    </a>

</div>