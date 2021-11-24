<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>GreenCoCo </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./view/css/animate.css">

    <link rel="stylesheet" href="./view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./view/css/magnific-popup.css">

    <link rel="stylesheet" href="./view/css/aos.css">

    <link rel="stylesheet" href="./view/css/ionicons.min.css">

    <link rel="stylesheet" href="./view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./view/css/jquery.timepicker.css">


    <link rel="stylesheet" href="./view/css/flaticon.css">
    <link rel="stylesheet" href="./view/css/icomoon.css">
    <link rel="stylesheet" href="./view/css/style.css">
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">poly@email.com</span>
							
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Giao hàng trong ngày &amp; Freeship</span>
					    </div>
				    </div>
                </div>
            </div>
        </div>
    </div> 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">GreenCoCo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="shop.html">Sữa và trứng</a>
                                    <a class="dropdown-item" href="wishlist.html">Cá và hải sản</a>
                                    <a class="dropdown-item" href="product-single.html"> Hoa quả</a>
                                    <a class="dropdown-item" href="cart.html">Hải sản</a>
                                    <a class="dropdown-item" href="checkout.html">Thịt và gia cầm</a>
                                    <a class="dropdown-item" href="cart.html"> Đồ uống</a>
                                    <a class="dropdown-item" href="checkout.html">Rau củ </a>
                    </div>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Về chúng tôi</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Tin tức</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
                    <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

                </ul>
            </div>
        </div>
    </nav>
    
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span class="mr-2"><a
                            href="index.html">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
                <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div> -->
<section class="ftco-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <?php
                extract($onesp);
                $hinh = $img_path . $img;
                ?>
                <a href="<?php echo $hinh ?>" class="image-popup"> <img src=<?php echo $hinh ?> class="img-fluid item" alt=""></a>
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
                        <!-- <div class="form-group d-flex">
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Nhỏ</option>
                                    <option value="">Vừa</option>
                                    <option value="">Lớn</option>
                                    <option value="">Lớn nhất</option>
                                </select>
                            </div>
                        </div> -->
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
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100"> 
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
                <!-- <h2 class="mb-4">Related Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            foreach ($sp_cung_loai as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanpham&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 6) || ($i == 8) || ($i == 11)) {
                }

            ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href=<?= $linksp ?> class="img-prod"><img class="img-fluid" src= <?=  $hinh ?> alt="">
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
                                    <p class="price"><span class="mr-2 price-dc"><?= $old_price ?></span><span class="price-sale"><?= $new_price ?></span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="addtocart" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i += 1;
            }
            ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <!-- <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Dâu tây</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <!-- <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Đậu xanh</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <!-- <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Bắp cải tím</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận ưu đãi mới nhất từ GreenCoCo</h2>
                <span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt</span>
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