<!DOCTYPE html>
<html lang="en">

<head>
    <title>GreenCoCo </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<?php 
foreach($listin4 as $in4){
    extract($in4);

?>
<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ <?= $hotline1 ?></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text"><?= $mail ?></span>

                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text"><?= $uudai1 ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">GreenCoCo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php?act=home" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item active"><a href="index.php?act=shop" class="nav-link">Cửa hàng</a></li>

                    <li class="nav-item"><a href="index.php?act=vechungtoi" class="nav-link">Về chúng tôi</a></li>
                    <!-- <li class="nav-item"><a href="index.php?act=tintuc" class="nav-link">Tin tức</a></li> -->
                    <!-- <li class="nav-item"><a href="index.php?act=dangnhap" class="nav-link">Login -->
                    <li class="nav-item"><a href="index.php?act=lienhe" class="nav-link">Liên hệ</a></li>






                  

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php?act=dangnhap" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Login</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="index.php?act=thoat">Đăng xuất</a>
                           
                            <a class="dropdown-item" href="#">Đơn hàng</a>
                            <a class="dropdown-item" href="index.php?act=dangnhap">Đăng nhập</a>
                        
                        </div>
                    </li>
                    <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                                echo '
                                <li class="nav-item user"> '.$user.'</li>
                                ';
                            ?>





                    <?php
                            } else {
                                echo " ";
                            }

                            ?>
                    <!-- <li class="nav-item"><a href="index.php?act=thoat" class="nav-link">Thoat</a></li> -->



                    <li class="nav-item cta cta-colored"><a href="index.php?act=viewcart" class="nav-link"><span
                                class="icon-shopping_cart">

                                <?php
                                if(isset($_SESSION['mycart'])){
                                    echo count($_SESSION['mycart']) + 1;
                                }
                                else{
                                    echo '0';
                                }
                                
                                
                                ?>

                            </span>



                        </a></li>
                    <li class="nav-item">
                        <form class="" action="index.php?act=sanpham" method="post">
                            <input class="search_input" type="text" placeholder="Search" aria-label="Search" name="kyw">

                        </form>
                    </li>
                    <!-- <li class="nav-item"><a href="index.php?act=dangnhap" class="nav-link">Login -->


                </ul>


            </div>
        </div>
    </nav>
    <?php } ?>