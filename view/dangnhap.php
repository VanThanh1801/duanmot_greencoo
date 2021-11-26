<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h2 class="thongbao"> <?php if (isset($thongbao) && ($thongbao != "")) {
                                                echo $thongbao;
                                        } ?>
                </h2>
                <form action="index.php?act=dangnhap" method="POST">
                    <h1>Đăng nhập tài khoản của bạn </h1>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Email address</label>
                        <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Password</label>
                        <input type="password" id="form1Example23" name="pass" class="form-control form-control-lg" />

                    </div>
                    <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></p>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <!-- <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3">Remember me </label>

                        </div> -->
                        <a href="index.php?act=quenmk">Forgot password?</a>
                    </div>
                    <p><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản?</a></p>

                    <!-- Submit button -->
                    <input type="submit" name="dangnhap" class="btn btn-primary btn-lg btn-block"
                        value="Đăng nhập"></input>


                </form>
            </div>
        </div>
    </div>
</section>
