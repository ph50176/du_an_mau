<style>

/* ================= AUTH PAGE ================= */

.auth-page{
    width: 100%;
    min-height: 100vh;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 30px;

    background: #f4f6f9;
}

/* ================= AUTH CONTAINER ================= */

.auth-container{
    width: 100%;
    max-width: 950px;

    background: white;

    border-radius: 24px;

    overflow: hidden;

    display: grid;
    grid-template-columns: 1fr 1fr;

    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ================= AUTH LEFT ================= */

.auth-left{
    background: linear-gradient(135deg,#f19916,#ffbf66);

    color: white;

    padding: 60px 45px;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

.auth-left-title{
    font-size: 42px;
    font-weight: bold;

    margin-bottom: 20px;
}

.auth-left-text{
    font-size: 15px;
    line-height: 1.8;
}

/* ================= AUTH RIGHT ================= */

.auth-right{
    padding: 60px 45px;
}

/* ================= TITLE ================= */

.auth-title{
    font-size: 32px;
    color: #222;

    margin-bottom: 10px;
}

.auth-subtitle{
    font-size: 14px;
    color: #777;

    margin-bottom: 35px;
}

/* ================= FORM ================= */

.auth-form-group{
    margin-bottom: 22px;
}

.auth-form-group label{
    display: block;

    margin-bottom: 8px;

    font-size: 14px;
    font-weight: 500;

    color: #444;
}

.auth-input{
    width: 100%;
    height: 52px;

    border: 1px solid #ddd;

    border-radius: 14px;

    padding: 0 16px;

    font-size: 15px;

    transition: 0.3s;
}

.auth-input:focus{
    border-color: #f19916;

    outline: none;

    box-shadow: 0 0 0 4px rgba(241,153,22,0.12);
}

/* ================= OPTIONS ================= */

.auth-options{
    display: flex;
    justify-content: flex-end;

    margin-bottom: 25px;
}

.auth-options a{
    text-decoration: none;

    color: #f19916;

    font-size: 14px;
}

.auth-options a:hover{
    text-decoration: underline;
}

/* ================= BUTTON ================= */

.auth-button{
    width: 100%;
    height: 54px;

    border: none;

    border-radius: 14px;

    background: #f19916;

    color: white;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
}

.auth-button:hover{
    background: #db8508;
}

/* ================= REGISTER ================= */

.auth-register{
    margin-top: 25px;

    text-align: center;

    font-size: 14px;

    color: #666;
}

.auth-register a{
    color: #f19916;

    text-decoration: none;

    font-weight: bold;
}

.auth-register a:hover{
    text-decoration: underline;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .auth-container{
        grid-template-columns: 1fr;
    }

    .auth-left{
        display: none;
    }

}

</style>

<div class="auth-page">

    <div class="auth-container">

        <!-- LEFT -->
        <div class="auth-left">

                <img src="assets/uploads/images.jpg" alt="Logo">
           

            <p class="auth-left-text">
                Đăng nhập để mua sắm nhanh hơn, quản lý đơn hàng
                và nhận nhiều ưu đãi hấp dẫn.
            </p>

        </div>

        <!-- RIGHT -->
        <div class="auth-right">

            <h2 class="auth-title">
                Đăng nhập
            </h2>

            <p class="auth-subtitle">
                Vui lòng nhập thông tin tài khoản của bạn
            </p>

            <form method="POST">

                <!-- EMAIL -->
                <div class="auth-form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Nhập email..."
                        class="auth-input"
                        required
                    >

                </div>

                <!-- PASSWORD -->
                <div class="auth-form-group">

                    <label>Mật khẩu</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Nhập mật khẩu..."
                        class="auth-input"
                        required
                    >

                </div>

                <!-- OPTIONS -->
                <div class="auth-options">

                    <a href="?action=forgot-password">
                        Quên mật khẩu?
                    </a>

                </div>

                <!-- BUTTON -->
                <button class="auth-button">
                    Đăng nhập
                </button>

            </form>

            <!-- REGISTER -->
            <div class="auth-register">

                Chưa có tài khoản?

                <a href="?action=register">
                    Đăng ký ngay
                </a>

            </div>

        </div>

    </div>

</div>