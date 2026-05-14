<style>

.footer{
    margin-top: 60px;
    background: #ffffff;
    border-top: 1px solid #e5e5e5;
}

/* ================= TOP ================= */

.footer-top{
    max-width: 1300px;
    margin: auto;
    padding: 50px 40px;

    display: grid;
    grid-template-columns: repeat(4, 1fr);

    gap: 40px;

    /* THÊM */
    text-align: center;
    align-items: start;
}
/* ================= LINE ================= */

.footer-line{
    width: 50px;
    height: 3px;
    background: #f19916;

    /* THÊM */
    margin: 0 auto 20px;
}
/* ================= TITLE ================= */

.footer-title{
    font-size: 17px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000;
}

.footer-line{
    width: 60px;
    height: 3px;
    background: #f19916;
    margin-bottom: 20px;
    padding-left: 10px;
    margin-left: 10px;
}

/* ================= TEXT ================= */

.footer-text{
    font-size: 14px;
    color: #555;
    margin-bottom: 12px;
    line-height: 1.7;
}

/* ================= LINKS ================= */

.footer-links a{
    display: block;
    text-decoration: none;
    color: #555;
    margin-bottom: 10px;
    transition: 0.3s;
    font-size: 14px;
}

.footer-links a:hover{
    color: #f19916;
    padding-left: 5px;
}

/* ================= SOCIAL ================= */

.socials{
    display: flex;
    justify-content: center; /* THÊM */
    gap: 12px;
    margin-top: 15px;
}

.socials a{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: black;
    font-size: 18px;
    transition: 0.3s;
}

.socials a:hover{
    background: #f19916;
    color: white;
    transform: translateY(-3px);
}

/* ================= BOTTOM ================= */

.footer-bottom{
    border-top: 1px solid #e5e5e5;
    padding: 20px;
    text-align: center;
    background: #fafafa;
}

.footer-bottom p{
    font-size: 14px;
    color: #666;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .footer-top{
        padding: 40px 20px;
    }

}
.footer-COLUMN_1{
    display: flex;
    flex-direction: column;
    /* gap:20px; */
    width: 200px;
}
.footer-COLUMN_1 .footer-line{
    margin: 10px 0 20px 70px;
}
.footer-COLUMN_2{
    display: flex;
    flex-direction: column;
    /* gap:20px; */
    width: 200px;
}
.footer-COLUMN_2 .footer-line{
    margin: 10px 0 20px 70px;
}
.footer-COLUMN_3{
    display: flex;
    flex-direction: column;
    /* gap:20px; */
    width: 200px;
}
.footer-COLUMN_3 .footer-line{
    margin: 10px 0 20px 70px;
}
.footer-COLUMN_4{
    display: flex;
    flex-direction: column;
    /* gap:20px; */
    width: 200px;
}
.footer-COLUMN_4 .footer-line{
    margin: 10px 0 20px 70px;
}

</style>

<footer class="footer">

    <!-- TOP -->
    <div class="footer-top">

        <!-- COLUMN 1 -->
        <div class="footer-COLUMN_1">

            <h3 class="footer-title">
                GIỚI THIỆU
            </h3>

            <div class="footer-line"></div>

            <p class="footer-text">
                Chuyên cung cấp phụ kiện điện thoại, tai nghe, sạc nhanh,
                ốp lưng chính hãng chất lượng cao.
            </p>

        </div>

        <!-- COLUMN 2 -->
        <div class="footer-COLUMN_2">

            <h3 class="footer-title">
                DANH MỤC
            </h3>

            <div class="footer-line"></div>

            <div class="footer-links">

                <a href="">
                    Trang chủ
                </a>

                <a href="">
                    Sản phẩm
                </a>

                <a href="">
                    Hỗ trợ
                </a>

                <a href="">
                    Liên hệ
                </a>

            </div>

        </div>

        <!-- COLUMN 3 -->
        <div class="footer-COLUMN_3">

            <h3 class="footer-title">
                LIÊN HỆ
            </h3>

            <div class="footer-line"></div>

            <p class="footer-text">
                📍 Hà Nội, Việt Nam
            </p>

            <p class="footer-text">
                📞 0987 654 321
            </p>

            <p class="footer-text">
                ✉ support@gmail.com
            </p>

        </div>

        <!-- COLUMN 4 -->
        <div class="footer-COLUMN_4">

            <h3 class="footer-title">
                THEO DÕI CHÚNG TÔI
            </h3>

            <div class="footer-line"></div>

            <div class="socials">

                <a href="">
                    f
                </a>

                <a href="">
                    ▶
                </a>

                <a href="">
                    🐦
                </a>

                <a href="">
                    📸
                </a>

            </div>

        </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

        <p>
            Copyright © 2026 - My Shop | All Rights Reserved
        </p>

    </div>

</footer>