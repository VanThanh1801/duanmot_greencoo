<div class="hero-wrap hero-bread" style="background-image: url('./view/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> </p>
                <h1 class="mb-0 bread">Hóa đơn chi tiết</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Cảm ơn</h2>
                <p>Cảm ơn quý khách đã đặt hàng!</p>

            </div>

        </div>
        <?php
        if(isset($bill) && (is_array($bill))){
            extract($bill);
        }
        
        ?>

        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Thông tin đơn hàng</h2>
                <div class="form-group">
                    <label for="">Mã đơn hàng</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="MĐH<?= $bill['id']?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày đặt hàng:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['ngaydathang']?>">
                </div>
                <div class="form-group">
                    <label for="">Tổng đơn hàng:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['total']?>">
                </div>
                <div class="form-group">
                    <label for="">phương thức thanh toán:</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= get_pttt($bill['bill_pttt'])?>">
                </div>

               
               


            </div>

        </div>
        <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h2>Thông tin đặt hàng</h2>




                <div class="form-group">
                    <label for="">Người đặt hàng</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?= $bill['bill_name']?>">
                </div>
                <div class="form-group">
                    <label for="country">Địa chỉ</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_address'] ?>">
                </div>
                <div class="form-group">
                    <label for="country">Email</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_email'] ?>">
                </div>
                <div class="form-group">
                    <label for="country">Số điện thoại</label>
                    <input type="text" class="form-control text-left px-3" placeholder=""
                        value="<?=$bill['bill_tel'] ?>">
                </div>

            </div>


        </div>
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <h1>Chi tiết Giỏ hàng</h1>
                <table class="table">

                    <tbody>

                        <?php 
								
                                bill_chi_tiet($billct);
								?>

                </table>
            </div>
        </div>


    </div>



</section>

<?php include("contacts.php") ?>







</body>

</html>