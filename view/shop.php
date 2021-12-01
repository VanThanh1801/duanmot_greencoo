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

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Danh mục sản phẩm</h3>
                    <ul class="categories">


                        <?php 
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                

                    echo '
                    <li><a href="'.$linkdm.'">'.$name.' </a></li>';
                    


                }
                ?>

                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Sắp xếp theo giá sản phẩm</h3>
                    <label class="form-label" for="customRange1">Example range</label>
                    <div class="range">
                        <input type="range" class="form-range" id="customRange1" />
                    </div>

                </div>
                <div class="sidebar-box ftco-animate">
                    <form class="woocommerce-ordering" method="get">
                        <span>Sort by: </span>
                        <div class="SumoSelect sumo_orderby" tabindex="0"><select name="orderby"
                                class="orderby SumoUnder" aria-label="Shop order" tabindex="-1">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sắp xếp theo mới nhất</option>
                                <option value="rating">Sắp xếp theo giá từ cao đến thấp</option>
                                <option value="date">Sắp xếp theo từ thấp đến cao</option>
                               
                            </select>
                           
                          
                        </div>
                        <input type="hidden" name="paged" value="1">
                        <input type="hidden" name="q" value="/greenmart_fresh/product-tag/frozen/">
                    </form>

                </div>





            </div>
            <div class="col-lg-8 ftco-animate">


                <div class="row">
                    <?php 
                        foreach($dssp as $sp){
                            extract($sp);
                            $hinh = $img_path.$img;

                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            echo'
                            <div class="col-md-4 d-flex ftco-animate">
                            <div class="product">
                            <a href="'.$linksp.'" class="img-prod"><img class="img-fluid" src="'.$hinh.'"
                                    alt="Colorlib Template">
                                <span class="status">'.$saleoff.'%</span>

                                <div class="overlay"></div>
                                <?php } ?>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">

                                <h3><a href="'.$linksp.'">'.$name.'</a></h3>
                                <div class="d-flex">

                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc"><?=$old_price ?></span><span
                                                class="price-sale"><?= $new_price ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                    <form action="index.php?act=addtocart" method="post">
                                 <input type="hidden" name="id" value="<?= $id ?>">
                                 <input type="hidden" name="name" value="<?= $name ?>">
                                 <input type="hidden" name="img" value="<?= $img ?>">
                                 <input type="hidden" name="old_price" value="<?=$old_price ?>">
                                 <input type="hidden" name="new_price" value="<?= $new_price ?>">
                                 <input type="hidden" name="sale" value="<?= $saleoff ?>">
         
                                 <input type="submit" class="cart" name="addtocart" value="Thêm vào giỏ hàng">
                                     
                                
                             </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        ';
                            
                            
                            
                            
                          
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("contacts.php") ?>
<?php include_once("footer.php") ?>






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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="./js/google-map.js"></script>
<script src="./js/main.js"></script>

</body>

</html>