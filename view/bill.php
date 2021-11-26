<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> </p>
                <h1 class="mb-0 bread">Giỏ hàng</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <!-- <th>&nbsp;</th> -->
                                <th>Hình sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Gía mới</th>
                                <th>Giá cũ</th>
                                <th>Sale</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
								
								viewcart();
								?>

                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h2>Phương thức thanh toán</h2>
                    <tr>

                    </tr>

                    <form action="#" class="info">
                        <div class="form-group">
                            <input type="radio" id="age1" name="age" value="30">
                            <label for="age1">Thanh toán khi nhận hàng</label><br>
                            <input type="radio" id="age2" name="age" value="60">
                            <label for="age2">Thanh toán online</label><br>
                            <input type="radio" id="age3" name="age" value="100">
                            <label for="age3">Thanh toán chuyển khoản</label><br><br>
                          
                        </div>
                    </form>
                </div>
               
            </div>
            <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h2>Thông tin đặt hàng</h2>
                    <p></p>
                    <form action="#" class="info">

                        <?php 
                            if(isset($_SESSION['user'])){
                                $name = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = " ";
                                $name = " ";
                                $name = " ";
                                $name = " ";
                            }
                            
                            ?>
                        <div class="form-group">
                            <label for="">Người đặt hàng</label>
                            <input type="text" class="form-control text-left px-3" placeholder="" name="name"
                                value="<?=$name ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Địa chỉ</label>
                            <input type="text" class="form-control text-left px-3" placeholder="" name="address"
                                value="<?=$address ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Email</label>
                            <input type="text" class="form-control text-left px-3" placeholder="" name="email"
                                value="<?=$email ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Số điện thoại</label>
                            <input type="text" class="form-control text-left px-3" placeholder="" name="tel"
                                value="<?=$tel ?>">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Tiếp tục đặt hàng</a></p>
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