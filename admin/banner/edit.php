<?php
    include_once "./header.php";
    include_once "./sidebar.php";
?>
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <?php 
if(is_array($bn)){
    extract($bn);
}

?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>Cập nhật danh muc</h2>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="index.php?act=editban" method="post"  enctype="multipart/form-data">

                                
                                <div class="form-group">
                                    <label for="product-title">Hình ảnh</label>
                                    <input type="file" name="hinh" value="<?= $img ?>" >

                                </div>

                                <div class="form-group">
                                    <label for="category-title" class="label_title">Chữ Chính</label>
                                    <input name="text1" type="text" class="form-control"
                                        value="<?= $text1 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="category-title" class="label_title">Chữ Phụ</label>
                                    <input name="text2" type="text" class="form-control"
                                        value="<?= $text2 ?>">
                                </div>
                                <div class="form-group row">

                                        <div class="col-xs-3">
                                            <label for="product-title">Trạng Thái</label>
                                            <select name="sts" id="" class="form-control"> 
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                        </div>
                                    </div>
                                <div class="btn_button">
                                    <input type="hidden" name="id"
                                        value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">

                                    <input name="capnhat" type="submit" value="Cap nhat" class="btn_but">

                                    <a class="btn_butn" href="index.php?act=listbanner">Danh Sach</a>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
<?php include_once "./footer.php" ?>