<style>

/* ================= REGISTER PAGE ================= */

.register-page{
    width: 100%;
    min-height: 100vh;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 30px;

    background: linear-gradient(to right,#f8f8f8,#ececec);
}

/* ================= REGISTER CONTAINER ================= */

.register-container{
    width: 100%;
    max-width: 1000px;

    background: white;

    border-radius: 26px;

    overflow: hidden;

    display: grid;
    grid-template-columns: 1.1fr 1fr;

    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ================= LEFT ================= */

.register-left{
    background: linear-gradient(135deg,#ffb347,#f19916);

    padding: 60px 45px;

    color: white;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    text-align: center;
}

.register-left img{
    width: 180px;
    height: 180px;

    object-fit: cover;

    border-radius: 20px;

    margin-bottom: 25px;

    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.register-left h2{
    font-size: 34px;

    margin-bottom: 15px;
}

.register-left p{
    font-size: 15px;

    line-height: 1.8;

    max-width: 350px;
}

/* ================= RIGHT ================= */

.register-right{
    padding: 55px 45px;
}

/* ================= TITLE ================= */

.register-title{
    font-size: 34px;

    color: #222;

    margin-bottom: 10px;
}

.register-subtitle{
    font-size: 14px;

    color: #777;

    margin-bottom: 35px;
}

/* ================= FORM ================= */

.register-group{
    margin-bottom: 22px;
}

.register-group label{
    display: block;

    margin-bottom: 8px;

    font-size: 14px;
    font-weight: 500;

    color: #444;
}

.register-input{
    width: 100%;
    height: 54px;

    border: 1px solid #ddd;

    border-radius: 14px;

    padding: 0 16px;

    font-size: 15px;

    transition: 0.3s;
}

.register-input:focus{
    border-color: #f19916;

    outline: none;

    box-shadow: 0 0 0 4px rgba(241,153,22,0.12);
}

/* ================= BUTTON ================= */

.register-button{
    width: 100%;
    height: 55px;

    border: none;

    border-radius: 14px;

    background: #f19916;

    color: white;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
}

.register-button:hover{
    background: #db8508;
}

/* ================= LOGIN ================= */

.register-login{
    margin-top: 25px;

    text-align: center;

    font-size: 14px;

    color: #666;
}

.register-login a{
    color: #f19916;

    text-decoration: none;

    font-weight: bold;
}

.register-login a:hover{
    text-decoration: underline;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .register-container{
        grid-template-columns: 1fr;
    }

    .register-left{
        display: none;
    }

}

</style>

<div class="register-page">

    <div class="register-container">

        <!-- LEFT -->
        <div class="register-left">

            <img src="assets/uploads/images.jpg" alt="Logo">

            <h2>
                Tham gia cùng chúng tôi
            </h2>

            <p>
                Tạo tài khoản để mua sắm dễ dàng hơn,
                nhận nhiều ưu đãi và theo dõi đơn hàng nhanh chóng.
            </p>

        </div>

        <!-- RIGHT -->
        <div class="register-right">

            <h2 class="register-title">
                Đăng ký
            </h2>

            <p class="register-subtitle">
                Điền đầy đủ thông tin để tạo tài khoản mới
            </p>

            <form method="POST">

                <!-- NAME -->
                <div class="register-group">

                    <label>Họ và tên</label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Nhập họ và tên..."
                        class="register-input"
                        required
                    >

                </div>

                <!-- EMAIL -->
                <div class="register-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Nhập email..."
                        class="register-input"
                        required
                    >

                </div>

                <!-- PASSWORD -->
                <div class="register-group">

                    <label>Mật khẩu</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Nhập mật khẩu..."
                        class="register-input"
                        required
                    >

                </div>

                <!-- BUTTON -->
                <button class="register-button">
                    Đăng ký tài khoản
                </button>

            </form>

            <!-- LOGIN -->
            <div class="register-login">

                Đã có tài khoản?

                <a href="?action=login">
                    Đăng nhập ngay
                </a>

            </div>

        </div>

    </div>

</div>