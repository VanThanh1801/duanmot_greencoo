<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>viewcart</span></p>
                <h1 class="mb-0 bread">my cart</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                       
                        <tbody>

                            <?php 
								viewcart(1);
                                
								
								?>
                          

                           

                    </table>
                    

                    <?php
                    
                    if(isset($_SESSION['user']['id'] ) == 0){
                        echo '
                        <p>Đăng nhập để đặt hàng!</p>
                        <a class="" href="index.php?act=dangnhap" id="" >Đăng nhập</a>
                        
                        ';

                    }else{
                        echo '
                        <p><a href="index.php?act=bill" class="btn btn-primary py-3 px-4">Tiếp tục  đặt hàng</a></p>
                        ';
                       
                    }
                    
                    ?>

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







</body>

</html>