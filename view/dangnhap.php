<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    width="500px" height="500px" alt="Phone image">
                    <!-- class="img-fluid" -->
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h2 class="thongbao"> <?php if (isset($thongbao) && ($thongbao != "")) {
                                                echo $thongbao;
                                        } ?>
                </h2>
                <form action="index.php?act=dangnhap" method="POST" id="register-form">
                    <h1>Đăng nhập tài khoản của bạn </h1>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Email address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" />

                    </div>

                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />

                    </div>
                    <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></p>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                      
                        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                    </div>
                    <!-- <p><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản?</a></p> -->

                   
                    <input type="submit" name="dangnhap" class="btn btn-primary btn-lg btn-block"
                        value="Đăng nhập"></input>


                </form>
            </div>
        </div>
    </div>
   
</section>


