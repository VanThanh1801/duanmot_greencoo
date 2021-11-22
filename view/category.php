<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="row">
                <?php 
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm".$id;
                    $hinh = $img_path.$img_cate;

                    echo '
                    
                    <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url('.$hinh.');" weight="50px" height="50px">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="'.$linkdm.'">'.$name.'</a></h2>
                        </div>
                    </div>

                </div>
                    
                    
                    ';

                }
                
                
                ?>
                    
                    
                </div>




            </div>
        </div>
    </div>
</section>


