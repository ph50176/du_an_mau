<style>



/* ================= BOTTOM BANNER ================= */

.single-banner{

    width:1350px;

    margin:10px auto;

    border-radius:10px;

    overflow:hidden;

    box-shadow:0 10px 30px rgba(0,0,0,0.12);
}

.single-banner img{

    width:100%;

    height:200px;

    object-fit:cover;

    display:block;

    transition:0.4s;
}

.single-banner:hover img{

    transform:scale(1.03);
}

/* ================= RESPONSIVE ================= */

@media(max-width:1400px){

    .single-banner{

        width:95%;
    }

}

@media(max-width:768px){

    .banner{

        height:250px;
    }

    .single-banner img{

        height:120px;
    }

}

</style>



<!-- ================= SINGLE BANNER ================= -->

<div class="single-banner">

    <img src="assets/uploads/banner22.jpg">

</div>