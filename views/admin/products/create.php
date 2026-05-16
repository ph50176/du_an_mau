<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.add-product-page{

    width:100%;

    min-height:100vh;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#f5f5f5;

    padding:40px 20px;

    font-family:Arial, Helvetica, sans-serif;
}

/* ================= CARD ================= */

.add-product-card{

    width:700px;

    background:white;

    border-radius:24px;

    padding:40px;

    box-shadow:0 10px 35px rgba(0,0,0,0.08);
}

/* ================= TITLE ================= */

.add-product-title{

    font-size:34px;

    font-weight:bold;

    color:#222;

    text-align:center;

    margin-bottom:35px;
}

/* ================= FORM ================= */

.add-product-form{

    display:flex;

    flex-direction:column;

    gap:24px;
}

/* ================= FORM GROUP ================= */

.form-group{

    display:flex;

    flex-direction:column;

    gap:10px;
}

/* ================= LABEL ================= */

.form-label{

    font-size:16px;

    font-weight:bold;

    color:#333;
}

/* ================= INPUT ================= */

.form-input,
.form-textarea{

    width:100%;

    border:1px solid #ddd;

    border-radius:14px;

    padding:16px 18px;

    font-size:15px;

    transition:0.3s;
}

.form-input{

    height:55px;
}

.form-textarea{

    min-height:160px;

    resize:none;
}

.form-input:focus,
.form-textarea:focus{

    border-color:#f19916;

    outline:none;

    box-shadow:0 0 0 4px rgba(241,153,22,0.15);
}

/* ================= FILE ================= */

.file-box{

    border:2px dashed #ddd;

    border-radius:16px;

    padding:25px;

    text-align:center;

    transition:0.3s;

    background:#fafafa;
}

.file-box:hover{

    border-color:#f19916;

    background:#fffaf2;
}

.form-file{

    width:100%;
}

/* ================= BUTTON ================= */

.form-btn-group{

    display:flex;

    gap:15px;

    margin-top:10px;
}

.submit-btn,
.back-btn{

    flex:1;

    height:55px;

    border:none;

    border-radius:14px;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;

    text-decoration:none;

    display:flex;

    align-items:center;

    justify-content:center;
}

/* ADD */

.submit-btn{

    background:#f19916;

    color:white;
}

.submit-btn:hover{

    background:#d8840d;

    transform:translateY(-2px);
}

/* BACK */

.back-btn{

    background:#1677ff;

    color:white;
}

.back-btn:hover{

    background:#0958d9;

    transform:translateY(-2px);
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .add-product-card{

        width:100%;

        padding:25px;
    }

    .form-btn-group{

        flex-direction:column;
    }

}

</style>

<div class="add-product-page">

    <div class="add-product-card">

        <!-- TITLE -->
        <h1 class="add-product-title">

            Thêm sản phẩm

        </h1>

        <!-- FORM -->
        <form
            method="POST"
            enctype="multipart/form-data"
            class="add-product-form"
        >

            <!-- NAME -->
            <div class="form-group">

                <label class="form-label">

                    Tên sản phẩm

                </label>

                <input
                    type="text"
                    name="name"
                    class="form-input"
                    placeholder="Nhập tên sản phẩm..."
                    required
                >

            </div>

            <!-- PRICE -->
            <div class="form-group">

                <label class="form-label">

                    Giá sản phẩm

                </label>

                <input
                    type="number"
                    name="price"
                    class="form-input"
                    placeholder="Nhập giá sản phẩm..."
                    required
                >

            </div>

            <!-- IMAGE -->
            <div class="form-group">

                <label class="form-label">

                    Ảnh sản phẩm

                </label>

                <div class="file-box">

                    <input
                        type="file"
                        name="image"
                        class="form-file"
                        required
                    >

                </div>

            </div>

            <!-- DESCRIPTION -->
            <div class="form-group">

                <label class="form-label">

                    Mô tả sản phẩm

                </label>

                <textarea
                    name="description"
                    class="form-textarea"
                    placeholder="Nhập mô tả sản phẩm..."
                ></textarea>

            </div>

            <!-- BUTTON -->
            <div class="form-btn-group">

                <button class="submit-btn">

                    + Thêm sản phẩm

                </button>

                <a
                    href="?action=admin-products"
                    class="back-btn"
                >

                    ← Quay lại

                </a>

            </div>

        </form>

    </div>

</div>