<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Sản phẩm bán chạy</span>
                    <!-- <h2 class="mb-4">Our Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php 
                    $i =0 ;
                    foreach ($spnew as $sp) {
                       extract($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $hinh=$img_path.$img;
                       if(($i==2)||($i==5)||($i==8)||($i==11)){}

                       ?>
                       
                        <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="<?= $linksp  ?>" class="img-prod"><img class="img-fluid" src="<?= $hinh ?>" alt="Colorlib Template">
                            <?php if( $saleoff != null) { ?> 
                                <span class="status"><?= $saleoff ?>%</span>
                                <div class="overlay"></div>
                                <?php } ?>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                 <h3><a href="<?= $linksp  ?>"><?= $name ?></a></h3>
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

                     <?php
                     $i+=1; 
                    }
                  
                   
                ?>
                
            </div>
        </div>
    </section>