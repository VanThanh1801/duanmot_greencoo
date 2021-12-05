<?php 

foreach($listin4 as $in4){
    extract($in4);


?>
<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">GreenCoCo</h2>
                    <p> <?= $uudai2 ?></p><br>
                   
                    <p> Hotline: <?= $hotline1 ?></p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Giới thiệu về GreenCoCo</a></li>
                        <li><a href="#" class="py-2 d-block">Quản lý chất lượng</a></li>
                        <li><a href="#" class="py-2 d-block">Chính sách bảo mật</a></li>
                        <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Hỗ trợ</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Hướng dẫn mua hàng</a></li>
                            <li><a href="#" class="py-2 d-block">Chính sách giao hàng</a></li>
                            <li><a href="#" class="py-2 d-block">Chính sách đổi trả</a></li>
                            <li><a href="#" class="py-2 d-block">Câu hỏi thường gặp</a></li>
                        </ul>
                        <!-- <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Câu hỏi thường gặp?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text"><?= $add ?></span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ <?= $hotline2 ?></span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?= $mail ?></</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>



<script src="./view/js/jquery-migrate-3.0.1.min.js"></script>
<script src="./view/js/popper.min.js"></script>
<script src="./view/js/bootstrap.min.js"></script>
<script src="./view/js/jquery.easing.1.3.js"></script>
<script src="./view/js/jquery.waypoints.min.js"></script>
<script src="./view/js/jquery.stellar.min.js"></script>
<script src="./view/js/owl.carousel.min.js"></script>
<script src="./view/js/jquery.magnific-popup.min.js"></script>
<script src="./view/js/aos.js"></script>
<script src="./view/js/jquery.animateNumber.min.js"></script>
<script src="./view/js/bootstrap-datepicker.js"></script>
<script src="./view/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="./view/js/google-map.js"></script>
<script src="./view/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./view/js/jquery.validate.min.js"></script>
<script>
    $("#register-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6,


               
            }
        },
        messages: {
            email: {
                required: "vui lòng nhập email của bạn",
                email: "Email bạn nhập không đúng định dạng"
            },
            password: {
                required: "vui lòng nhập password của bạn",
                password: "password tối thiểu 6 ký tự"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }


    });
    $("#dangky").validate({
        rules: {
            username: {
					required: true,
					minlength: 2
				},
            email: {
                required: true,
                email: true
            },
        
            password: {
					required: true,
					minlength: 5
				},
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
        },
        messages: {
            username: {
                required: "vui lòng nhập tên đang nhập của bạn",
                username: "Email bạn nhập không đúng định dạng"
            },
            email: "Please enter a valid email address",
            password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
        },
        submitHandler: function(form) {
            form.submit();
        }


    });

</script>

<script>
$(document).ready(function() {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

      
        e.preventDefault();
       
        var quantity = parseInt($('#quantity').val());

       

        $('#quantity').val(quantity + 1);



    });

    $('.quantity-left-minus').click(function(e) {
       
        e.preventDefault();
      
        var quantity = parseInt($('#quantity').val());

       
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });
    $('#quantity').on("change",function(e) {
     
        e.preventDefault();
      
       

        

        
    });
    var quantity = $('#quantity');
        console.log(quantity);

});
</script>
</body>

</html>
<?php } ?>