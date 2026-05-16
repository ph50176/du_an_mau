<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, Helvetica, sans-serif;
    background:#f5f5f5;
}

/* ================= DASHBOARD ================= */

.admin-dashboard{

    width:100%;
    min-height:100vh;

    display:flex;
}

/* ================= SIDEBAR ================= */

.dashboard-sidebar{

    width:280px;

    background:#111827;

    padding:30px 20px;

    display:flex;

    flex-direction:column;

    gap:15px;
}

/* ================= LOGO ================= */

.dashboard-logo{

    color:white;

    font-size:28px;

    font-weight:bold;

    margin-bottom:30px;

    text-align:center;
}

/* ================= MENU ================= */

.dashboard-menu{

    display:flex;

    flex-direction:column;

    gap:15px;
}

.dashboard-link{

    display:flex;

    align-items:center;

    gap:15px;

    padding:16px 18px;

    border-radius:14px;

    text-decoration:none;

    color:#d1d5db;

    font-size:16px;

    transition:0.3s;
}

.dashboard-link:hover{

    background:#f19916;

    color:white;

    transform:translateX(5px);
}

/* ================= RIGHT ================= */

.dashboard-content{

    flex:1;

    padding:40px;
}

/* ================= TOP ================= */

.dashboard-top{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:35px;
}

.dashboard-title{

    font-size:34px;

    font-weight:bold;

    color:#222;
}

.dashboard-admin{

    font-size:16px;

    color:#666;
}

/* ================= STATS ================= */

.dashboard-stats{

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:25px;

    margin-bottom:40px;
}

/* ================= CARD ================= */

.stats-card{

    background:white;

    border-radius:18px;

    padding:30px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

    transition:0.3s;
}

.stats-card:hover{

    transform:translateY(-5px);

    box-shadow:0 10px 30px rgba(0,0,0,0.12);
}

.stats-icon{

    font-size:45px;

    margin-bottom:15px;
}

.stats-number{

    font-size:32px;

    font-weight:bold;

    color:#222;

    margin-bottom:8px;
}

.stats-label{

    font-size:15px;

    color:#777;
}

/* ================= WELCOME ================= */

.dashboard-welcome{

    background:white;

    border-radius:20px;

    padding:40px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.dashboard-welcome h2{

    font-size:28px;

    margin-bottom:15px;

    color:#222;
}

.dashboard-welcome p{

    font-size:16px;

    color:#666;

    line-height:1.8;
}

/* ================= RESPONSIVE ================= */

@media(max-width:1200px){

    .dashboard-stats{

        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:768px){

    .admin-dashboard{

        flex-direction:column;
    }

    .dashboard-sidebar{

        width:100%;
    }

    .dashboard-stats{

        grid-template-columns:1fr;
    }

    .dashboard-content{

        padding:20px;
    }

}

</style>

<div class="admin-dashboard">

    <!-- SIDEBAR -->
    <div class="dashboard-sidebar">

        <!-- LOGO -->
        <div class="dashboard-logo">

            ADMIN PANEL

        </div>

        <!-- MENU -->
        <div class="dashboard-menu">

            <a
                href="?action=admin-products"
                class="dashboard-link"
            >
                📦 Quản lý sản phẩm
            </a>

            <a
                href="?action=admin-categories"
                class="dashboard-link"
            >
                📂 Quản lý danh mục
            </a>

            <a
                href="?action=admin-orders"
                class="dashboard-link"
            >
                🛒 Quản lý đơn hàng
            </a>

            <a
                href="?action=admin-users"
                class="dashboard-link"
            >
                👤 Quản lý người dùng
            </a>

            <a
                href="?action=/"
                class="dashboard-link"
            >
                🏠 Về trang chủ
            </a>

            <a
                href="?action=logout"
                class="dashboard-link"
            >
                🚪 Đăng xuất
            </a>

        </div>

    </div>

    <!-- RIGHT CONTENT -->
    <div class="dashboard-content">

        <!-- TOP -->
        <div class="dashboard-top">

            <div class="dashboard-title">

                Dashboard

            </div>

            <div class="dashboard-admin">

                Xin chào Admin 👋

            </div>

        </div>

        <!-- STATS -->
        <div class="dashboard-stats">

            <!-- CARD -->
            <div class="stats-card">

                <div class="stats-icon">

                    📦

                </div>

                <div class="stats-number">

                    <?= count($products ?? []) ?>

                </div>

                <div class="stats-label">

                    Tổng sản phẩm

                </div>

            </div>

            <!-- CARD -->
            <div class="stats-card">

                <div class="stats-icon">

                    📂

                </div>

                <div class="stats-number">

                    <?= count($categories ?? []) ?>

                </div>

                <div class="stats-label">

                    Tổng danh mục

                </div>

            </div>

            <!-- CARD -->
            <div class="stats-card">

                <div class="stats-icon">

                    🛒

                </div>

                <div class="stats-number">

                    <?= count($orders ?? []) ?>

                </div>

                <div class="stats-label">

                    Tổng đơn hàng

                </div>

            </div>

            <!-- CARD -->
            <div class="stats-card">

                <div class="stats-icon">

                    👤

                </div>

                <div class="stats-number">

                    <?= count($users ?? []) ?>

                </div>

                <div class="stats-label">

                    Tổng người dùng

                </div>

            </div>

        </div>

        <!-- WELCOME -->
        <div class="dashboard-welcome">

            <h2>

                Chào mừng đến Admin Dashboard 🎉

            </h2>

            <p>

                Tại đây bạn có thể quản lý sản phẩm,
                danh mục, đơn hàng và người dùng của hệ thống.
                Chọn menu bên trái để bắt đầu thao tác.

            </p>

        </div>

    </div>

</div>