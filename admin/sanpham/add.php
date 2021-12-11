<?php include_once "./header.php";
        include_once "./sidebar.php";
?>
<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="index.php">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sản phẩm</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Danh sách sản phẩm</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form action="index.php?act=listsp" method="POST">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="kyw" placeholder="Type here...">
                            </div>
                        </form>
                </div>
                <!-- <form action="index.php?act=listsp" method="post">
                                        <input type="text" class="form-control" name="kyw" placeholder="Type here...">
                                    </form> -->
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="index.php?act=logout" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Đăng xuất</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="index.php?act=editadmin" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h2>Thêm sản phẩm</h2>
                            <!-- <button class="btn_butn">
                                <a href="index.php?act=addsp">Them San Pham</a>
                            </button> -->
                        </div>

                        <div class="product_item">

                            <h3 class="bg-success"><?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                            ?></h3>
                            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="product-title">Tên sản phẩm </label>
                                        <input type="text" name="tensp" class="form-control">

                                    </div>
                                    <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-price">Giảm giá</label>
                                            <input type="text" name="saleoff" class="form-control" size="60">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-price">Giá cũ sản phẩm</label>
                                            <input type="text" name="giaold" class="form-control" size="60">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-price">Giá sản phẩm mới nhất</label>
                                            <input type="text" name="gianew" class="form-control" size="60">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-price">Số lượng</label>
                                            <input type="text" name="sl" class="form-control" size="60">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-price">Khối lượng</label>
                                            <input type="text" name="kl" class="form-control" size="60">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product-title">Hình ảnh sản phẩm</label>
                                        <input type="file" name="hinh">

                                    </div>
                                    <div class="form-group">
                                        <label for="product-title">Mô tả sản phẩm</label>
                                        <textarea name="mota" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="product-title">Danh mục sản phẩm</label>

                                        <select name="iddm" id="" class="form-control">

                                            <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $id . '">' . $name . '</option>';
                                        }
                                        ?>


                                        </select>


                                    </div>
                                    <div class="form-group">
                                        <label for="product-title">Nhà cung cấp</label>

                                        <select name="idncc" id="" class="form-control">

                                            <?php
                                        foreach ($listnhacungcap as $nhacungcap) {
                                            extract($nhacungcap);
                                            echo '<option value="' . $id . '">' . $name . '</option>';
                                        }
                                        ?>
                                        </select>

                                    </div>
                                   










                                </div>



                                <aside id="admin_sidebar" class="col-md-4">


                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-lg" name="themmoi"
                                            value="THÊM MỚI">
                                        <!-- <input type="reset" class="btn btn-primary btn-lg" value="NHẬP LẠI"> -->
                                        <a href="index.php?act=listsp"><input type="button"
                                                class="btn btn-primary btn-lg" value="DANH SÁCH"></a>
                                    </div>


                                    <!-- Product Categories-->








                                </aside>



                            </form>



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
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
<?php include_once "./footer.php" ?>