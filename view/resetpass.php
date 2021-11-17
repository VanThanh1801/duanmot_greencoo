<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h2 class="thongbao"> <?php if (isset($thongbao) && ($thongbao != "")) {
                                                echo $thongbao;
                                        } ?>
                        </h2>
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Quên mật khẩu?</h2>
                        <p>bạn có thể khôi phục lại mật khẩu ở đây.</p>
                        <div class="panel-body">

                            <form action="index.php?act=quenmk" id="register-form" role="form" autocomplete="off"
                                class="form" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input id="email" name="email" placeholder="email address" class="form-control"
                                            type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input  class="btn btn-lg btn-primary btn-block"
                                        value="Reset Password" type="submit" name="guiemail">
                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
