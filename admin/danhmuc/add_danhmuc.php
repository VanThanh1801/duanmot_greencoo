

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h2>Thêm danh muc</h2>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <form action="index.php?act=adddm" method="post">

                            <div class="form-group">
                                <label for="category-title" class="label_title">Title</label>
                                <input name="cat_title" type="text" class="form-control
                                ">
                            </div>


                            <div class="btn_button">

                                <input name="add_category" type="submit" class="btn_but">
                                <input type="reset" value="NHẬP LẠI" class="btn_but">
                                <a class="btn_butn" href="index.php?act=listdm">Danh Sach</a>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</main>