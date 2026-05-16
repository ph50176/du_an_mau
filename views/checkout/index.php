<style>

.checkout-page{

    width:700px;

    margin:50px auto;

    background:white;

    padding:35px;

    border-radius:16px;

    box-shadow:0 5px 25px rgba(0,0,0,0.08);
}

.checkout-title{

    font-size:32px;

    font-weight:bold;

    margin-bottom:30px;

    text-align:center;
}

.checkout-group{

    margin-bottom:20px;
}

.checkout-label{

    display:block;

    margin-bottom:10px;

    font-weight:bold;

    color:#222;
}

.checkout-input{

    width:100%;

    height:50px;

    border:1px solid #ddd;

    border-radius:10px;

    padding:0 15px;

    font-size:15px;
}

.checkout-textarea{

    width:100%;

    height:120px;

    border:1px solid #ddd;

    border-radius:10px;

    padding:15px;

    font-size:15px;

    resize:none;
}

.checkout-btn{

    width:100%;

    height:55px;

    border:none;

    border-radius:12px;

    background:#f19916;

    color:white;

    font-size:17px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.checkout-btn:hover{

    background:#d8840d;
}

</style>

<form
    method="POST"
    action="?action=order-checkout"
    class="checkout-page"
>

    <h1 class="checkout-title">

        Thanh toán đơn hàng

    </h1>

    <!-- NAME -->
    <div class="checkout-group">

        <label class="checkout-label">

            Họ và tên

        </label>

        <input
            type="text"
            name="customer_name"
            class="checkout-input"
            required
        >

    </div>

    <!-- PHONE -->
    <div class="checkout-group">

        <label class="checkout-label">

            Số điện thoại

        </label>

        <input
            type="text"
            name="phone"
            class="checkout-input"
            required
        >

    </div>

    <!-- ADDRESS -->
    <div class="checkout-group">

        <label class="checkout-label">

            Địa chỉ

        </label>

        <textarea
            name="address"
            class="checkout-textarea"
            required
        ></textarea>

    </div>

    <!-- BUTTON -->
    <button
        type="submit"
        class="checkout-btn"
    >

        Đặt hàng

    </button>

</form>