<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> </p>
                <h1 class="mb-0 bread">Hóa đơn chi tiết</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Cảm ơn</h2>
                <p>Cảm ơn quý khách đã đặt hàng!</p>

            </div>

        </div>
        <?php
        if(isset($bill) && (is_array($bill))){
            extract($bill);
        }
        
        ?>

        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Thông tin đơn hàng</h2>
                <div class="form-group">
                    <label for="">Mã đơn hàng</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['id']?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày đặt hàng:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['ngaydathang']?>">
                </div>
                <div class="form-group">
                    <label for="">Tổng đơn hàng:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['total']?>">
                </div>
                <div class="form-group">
                    <label for="">phương thức thanh toán:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['bill_pttt']?>">
                </div>

               
               


            </div>

        </div>
        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Thông tin đặt hàng</h2>




                <div class="form-group">
                    <label for="">Người đặt hàng</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['bill_name']?>">
                </div>
                <div class="form-group">
                    <label for="country">Địa chỉ</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_address'] ?>">
                </div>
                <div class="form-group">
                    <label for="country">Email</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_email'] ?>">
                </div>
                <div class="form-group">
                    <label for="country">Số điện thoại</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_tel'] ?>">
                </div>

            </div>


        </div>
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <h1>Chi tiết Giỏ hàng</h1>
                <table class="table">

                    <tbody>

                        <?php 
								
                                bill_chi_tiet($billct);
								?>

                </table>
            </div>
        </div>


    </div>



</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once("footer.php") ?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script>
$(document).ready(function() {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

    });

    $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });

});
</script>

</body>

</html>