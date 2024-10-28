
<?php
   $bottomScroll=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");
?>

<div class="brand-area p-3">
    <div class="container">
        <div class="swiper brandSwiper-active">
            <div class="swiper-wrapper">

                   <?php
                        if($bottomScroll){
                        foreach($bottomScroll as $bs){
                    ?>

                <div class="swiper-slide">
                    <img src="admin/<?= $bs['image'] ?>" alt="BTR">
                </div>

                <?php
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>


<div>
    <img src="assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
</div>