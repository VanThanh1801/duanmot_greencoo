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

                        }
                        
                        
                        
                        ?>
                        
                   
                       
                  
                   

                </div>
            </div> <!-- .col-md-8 -->
            

        </div>
    </div>
</section> <!-- .section -->