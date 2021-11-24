<div class="hero-wrap hero-bread" style="background-image: url('view/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>San pham</span></p>
                <h1 class="mb-0 bread">San pham</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
		<div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form> 
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">


                    <?php 
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm".$id;
                

                    echo '
                    <li><a href="'.$linkdm.'">'.$name.' </a></li>';
                    


                }
                ?>
                  
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Price</h3>
                    <ul class="">
                        <li type="radio"><a href="#"> 50.000VND</a></li>
                        <li type="radio"><a href="#">100.000VND </a></li>
                        <li type="radio"><a href="#">300.000VND</a></li>
                        <li type="radio"><a href="#">500.000VND </a></li>
                    </ul>
                   
                </div>

                <!-- <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">fruits</a>
                        <a href="#" class="tag-cloud-link">tomatoe</a>
                        <a href="#" class="tag-cloud-link">mango</a>
                        <a href="#" class="tag-cloud-link">apple</a>
                        <a href="#" class="tag-cloud-link">carrots</a>
                        <a href="#" class="tag-cloud-link">orange</a>
                        <a href="#" class="tag-cloud-link">pepper</a>
                        <a href="#" class="tag-cloud-link">eggplant</a>
                    </div>
                </div> -->

                <!-- <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                </div> -->
            </div>
            <div class="col-lg-8 ftco-animate">
                <div class="row">
                <?php 
                        foreach($dssp as $sp){
                            extract($sp);
                            $hinh = $img_path.$img;
                            $linhsp = "index.php?act=product-single&idsp=".$id;
                            echo'
                            <div class="col-md-4 d-flex ftco-animate">
                            <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="'.$hinh.'"
                                    alt="Colorlib Template">
                                <span class="status">'.$saleoff.'%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="'.$linhsp.'">'.$name.'</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">'.$old_price.'</span><span
                                                class="price-sale">'.$new_price.'</span></p>
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
                            
                            
                            
                            
                            ';

                    <?php foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        $hinh = $img_path . $img_cate;

                        echo '
                    <li><a href="' . $linkdm . '" >' . $name . '</a></li>
                    
                    ';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=product-single&id=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                }

            ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href=<?php echo $linksp ?> class="img-prod"><img class="img-fluid" src=<?php echo $hinh ?> alt="Colorlib Template">
                            <!-- 1. thêm 1 cột giảm giá vào dtb (Vân)
                                        2. đổ dữ liệu ra (Hiếu)  -->
                            <?php if ($saleoff != null) {
                                echo '
                                    <span class="status"> 
                                        ' . $saleoff . '%
                                        </span> ';
                            }
                            ?>



                            <!-- echo 'cột giảm giá'; -->
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="<?= $linksp ?>"><?php echo $name ?> </a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc"><?php echo $old_price ?> </span><span class="price-sale"><?php echo $new_price ?> </span></p>
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


                        }
                        
                        
                        
                        ?>
                        
                   
                       
                  
                   


                </div>
            </div> <!-- .col-md-8 -->
            

        </div>
    </div>
</section> <!-- .section -->

            ?>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
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

</body>

</html>

