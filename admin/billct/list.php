<?php 
    include_once "./header.php";
    include_once "./sidebar.php";
    global $img_path;
?>

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h2>Chi tiết đơn hàng </h2>

                        </div>


                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Thông tin Đơn hàng</h6>

                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Hình sản phẩm</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tên</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Giá</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Số lượng</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tổng tièn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($billadminct as $adminbillct){
                                            extract($adminbillct);
                                            $hinhpath = "../upload/" . $img;

                                            echo'
                                            
                                            <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="'.$hinhpath.'"
                                                            weight="100px" height="100px">
                                                    </div>
                                                 
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">'.$name.'</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> '.number_format($price, 0, ',', '.').' VND</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> '.$soluong.'</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> '.number_format($thanhtien, 0, ',', '.').' VND</span>
                                            </td>
                                            
                                            
                                        </tr>
                                            
                                            ';
                                        }
                                        
                                        
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Thông tin giao hàng</h6>

                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <?php
                                    if(isset($bill) && (is_array($bill))){
                                        extract($bill);
                                    }
                                    
                                    ?>
                                 <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-bell-55 text-success text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Mã đơn hàng</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">MĐH<?= $bill['id']?></p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-bell-55 text-success text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Tên người nhận hàng</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $bill['bill_name']?></p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-html5 text-danger text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Địa chỉ nhận hàng</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $bill['bill_address']?></p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-cart text-info text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Số điện thoại 
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $bill['bill_tel']?></p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-credit-card text-warning text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Phương thức thanh toán
                                           </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= get_pttt($bill['bill_pttt'])?></p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-key-25 text-primary text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Tổng giá trị đơn hàng
                                           </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $bill['total']?></p>
                                    </div>
                                </div>
                                <div class="timeline-block">
                                    <span class="timeline-step">
                                        <i class="ni ni-money-coins text-dark text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Ngày đặt hàng</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $bill['ngaydathang']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
    <?php include_once "./footer.php" ?>
</body>

</html>