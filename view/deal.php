<?php foreach($listeve as $eve){
    extract($eve);
    ?>
<?php if($status == 1 ){  ?>
<section class="ftco-section img" style="background-image: url(upload/<?= $img ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading"><?= $title1 ?></span>
                    <h2 class="mb-4"><?= $title2 ?></h2>
                    <p><?= $intro ?></p>
                    <h3><a href="#"><?= $evepro ?></a></h3>
                    <span class="price"> Giá cũ <?= $price_old ?> - <a href="#"> Giá mới <?= $price_new ?></a>
                </span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    <?php
}

?>