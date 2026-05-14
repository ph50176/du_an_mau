<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    background: #f5f5f5;
}

/* ================= HEADER ================= */

.header{
    width: auto;
    height: 70px;
    background: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 60px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

/* ================= LEFT ================= */

.header-left{
    display: flex;
    align-items: center;
    gap: 20px;
}

/* ================= LOGO ================= */

.logo img{
    width:auto;
    height: 50px;
    object-fit: cover;
    border-radius: 1px;
    padding-right: 50px;
}

/* ================= SEARCH ================= */

.search-box{
    width: 420px;
    height: 45px;
    border: 1px solid #ddd;
    border-radius: 15px;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: white;
    placeholder: "Tìm kiếm sản phẩm...";
}

.search-box input{
    flex: 1;
    height: 100%;    border: none;
    outline: none;
    padding: 0 15px;
    font-size: 14px;
}

.search-box button{
    width: 50px;
    height: 100%;
    border: none;
    background: #e4e4e4;
    color: white;
    cursor: pointer;
    font-size: 18px;
}

/* ================= NAV ================= */

.navbar{
    display: flex;
    align-items: center;
    gap: 28px;
}

/* ================= NAV LINK ================= */

.navbar a{
    text-decoration: none;
    color: black;
    font-size: 17px;
    font-weight: 500;
    transition: 0.3s;
    position: relative;
    padding: 0px 30px 0px 20px;
}

/* Hover line */

.navbar a::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0%;
    height: 2px;
    background: #f19916;
    transition: 0.3s;
}

.navbar a:hover::after{
    width: 100%;
}

.navbar a:hover{
    color: #f19916;
}

/* ================= LOGIN BUTTON ================= */

.login-btn{
    color: black;
    padding: 10px 18px;
    border-radius: 30px;
}

.login-btn::after{
    display: none;
}

/* ================= CART ================= */

.cart-icon{
    width: 45px;
    height: 45px;
    background: #fff1db;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: 0.3s;
}

.cart-icon:hover{
    background: #fadbad;
    transform: scale(1.05);
}

.cart-icon::after{
    display: none;
}

/* ================= RESPONSIVE ================= */

@media(max-width: 768px){

    .header{
        flex-direction: column;
        height: auto;
        padding: 20px;
        gap: 20px;
    }

    .header-left{
        flex-direction: column;
    }

    .search-box{
        width: 100%;
    }

    .navbar{
        flex-wrap: wrap;
        justify-content: center;
    }

}

</style>

<header class="header">

    <!-- LEFT -->
    <div class="header-left">

        <!-- LOGO -->
        <a href="<?= BASE_URL ?>" class="logo">
            <img src="assets/uploads/logo.png" alt="">
        </a>

        <!-- SEARCH -->
        <form class="search-box">

            <input 
                type="text" 
                placeholder="Tìm kiếm sản phẩm..."
            >

            <button type="submit">
                   C
            </button>

        </form>

    </div>

    <!-- NAV -->
    <nav class="navbar">

        <a href="<?= BASE_URL ?>">
            Trang chủ
        </a>

        <a href="?action=products">
            Sản phẩm
        </a>

        <a href="?action=support">
            Hỗ trợ
        </a>

        <a href="?action=login" class="login-btn">
            Đăng nhập
        </a>

        

    </nav>
        <!-- CART -->
        <a href="?action=cart" class="cart-icon">
            🛒
        </a>

</header>

