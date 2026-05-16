<style>

/* ================= BANNER ================= */

.banner{

    width:100%;

    height:450px;

    margin:20px auto;

    border-radius:8px;

    overflow:hidden;

    position:relative;

    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

.slides{

    width:200%;

    height:100%;

    display:flex;

    animation:slideBanner 8s infinite;
}

.slide{

    width:50%;

    height:100%;
}

.slide img{

    width:100%;

    height:100%;

    object-fit:cover;
}

/* ================= ANIMATION ================= */

@keyframes slideBanner{

    0%{
        transform:translateX(0%);
    }

    45%{
        transform:translateX(0%);
    }

    50%{
        transform:translateX(-50%);
    }

    95%{
        transform:translateX(-50%);
    }

    100%{
        transform:translateX(0%);
    }

}

@media(max-width:576px){

    .banner{

        height:250px;
    }

}

</style>

<!-- ================= BANNER ================= -->

<div class="banner">

    <div class="slides">

        <div class="slide">

            <img src="assets/uploads/banner1.png">

        </div>

        <div class="slide">

            <img src="assets/uploads/banner2.png">

        </div>

    </div>

</div>