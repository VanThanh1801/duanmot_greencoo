<section class="ftco-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <?php
                extract($onesp);
                $hinh = $img_path . $img;
                ?>
                <a href="<?php echo $hinh ?>" class="image-popup"> <img src=<?php echo $hinh ?> class="img-fluid item"
                        alt=""></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $name ?></h3>

                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">Xếp hạng <span style="color: #bbb;">500</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">Đã bán <span style="color: #bbb;">500</span></a>
                    </p>
                </div>
                <p class="price"><span><?php echo $new_price ?> VND/Kg </span> </p>
                <p><?php echo $mota ?></p>
                <div class="row mt-4">
                    <div class="col-md-6">

                    </div>

                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">Số lượng: </p>
                    </div>
                    <div class="input-group col-md-6 d-flex mb-3">

                        <span class="input-group-btn mr-2">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="ion-ios-remove"></i>
                            </button>
                        </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100">
                        <span class="input-group-btn ml-2">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                        </span>

                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">600 kg có sẵn</p>
                    </div>
                </div>
                <p><a href="cart.html" class="btn btn-black py-3 px-5">Thêm vào giỏ hàng</a></p>

            </div>

        </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản phẩm cùng loại</span>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            foreach ($sp_cung_loai as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 6) || ($i == 8) || ($i == 11)) {
                }

            ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href=<?= $linksp?> class="img-prod"><img class="img-fluid" src=<?=  $hinh ?> alt="">
                        <?php if ($saleoff != null) {
                                echo '
                                        <span class="status"> 
                                            ' . $saleoff . '%
                                            </span> ';
                            }
                            ?>

                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="' . $linksp . '"><?= $name ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc"><?= $old_price ?></span><span
                                        class="price-sale"><?= $new_price ?></span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                            <form action="index.php?act=addtocart" method="post">
                                 <input type="hidden" name="id" value="'.$id.'">
                                 <input type="hidden" name="name" value="'.$name.'">
                                 <input type="hidden" name="img" value="'.$img.'">
                                 <input type="hidden" name="old_price" value="'.$old_price.'">
                                 <input type="hidden" name="new_price" value="'.$new_price.'">
                                 <input type="hidden" name="sale" value="'.$saleoff.'">
         
                                 <input type="submit" class="cart" name="addtocart" value="Thêm vào giỏ hàng">
                                     
                                
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $i += 1;
            }
            ?>

        </div>
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Bình luận</span>

            </div>
        </div>
        <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluanform.php", {
                idpro: <?= $id ?>
            });
        });
        </script>
        <div id="binhluan">

        </div>




    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận ưu đãi mới nhất từ GreenCoCo</h2>
                <span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất của chúng tôi và các ưu đãi đặc
                    biệt</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Địa chỉ email">
                        <input type="submit" value="Đăng ký" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once("footer.php") ?>



<!-- loader -->
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div> -->


<script src="./js/jquery.min.js"></script>
<script src="./js/jquery-migrate-3.0.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.waypoints.min.js"></script>
<script src="./js/jquery.stellar.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/jquery.magnific-popup.min.js"></script>
<script src="./js/aos.js"></script>
<script src="./js/jquery.animateNumber.min.js"></script>
<script src="./js/bootstrap-datepicker.js"></script>
<script src="./js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="./js/google-map.js"></script>
<script src="./js/main.js"></script>

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