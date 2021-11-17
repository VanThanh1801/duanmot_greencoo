<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <h2 class="thongbao"> <?php if (isset($thongbao) && ($thongbao != "")) {
                                                echo $thongbao;
                                        } ?>
                                </h2>

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cập nhật tài khoản</p>

                                <form class="mx-1 mx-md-4" action="index.php?act=edit_taikhoan" method="POST">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Tên đăng nhập</label>
                                            <input type="text" id="form3Example1c" class="form-control" name="user" />

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <input type="password" id="form3Example4c" class="form-control"
                                                name="pass" />

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c"> Email</label>
                                            <input type="email" id="form3Example3c" class="form-control" name="email" />

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Địa chỉ</label>
                                            <input type="text" id="form3Example3c" class="form-control"
                                                name="address" />

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Số Điện thoại</label>
                                            <input type="email" id="form3Example3c" class="form-control" name="tel" />

                                        </div>
                                    </div>







                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <!-- <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" /> -->
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in
                                        </label>
                                    </div>

                                    <input type="hidden" name="id"
                                        value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" class="btn btn-primary btn-lg"></input>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
