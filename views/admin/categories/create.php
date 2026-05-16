<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.add-category-page{

    width:100%;

    min-height:80vh;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#f5f5f5;

    font-family:Arial, Helvetica, sans-serif;
}

/* ================= CARD ================= */

.add-category-card{

    width:500px;

    background:white;

    border-radius:24px;

    padding:40px;

    box-shadow:0 10px 35px rgba(0,0,0,0.08);
}

/* ================= TITLE ================= */

.add-category-title{

    font-size:32px;

    font-weight:bold;

    color:#222;

    margin-bottom:30px;

    text-align:center;
}

/* ================= FORM ================= */

.add-category-form{

    display:flex;

    flex-direction:column;

    gap:22px;
}

/* ================= INPUT ================= */

.form-group{

    display:flex;

    flex-direction:column;

    gap:10px;
}

.form-label{

    font-size:16px;

    font-weight:bold;

    color:#333;
}

.form-input{

    width:100%;

    height:55px;

    border:1px solid #ddd;

    border-radius:14px;

    padding:0 18px;

    font-size:16px;

    transition:0.3s;
}

.form-input:focus{

    border-color:#f19916;

    outline:none;

    box-shadow:0 0 0 4px rgba(241,153,22,0.15);
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

@media(max-width:576px){

    .add-category-card{

        width:95%;

        padding:25px;
    }

    .form-btn-group{

        flex-direction:column;
    }

}

</style>

<div class="add-category-page">

    <div class="add-category-card">

        <!-- TITLE -->
        <h1 class="add-category-title">

            Thêm danh mục

        </h1>

        <!-- FORM -->
        <form
            method="POST"
            class="add-category-form"
        >

            <!-- INPUT -->
            <div class="form-group">

                <label class="form-label">

                    Tên danh mục

                </label>

                <input
                    type="text"
                    name="name"
                    class="form-input"
                    placeholder="Nhập tên danh mục..."
                    required
                >

            </div>

            <!-- BUTTON -->
            <div class="form-btn-group">

                <button class="submit-btn">

                    + Thêm danh mục

                </button>

                <a
                    href="?action=admin-categories"
                    class="back-btn"
                >

                    ← Quay lại

                </a>

            </div>

        </form>

    </div>

</div>