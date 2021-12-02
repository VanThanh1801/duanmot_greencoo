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
        <form action="index.php?act=billconfirm" method="POST">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <tbody>
                                <?php 
							
								viewcart(0);
								?>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h2>Phương thức thanh toán</h2>
                      
                       
                            <div class="form-group">
                                <input type="radio" id="age1" name="pttt" value="30">
                                <label for="age1">Thanh toán khi nhận hàng</label><br>
                                <input type="radio" id="age2" name="pttt" value="60">
                                <label for="age2">Thanh toán online</label><br>
                                <input type="radio" id="age3" name="pttt" value="100">
                                <label for="age3">Thanh toán chuyển khoản</label><br><br>

                            </div>
                   
                    </div>

                </div>
                <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h2>Thông tin đặt hàng</h2>
                        <p></p>
                       

                            <?php 
                            if(isset($_SESSION['user'])){
                                $name = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = " ";
                                $address = " ";
                                $email = " ";
                                $tel = " ";
                            }
                            
                            ?>
                            <div class="form-group">
                                <label for="">Người đặt hàng</label>
                                <input type="text" class="form-control text-left px-3" placeholder="" name="name"
                                    value="<?= $name ?>">
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
                 
                    </div>

                    <a href="index.php?act=billconfirm"><input type="submit" class="btn btn-primary py-3 px-4"
                            value="Đồng ý đặt hàng" name="checkout"></a>
                </div>

            </div>




        </form>

    </div>
</section>

<?php include_once("contacts.php") ?>
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