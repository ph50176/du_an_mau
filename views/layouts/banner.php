<style>

.banner{
    width: 100%;
    max-width: 1400px;
    height: 500px;
    margin: 30px auto;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

/* ================= SLIDER ================= */

.slides{
    width: 200%;
    height: 100%;
    display: flex;
    animation: slideBanner 8s infinite;
}

.slide{
    width: 50%;
    height: 100%;
}

.slide img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* ================= ANIMATION ================= */

@keyframes slideBanner{

    0%{
        transform: translateX(0%);
    }

    45%{
        transform: translateX(0%);
    }

    50%{
        transform: translateX(-50%);
    }

    95%{
        transform: translateX(-50%);
    }

    100%{
        transform: translateX(0%);
    }

}

/* ================= BUTTON ================= */

.banner-btn{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgba(0,0,0,0.4);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    user-select: none;
}

.prev{
    left: 15px;
}

.next{
    right: 15px;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

    .banner{
        height: 250px;
        border-radius: 12px;
    }

}

</style>

<!-- ================= BANNER ================= -->

<div class="banner">

    <div class="slides">

        <!-- IMAGE 1 -->
        <div class="slide">
            <img src="banner1.jpg" alt="">
        </div>

        <!-- IMAGE 2 -->
        <div class="slide">
            <img src="banner2.jpg" alt="">
        </div>

    </div>

    <!-- BUTTON -->
    <div class="banner-btn prev">
        ❮
    </div>

    <div class="banner-btn next">
        ❯
    </div>

</div>