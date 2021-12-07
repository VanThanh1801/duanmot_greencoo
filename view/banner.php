
<section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <?php
                foreach ($listban as $ban){
                    extract($ban);
            ?>
            
            <div class="slider-item" style="background-image: url(<?php if($status == 1){
                echo "upload/$img";} ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2"><?php if($status == 1){echo "$text1";}?></h1>
                            <h2 class="subheading mb-4"><?php if($status == 1){echo "$text2";}?></h2>
                            <p><a href="#" class="btn btn-primary">Xem chi tiết</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
                <!-- <div class="slider-item" style="background-image: url(./view/images/bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% tươi &amp; Thức ăn hữu cơ</h1>
                            <h2 class="subheading mb-4">Chúng tôi cung cấp rau hữu cơ &amp; Trái cây</h2>
                            <p><a href="#" class="btn btn-primary">Xem Chi tiết</a></p>
                        </div>

                    </div>
                </div>
            </div> -->
        </div>
    </section>
 