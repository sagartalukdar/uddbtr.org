<?php include("include/head.php");
include('classes/Crud.php');
$crud=new Crud();
$homeSlider=$crud->Read("home_slider","1 order by `id` desc");
$executiveMessage=$crud->Read("executive_message","1 order by `id` desc");
$aboutUs=$crud->Read("about_us","1 order by `id` desc");
$chdMessage=$crud->Read("chd_message","1 order by `id` desc");
$honourables=$crud->Read("honourable_dignities","1 order by `id` desc");
$recentNews=$crud->Read("news_events","1 order by `id` desc limit 6");

$recentEvent=$crud->Read("news_events","`url`!='' order by `id` desc limit 3");
$NewsArticle=$crud->Read("news_events","1 order by `id` desc limit 3");
$schemeLimit=$crud->Read("schemes","1 order by id desc limit 3");
$recentUpdatesLimit=$crud->Read("recent_updates","1 order by `id` desc limit 5");
$links=$crud->Read("usefull_links","1 order by `id` desc limit 3");
$gallery=$crud->Read("gallery","1 order by `id` desc limit 10");
$bottomScroll=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");


?>
<body>
<?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three video-overlay position-relative">
            <!-- Video -->
            <div class="hero-bg-video">
                <video class="hero-slider-video video-cover" poster="assets/images/hero/hero-three-banner.png" loop
                    autoplay muted>
                    <source src="assets/images/videos/kokrajhar-modify.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <?php
                          if($homeSlider){
                        ?>
                        <div class="hero-caption-three position-relative z-3">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                <?= $homeSlider[0]['head']; ?>
                            </h3>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                               <?= $homeSlider[0]['title']; ?>
                            </p>
                        </div>
                        <?php
                          }else{
                        ?>
                         <div class="hero-caption-three position-relative z-3">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                Urban Development Department
                            </h3>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                                To monitor the growth of new urban areas in BTR and include them under planning
                                procedures to ensure their efficient and orderly growth.
                            </p>
                        </div>
                        <?php
                          }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->
        <!-- Plan area S t a r t -->
        <!-- Plan area S t a r t -->
        <section class="plan-area">
        <div class="container">
            <div class="plan-section plan-shadow">
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <img src="assets/images/icon/location.png" style="max-width: 30px;">
                        <h4 class="select2-title">DISTRICT</h4>
                    </div>
                    <select class="destination-dropdown district-dropdown" id="districtDropdown">
                        <option selected disabled>SELECT DISTRICT</option>
                        <option value="Baksa">Baksa</option>
                        <option value="Chirang">Chirang</option>
                        <option value="Kokrajhar">Kokrajhar</option>
                        
                        <option value="Udalguri">Udalguri</option>
                    </select>
                </div>
                <div class="divider plan-divider d-none d-lg-block"></div>
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <img src="assets/images/icon/ulb.png" style="max-width: 30px;">
                        <h4 class="select2-title">ULB</h4>
                    </div>
                    <select class="destination-dropdown ulb-dropdown" id="ulbDropdown">
                        <option selected disabled>SELECT ULB</option>
                        
                    </select>
                </div>
                <div class="sign-btn">
                    <button class="button-signin" onclick="visitULB()">
                        VISIT ULB
                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                            <path
                            clip-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                            fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
        <!--/ End-of Plan-->
<!-- Brand S t a r t -->
<!-- Testimonial S t a r t -->




        
        <section class="testimonial-area-three position-relative section-bg-before-two top-padding">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <!-- <span class="highlights fancy-font font-400">Testimonial</span> -->
                            <h4 class="title"> 
                                Message from Executive Member, BTC
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <?php
                                  if($executiveMessage){
                                ?>

                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <!-- <img src="assets/images/gallery/EM.jpg" alt="smartBTR"> -->
                                            <img src="admin/<?= $executiveMessage[0]['image']; ?>" alt="EM image">

                                        </div>
                                        <div class="user-info" style="margin-top: 50px">
                                            <p class="name fs-2" style="color: #5ab6ec;">
                                                <?= $executiveMessage[0]['name']; ?>
                                            </p>
                                            <p class="designation fs-6 fw-bold">Executive Member, BTC</p>
                                        </div>

                                    </div>

                                    <div class="testimonial-body">
                                        <p class="pera" style="text-align: justify;">
                                            <?= strip_tags($executiveMessage[0]['message']); ?>
                                        </p>
                                    </div>

                                </div>

                                <?php
                                  }else{
                                ?>
                                
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <!-- <img src="assets/images/gallery/EM.jpg" alt="smartBTR"> -->
                                            <img src="admin/img/unknown.webp" alt="EM image">

                                        </div>
                                        <div class="user-info" style="margin-top: 50px">
                                            <p class="name fs-2" style="color: #5ab6ec;">
                                                Executive's Name
                                            </p>
                                            <p class="designation fs-6 fw-bold">Executive Member, BTC</p>
                                        </div>

                                    </div>

                                    <div class="testimonial-body">
                                        <p class="t-justify" style="font-size: large;">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores consequuntur doloribus commodi eaque! Architecto velit veniam temporibus minus, saepe in aspernatur voluptas, enim eum, commodi modi.

                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, aliquid! Expedita ratione, unde ducimus aut consequuntur voluptas. Rem expedita asperiores suscipit eligendi nostrum quo sequi impedit, ullam nesciunt voluptas voluptatem dolor deserunt!

                                        </p>
                                    </div>

                                </div>

                                <?php
                                  }
                                ?>
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <?php
                      if($executiveMessage){
                    ?>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="admin/<?= $executiveMessage[0]['banner']; ?>" alt="UDD">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="UDD">
                            </div>
                            <a href="<?= $executiveMessage[0]['url']; ?>" data-fancybox="video-gallery"
                                class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                      }else{
                    ?>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="admin/img/black.png" alt="UDD">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="UDD">
                            </div>
                            <a href="https://www.youtube.com/watch?v=P2-6tu0pWT" data-fancybox="video-gallery"
                                class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <?php
                      }
                    ?>
                    <!-- / End Slider -->
                </div>
            </div>
            <!-- <div class="shape-testimonial">
                <img src="assets/images/icon/graphic.png" alt="smartBTR">
            </div> -->
        </section>
        
        <!--/ End of Testimonial -->

        <section class="why-area" style="padding-top: 42px !important;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-section-title">
                            <h4 class="title">Welcome to Urban Development Department</h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                
                    <?php
                      if($aboutUs){
                    ?>
                     
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <h4 class="title">
                                About Us 
                            </h4>
                            <span class="highlights fancy-font font-400"> <?= $aboutUs[0]['head'] ;?></span>
                            <p class="pera" style="text-align: justify;">
                               <?php
                                 $desc=strip_tags($aboutUs[0]['description']);
                                 if(strlen($desc)>250){
                                    echo substr($desc,0,250). " ...".
                                    '
                                    <div class="section-button mt-27 d-inline-block">
                                        <a href="about-details?s=aboutUs" class="btn-primary-icon-sm radius-20">
                                            <p class="pera mt-0">Read More</p>
                                            <i class="ri-arrow-right-up-line"></i>
                                        </a>
                                    </div>
                                    ';
                                 }else{
                                    echo $desc;
                                 }
                               ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img style="min-height: 300px; max-height: 300px;" src="admin/<?= $aboutUs[0]['image'] ?>" alt="UDD">
                            </div>

                        </div>
                    </div>                    

                    <?php
                      }else{
                    ?>
                      
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <h4 class="title">
                                About Us
                            </h4>
                            <span class="highlights fancy-font font-400">Head title</span>
     
                            <p class="pera"style="text-align: justify;">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aspernatur quisquam, laborum accusamus libero, quia consectetur atque laudantium excepturi veritatis corrupti alias est accusantium, animi iusto sint! Ratione, repudiandae excepturi eligendi voluptate harum enim inventore, porro sit deleniti accusamus nihil. Recusandae, debitis totam temporibus esse!
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img style="min-height: 300px; max-height: 300px;" src="admin/img/black.png" alt="UDD">
                            </div>

                        </div>
                    </div>
                    
                    <?php
                      }
                    ?>

                    <!-- chd message -->
                    <?php 
                      if($chdMessage){
                    ?>

                    <div class="col-xl-5 col-lg-5">
                        <div class="#0-banner imgEffect">
                            <div class="comment-section">
                                <div class="main-profile">
                                    <div class="user-img-lg">
                                        <img src="admin/<?= $chdMessage[0]['image']; ?>" alt="UDD">

                                    </div>
                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Message from Council Head of Department
                                        </h4>
                                        <p class="desg"><?= $chdMessage[0]['name']; ?></p>
                                        <p class="pera"style="text-align: justify;">
                                            <?php
                                                $message=strip_tags($chdMessage[0]['message']);
                                                if(strlen($message)>150){
                                                    echo substr($message,0,130). 
                                                    '
                                                    <span
                                                        style="font-size: 13px;
                                                        font-weight: 700;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px; cursor: pointer;">
                                                        <a href="about-details?s=chdMessage" style="color: #fff;">
                                                            ...READ MORE
                                                        </a>
                                                    </span>
                                                    ';
                                                }else{
                                                    echo $message;
                                                }
                                            ?>

                                        </p>
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <?php
                      }else{
                    ?>
                    
                    <div class="col-xl-5 col-lg-5">
                        <div class="#0-banner imgEffect">
                            <div class="comment-section">
                                <div class="main-profile">
                                    <div class="user-img-lg">
                                        <img src="admin/img/unknown.webp" alt="UDD">

                                    </div>
                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Message from Council Head of Department
                                        </h4>
                                        <p class="desg">CHD's Name</p>
                                        <p class="pera">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae numquam et, fugiat debitis provident velit, tempore soluta...
                                            
                                        </p>
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php
                      }
                    ?>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper whySwiper-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/information.png"
                                                        style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">About us</h4>
                                                    <p class="pera line-clamp-3">
                                                        The main function of the department is coordination between the
                                                        Urban Local Bodies of the BTR and discharging the statutory
                                                        responsibilities under the provisions of the Assam Municipal
                                                        Act, 1956 as adopted by B.T.C.
                                                    </p>

                                                    <span
                                                        style="width: 100px; margin-left: auto; font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px"><a
                                                            href="overview-dept" style="color: #fff;">READ
                                                            MORE</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/goal.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">Our Objectives</h4>
                                                    <p class="pera line-clamp-3">
                                                        To formulate Master Plans to ensure sustainable urban
                                                        development in notified urban areas of BTR.
                                                    </p>
                                                    <span
                                                        style="width: 100px; margin-left: auto; font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px"><a
                                                            href="about-details?s=ourObjective"
                                                            style="color: #fff;">READ MORE</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/history.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">History</h4>
                                                    <p class="pera line-clamp-3">
                                                        The Bodoland Territorial Council (BTC) is an autonomous district
                                                        council for the Bodoland Territorial Region in India. It was
                                                        established in February 2003
                                                    </p>


                                                    <span
                                                        style="width: 100px; margin-left: auto; font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px"><a
                                                            href="history" style="color: #fff;">READ
                                                            MORE</a></span>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/version-control.png"
                                                        style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">BTR, ASSAM</h4>
                                                    <p class="pera line-clamp-3">
                                                        Bodoland Territorial Region is an autonomous region in Assam,
                                                        Northeast India. It is made up of four districts (Kokrajhar,
                                                        Chirang, Baksa and Udalguri)
                                                    </p>

                                                    <span
                                                        style="width: 100px; margin-left: auto; font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px"><a
                                                            href="btr-assam"
                                                            style="color: #fff;">READ MORE</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Brand -->
        <!--/ End of Brand -->
        <style type="text/css">
            .flex-container {
    display: flex;
    align-items: center; /* Align items vertically */
}
.circle2 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle2 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}
.circle3 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(129.62deg, rgb(0, 30, 74) 1.95%, rgb(0, 73, 181) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle3 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}

 .list {
    padding: 15px;
    margin-bottom: 15px;
    /*background-color: #ffffff;*/
    background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px;
  }
        </style>
<!-- Testimonial S t a r t -->
        <section class="testimonial-area top-padding">
            <div class="container">
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Honourable Dignities
                            </h4>
                          
                            <!-- <p>List of various online services provided by the ULB for citizens.</p> -->
                        </div>
                        <!-- / -->
                        
                    </div>

                </div>
                <div class="row g-0">
                    <div class="col-lg-8">
                        <div class="swiper h-calc testimonialTwo-active">
                            <div class="swiper-wrapper">
                               <?php
                                 if($honourables){
                                    foreach($honourables as $hons){
                                ?>
                                
                                <div class="swiper-slide testimonial-card-two h-calc"> 
                                    <div class="testimonial-footer" style="display: flex;justify-content: space-between;align-items: center;">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="admin/<?= $hons['image']; ?>" alt="smartBTR">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name"><?= $hons['name']; ?></p>
                                                <p class="designation"><?= $hons['designation']; ?></p>
                          
                                                <div class="social-section mt-3">                                               
                                                    <div class="social-list">                                               
                                                        <div class="socials">
                                                            <?php
                                                                if($hons['facebook']){
                                                                ?>
                                                                <a href="<?= $hons['facebook']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                <?php
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="socials">
                                                            <?php
                                                                if($hons['youtube']){
                                                                ?>
                                                            <a href="<?= $hons['youtube']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-youtube"></i></a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </div>
                                                    
                                                        <div class="socials">
                                                            <?php
                                                                if($hons['instagram']){
                                                                ?>
                                                            <a href="<?= $hons['instagram']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-instagram"></i></a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </div>

                                                        <div class="socials">
                                                            <?php
                                                                if($hons['twitter']){
                                                                ?>
                                                            <a href="<?= $hons['twitter']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-twitter"></i></a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </div>

                                                    </div>
                                                </div>  
                                            </div>
                                        </div>                                                                          
                                    </div>
                                    
                                    <div class="testimonial-body">
                                        <p class="pera" style="text-align: justify;">
                                            <?= strip_tags($hons['description']); ?>
                                           
                                            <span style="width: 100px; margin-left: auto; font-size: 13px;
                                                font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">
                                                <a href="honourable-details?hid=<?= base64_encode($hons['id']);?>" style="color: #fff;">READ</a>
                                           </span>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                    }
                                }else{
                                    for($i=0;$i<2;$i++){
                                ?>

                                <div class="swiper-slide testimonial-card-two h-calc">
                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="admin/img/black.png" alt="smartBTR">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name">Honours Name</p>
                                                <p class="designation">Designation </p>
                            
                                                <div class="social-section mt-3">                                               
                                                    <div class="social-list">                                               
                                                        <div class="socials">                                                    
                                                        <a href="#0" style="margin: 0.6rem;"><i class="fab fa-facebook-f"></i></a>
                                                        </div>
                                                        <div class="socials">
                                                        <a href="#0" style="margin: 0.6rem;"><i class="fab fa-youtube"></i></a>                                                  
                                                        </div>
                                                    
                                                        <div class="socials">
                                                        <a href="#0" style="margin: 0.6rem;"><i class="fab fa-instagram"></i></a>                                                    
                                                        </div>

                                                        <div class="socials">
                                                        <a href="#0" style="margin: 0.6rem;"><i class="fab fa-twitter"></i></a>                                                   
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera" style="text-align: justify;">
                                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quos accusamus rem. Rerum architecto odio nesciunt quisquam nisi beatae exercitationem cum, quaerat nemo error aut expedita laboriosam et, doloremque perferendis. Rerum, ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quisquam. Iure, laborum!
                                        </p>
                                        <p class="pera" style="text-align: justify;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, aliquid! Expedita ratione, unde ducimus aut consequuntur voluptas. 
                                        </p>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                }
                               ?>                                
                               
                            </div>
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-line"></i>
                            </div>   
                                                                          
                        </div>     
                                
                    </div>
                 
                    <div class="col-lg-4" style="background-color: #f9f8f6;">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                       
                                       
                                        <div class="image-wrapper">
                                          <img src="admin/img/map/btrmap.png" class="img-fluid" alt="Image">
                                        </div>
                                  
                                    
                                    <div class="testimonial-body">
                                        
                                        <p class="name text-center" style="color: #60aef6;font-size: 30px;font-weight: 700;line-height: 1.2;">BTR, ASSAM</p>
                                        <p class="pera">
                                            <ul>
                                                <li><strong>Established:</strong><span style="font-size: 15px"> 9 February, 2003</span></li>
                                                <li><strong>Govt. Type:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                <li><strong>Body:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                <li><strong>Total Area:</strong> <span style="font-size: 15px"> 8,970 Km2</span></li>
                                                <li><strong>Official Languages:</strong> <span style="font-size: 15px"> Bodo, English, Assamese</span></li>
                                            </ul>
                                        </p>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ End of Testimonial -->
        <!--/ End of Testimonial -->
<style>
   
.button {
  width: 200px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  padding: 0px 15px;
  background-color: rgb(66, 66, 66);
  border-radius: 10px;
  color: white;
  border: none;
  position: relative;
  cursor: pointer;
  transition-duration: .2s;
  border:none;
}

.bell {
  width: 13px;
}

.bell path {
  fill: rgb(0, 206, 62);
}

.arrow {
  position: absolute;
  right: 0;
  width: 30px;
  height: 100%;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button:hover {
  background-color: rgb(77, 77, 77);
  transition-duration: .2s;
}

.button:hover .arrow {
  animation: slide-right .6s ease-out both;
}
/* arrow animation */
@keyframes slide-right {
  0% {
    transform: translateX(-10px);
    opacity: 0;
  }

  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

.button:active {
  transform: translate(1px , 1px);
  transition-duration: .2s;
}

</style>

        <!-- notices -->

        <section class="destination-details-section section-padding2">
            <div class="container">

                <!-- <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights">Testimonial</span>
                            <h4 class="title">
                                <img style="max-width: 100px" src="assets/images/style-images/notice-removebg-preview (1).png" alt=""> Notices and Press Release
                                <img style="max-width: 80px" src="assets/images/style-images/news-flaticon-removebg-preview.png" alt="">

                                
                                
                            </h4>
                        </div>
                    </div>
                </div> -->
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4" style="padding: 0px 16px;">
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                                <div class="search-filter-section">
                                    
                                    
                                    <div class="heading" style="display: flex;justify-content: space-between;align-items: center;">
                                        <!-- <span class="line"></span> -->
                                        <h4 class="title">LATEST UPDATES</h4>
                                        <?php
                                          if($recentUpdatesLimit){
                                        ?>
                                        <a href="view-all?q=recent-updates">

                                            <button class="button" style="width:8rem;">
                                                <svg class="bell" viewBox="0 0 448 512">
                                                    <path
                                                        d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z">
                                                    </path>
                                                </svg>
                                                View all
                                                <div class="arrow">›</div>
                                            </button>

                                        </a>
                                        <?php
                                          }
                                        ?>
                                          
                                    </div>
                                   
                                    <!-- <ul class="recent-news-list"> -->
                                    <ul class="recent-news-list">

                                        <?php
                                          if($recentUpdatesLimit){
                                            $c=0;
                                            foreach($recentUpdatesLimit as $notice){
                                                $c++;
                                        ?>
                                         
                                        <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                            
                                                <div class='mx-2'>
                                                    <a href="recent-update-details?ruid=<?= base64_encode($notice['id']) ?>">
                                                        <div class="title line-clamp-2">                                                
                                                            <h6> 
                                                                <?php
                                                                    $head=$notice['head']; 
                                                                    if(strlen($head)>20){
                                                                        echo substr($head,0,20).' ...';
                                                                    }else{
                                                                        echo $head;
                                                                    }
                                                                ?> 
                                                                <?php
                                                                    if($c==1){
                                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                                    }
                                                                ?>
                                                            </h6>                                                                                     
                                                        </div>
                                                        <p class='t-justify'>
                                                            <?php
                                                            $title=$notice['title']; 
                                                            if(strlen($title)>100){
                                                                echo substr($title,0,100).' ...';
                                                            }else{
                                                                echo $title;
                                                            }
                                                            ?>
                                                        </p>
                                                        <div class="d-flex justify-content-between flex-wrap gap-8">
                                                            <div class="d-flex align-items-center gap-8">
            
                                                            <p class="date">
                                                                <?= date('F j, Y', strtotime($notice['date'])) ?>
                                                            </p>
            
                                                            </div>
            
                                                        </div>

                                                        </div>
                                                    </a> 

                                                <a href="recent-update-details?ruid=<?= base64_encode($notice['id']) ?>">
                                                    <div>                                                    
                                                      <?php
                                                        if($notice['pdf']){
                                                        ?>                                                
                                                        <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;" alt="">                                           
                                                        <?php
                                                        }
                                                      ?>
                                                    </div>
                                                </a> 
                                            
                                        </li>
                                          
                                        <?php
                                            }
                                          }else{
                                            $c=0;
                                            for($i=0;$i<6;$i++){
                                                $c++;
                                        ?>

                                            <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                                <div>
                                                    <div class="title line-clamp-2">                                                   
                                                      <h6> head
                                                        <?php
                                                            if($c==1){
                                                                echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                            }
                                                        ?>
                                                      </h6>                                                                                       
                                                    </div>
                                                    <p>
                                                        recent update's description appears here
                                                    </p>
                                                    <div class="d-flex justify-content-between flex-wrap gap-8">
                                                        <div class="d-flex align-items-center gap-8">        
                                                          <p class="date">dd-mm-yyy </p>        
                                                        </div>        
                                                    </div>
                                                </div>                                               
                                            </li>
                                        
                                        <?php
                                            }
                                          }
                                        ?>                                      
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>                      
                        
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 m-30" style="padding: 0px 16px;">
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                                <div class="search-filter-section">
                                      
                                    <div class="heading" style="display: flex; justify-content: space-between; align-items: center;border-bottom:none">
                                        <h4 class="title">SCHEMES</h4>
                                        <!-- <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                                        <?php
                                        if($schemeLimit){
                                        ?>
                                            <a href="view-all?q=schemes">
                                                <button class="button" style="width:8rem;">
                                                    <svg class="bell" viewBox="0 0 448 512"><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"></path></svg>
                                                    View all
                                                    <div class="arrow">›</div>
                                                </button>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Select box added here -->
                                      
                                    </div>
                                                                    
                                
                                    <ul class="recent-news-list2" id="default-schemes">
                                        
                                        <!--<p style="font-weight: 700;color: #00a2c7;">SCHEMES UNDER UDD</p>-->
                                      <?php
                                         if($schemeLimit){
                                            $c=0;
                                            foreach($schemeLimit as $scm){  
                                                $c++;
                                      ?>
                                          
                                        <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                            <a href="scheme-details?id=<?= base64_encode($scm['id']); ?>">
                                                <div style="display: flex;align-items: center;gap: 2rem;">
                                                    
                                                        <div>
                                                            <?php
                                                            if($scm['image']){
                                                            ?>
                                                            <img src="admin/<?= $scm['image']; ?>" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                                            <?php
                                                            }else{
                                                            ?>
                                                            <img src="admin/img/others/empty.jpg" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div>
                                                            <div class="title line-clamp-2">
                                                        
                                                                <h6>
                                                                <?php 
                                                                   $sname= $scm['scheme_name'];
                                                                   if(strlen($sname)>15){
                                                                    echo substr($sname,0,15). ' ...';
                                                                   } else{
                                                                    echo $sname;
                                                                   }
                                                                ?> 
                                                                <?php
                                                                    if($c==1){
                                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                                    }
                                                                ?>
                                                                </h6>
                                                                                            
                                                            </div>
                                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                                <div class="d-flex align-items-center gap-8">
                
                                                                <p class="date">
                                                                    <?= date('F j, Y', strtotime($scm['date'])) ?>
                                                                </p>
                
                                                                </div>
                
                                                            </div>
                                                        </div>
                                                
                                                </div>
                                            </a>
                                            <div>

                                            <?php
                                              if($scm['pdf']){
                                            ?>
                                              <a href="admin/<?= $scm['pdf']; ?>" target="_blank">
                                                <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;cursor: pointer;" alt="">
                                              </a>
                                            <?php
                                              }
                                            ?>

                                            </div>
                                        </li>   
                                        
                                      <?php }
                                        }else{
                                          for($i=0;$i<3;$i++){
                                      ?>
                                        <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">                                           
                                            <div style="display: flex;align-items: center;gap: 2rem;">                                                    
                                                    <div>                                                          
                                                        <img src="admin/img/others/empty.jpg" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">                                                          
                                                    </div>
                                                    <div>
                                                        <div class="title line-clamp-2">                                                        
                                                            <h6>
                                                                Scheme Name                                                               
                                                            </h6>                                                                                            
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap gap-8">
                                                            <div class="d-flex align-items-center gap-8">
            
                                                            <p class="date">
                                                                dd-mm-yyyy
                                                            </p>
            
                                                            </div>            
                                                        </div>
                                                    </div>                                            
                                            </div>
                                    
                                            <div>                                            
                                             <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px; filter: blur(1.3px); " alt="">
                                            </div>
                                        </li> 
                                      <?php
                                          }
                                        }
                                      ?>

                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 m-30" style="padding: 0px 16px;" >
                       
                            <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                     
                                        <h4 class="title">SOCIAL MEDIA</h4>
                                       <!--  <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                                    </div>

                                <div class="row g-4 position-static top-0">
                            
                           
                                
                                    <ul class="tour-listing">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuddbtr%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                                    </ul>
                                </div>
                            
                            </div>
                    </div>                   
                    
                </div>

            </div>
        </section>

        <!-- notices ends -->



         <!-- Explore S t a r t -->
        <section class="explore-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                         
                            <h4 class="title text-left">
                                Citizen Charter
                            </h4>
                          
                            <p>List of various online services provided by the UDD for citizens.</p>
                        </div>
                        <div class="circle1">
                           <img height="80px" width="100px" src="assets/images/style-images/online-service-removebg-preview.png" alt="">
                        </div>
                        
                    </div>

                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Feedbacks</h3>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Ideas</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions to Develope UDD</h4>
                                </div>
                            </div>
                           <!--  <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions to Develope UDD </h4>
                                </div>
                            </div> -->
                            <!-- <div class="col-12 text-center">
                                <div class="section-button d-inline-block">
                                    <a href="news.html">
                                        <button>
                                          <div class="svg-wrapper-1">
                                            <div class="svg-wrapper">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"/></svg>
                                            </div>
                                          </div>
                                          <span>All Services</span>
                                        </button>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h4 class="name">OBPS</h4>
                                </div>
                            </div>
                             <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h4 class="name">HALL BOOKING</h4>
                                </div>
                            </div> -->
                           
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent-three">
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel"
                                aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions</h4>
                                    <p class="pera" style="text-align: justify;">
                                        Dear citizens, your input matters! Share your suggestions with the Urban Development Department to help shape a better future for our city.<br> 
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Sugestions" data-bs-toggle="modal" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>
                              

                                    <!-- <ul class="expect-list">
                                        <li class="">
                                            <span style="width: 100px; margin-left: auto; font-size: 13px;
                                      font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">Click here</span>
                                        </li>
                                        
                                    </ul> -->
                                </div>
                                <!-- <div class="explore-banner">
                                    <img src="assets/images/gallery/about.png" alt="SmartBTR">
                                </div> -->
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel"
                                aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Feedbacks</h4>
                                    <p class="pera">
                                        Your feedback is essential! Let us know how we're doing and how we can improve by sharing your thoughts with the Urban Development Department.<br> 
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Feedbacks" data-bs-toggle="modal" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>
                                   
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Ideas</h4>
                                    <p class="pera">
                                        Got ideas? We want to hear them! Share your innovative suggestions with the Urban Development Department and be part of shaping our city's future.<br>
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Ideas" data-bs-toggle="modal" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Field Booking</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.<br>
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Field Booking" data-bs-toggle="modal" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions to Develope UDD</h4>
                                    <p class="pera">
                                        Your ideas matter! Help shape the Urban Development Department's future by sharing your suggestions for its development.<br> 
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Sugestions to Develope UDD" data-bs-toggle="modal" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>

                    <style>
                        @media (max-width: 991px) {
                            .offer-banner-custom .offer-content-two-custom {
                                max-width: 79%;
                                text-align: justify;
                            }
                        }
                    </style>
                    
                        <div class="col-xl-5 col-lg-5 m-30" style="padding: 0px 16px;">
                            <div class="heading" style="display: flex;justify-content: space-between;align-items: center;">
                            <!-- <span class="line"></span> -->
                            <h4 class="title">Useful Links</h4>  
                            <?php
                                if($links){
                            ?>
                                  
                               <a href="view-all?q=usefullLinks" >
                                       
                                <button class="button">
                                   <svg class="bell" viewBox="0 0 448 512"><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"></path></svg>
                                  View all
                                  <div class="arrow">›</div>
                                </button>

                               </a>
                            <?php 
                                }
                            ?>               
                        </div>
                        
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                               
                                <ul class="recent-news-list2">
                                     
                                    <?php
                                    if($links){
                                        $u=0;
                                        foreach($links as $link){
                                            $u++;
                                    ?>
                                    <li class="list">
                                        <h5 class="title line-clamp-2">
                                            <a href="<?= $link['link']; ?>" target="_blank">
                                                <?= $link['title']; ?> 
                                                <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> 
                                                <?php
                                                  if($u==1){
                                                    echo '<img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px">';    
                                                  }
                                                ?>
                                            </a>
                                        </h5>
                                    </li>
                                    <?php
                                        }
                                    }else{
                                        for($u=0;$u<3;$u++){
                                    ?>
                                    <li class="list">
                                        <h5 class="title line-clamp-2">                                      
                                            link title appears here 
                                            <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> 
                                            <?php
                                                if($u==0){
                                                echo '<img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px">';    
                                                }
                                            ?>                                   
                                        </h5>
                                    </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                                                
                                </ul>

                            </div>
                        </div>

                    </div>
                    </div>

                 
                </div>
            </div>
        </section>
        <!--/ End of Explore -->
        <!-- start grievance and other services -->

        <section class="explore-area section-padding2  " style="background-color: black; margin-left: 20px; margin-right: 20px; border-radius: 30px;" >
            <div class="container citizen-content">
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >
                        <div class="section-title  position-relative mb-60" style="left: 10px;">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h3 style="background: linear-gradient(to right, #fafcb1 30%, #b99bab 80%);
                            background-clip: border-box;background-clip: border-box;background-clip: border-box;-webkit-background-clip: text;-webkit-text-fill-color: transparent; text-align: center;font-weight: 700;font-size: 33px">
                                Avail Online Services
                            </h3>
                            <h5 style="background: linear-gradient(to right, #fcc9b1 30%, #f097c7 80%);
                            background-clip: border-box;background-clip: border-box;background-clip: border-box;-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: large; text-align: justify;">List of various online services provided by the ULB for citizens.</h5>
                        </div>

                        
                    </div>

                </div>
                <div class="row g-4">
                    
                    <div class="col-xl-3 col-lg-3 col-md-4">

                        <a href="https://service.assamurban.in" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image:linear-gradient(to left, rgb(227, 168, 115), rgb(255, 96, 0)); padding: 11px; border-radius: 10px;">
                                    <h5 class="name text-center font-700 text-white">Property Tax</h5>
                            
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://eodbmis.assam.gov.in/eodb_api/logingeneral" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(162, 217, 168), rgb(124, 223, 56)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Trade Licence Application</h5>
                            
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://service.assamurban.in/hoardings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(71, 114, 217), rgb(132, 225, 203)); padding: 11px; border-radius: 10px;">

                                    <h5 class="name text-center font-700 text-white">Hoarding Permission</h5>
                            
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/cesspoolbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(217, 71, 201), rgb(237, 190, 238)); padding: 11px; border-radius: 10px;">
                                    <h5 class="name text-center font-700 text-white">Cespool Request</h5>
                            
                            </div>
                        </a>
                    </div>

                  
                 
                </div>

                <div class="row g-4 mt-10">

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/filmshootings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(242, 131, 173), rgb(247, 60, 140)); padding: 11px; border-radius: 10px;">

                                    <h5 class="name text-center font-700 text-white">Film Shooting</h5>
                            

                            </div>
                        </a>
                    </div>

                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://service.assamurban.in/fieldbookings/apply" target="_blank">

                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(178, 210, 120), rgb(187, 225, 49)); padding: 11px; border-radius: 10px;">

                                        <h5 class="name text-center font-700 text-white">Field Booking</h5>
                                

                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://service.assamurban.in/hallbookings/apply" target="_blank">

                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(120, 159, 210), rgb(103, 86, 225)); padding: 11px; border-radius: 10px;">
                                        <h5 class="name text-center font-700 text-white">Hall Booking</h5>
                                    

                                    
                                </div>
                            </a>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://service.assamurban.in/waterconnections/new" target="_blank">

                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-image: linear-gradient(to left, rgb(189, 178, 17), rgb(213, 196, 145)); padding: 11px; border-radius: 10px;">

                                        <h5 class="name text-center font-700 text-white">Water Connection</h5>
                                    
                                    
                                </div>
                            </a>

                        </div>

                  
                 
                </div>

                <div class="row g-4 mt-10">

                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://service.assamurban.in/tdr/applications" target="_blank">

                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-color: #2e5db6; padding: 11px; border-radius: 10px;">
                                        <h5 class="name text-center font-700 text-white">TDR</h5>
                                    
                                    
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="https://assamurban.in/obps" target="_blank">
                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-color: #eb812a; padding: 11px; border-radius: 10px;">

                                        <h5 class="name text-center font-700 text-white">OBPS</h5>
                                    
                                    
                                </div>
                            </a>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-4">
                            <a href="https://assamurban.in/ulb-services" target="_blank">
                                <div class="d-flex gap-16 align-items-center justify-content-center" style="background-color: #cc2dbf; padding: 11px; border-radius: 10px;">
                                        <h5 class="name text-center font-700 text-white">View Other Services</h5>
                                    
                                </div>
                            </a>

                        </div>
                   
                </div>

                <div class="row g-4 mt-10" style=" background-image: linear-gradient(to left, rgb(202, 169, 169), rgba(255,0,0,1)); padding: 11px; border-radius: 10px;">
                    <div class="col-xl-9 col-lg-8 col-md-8" >
                        <div class="d-flex gap-16 align-items-center justify-content-center" >
                            <h5 class="name text-center font-700 text-white">We are committed to providing excellent service and want to hear from you. If you have any concerns or complaints about your <span style="color: rgb(23, 79, 182); text-decoration: underline;">Urban Local Bodies (ULB)</span>, please click on the button to file a grievance.</h5>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <a href="#citizenServiceModal" class="clickService"data-cs="Grievance" data-citizenService="Grievance" data-bs-toggle="modal">
                            <button class="btn btn-primary-icon-sm" style="padding: 7px 7px 7px">SUBMIT GRIEVANCE</button>
                           </a>
                    </div>
               </div>


               
            </div>
        </section>






<div style="position: relative; margin-top: 15px;">
            <img src="assets/images/style-images/aronai-bis.png" height="100%" width="100%" alt="">
            <div style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 2;  background-color: rgba(137, 151, 230, 0.5); display: flex; justify-content: center; align-items: center;">
               
            </div>
        </div>
<style type="text/css">
        .flex-container {
    display: flex;
    align-items: center; /* Align items vertically */
}
.circle2 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle2 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}
.circle3 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(129.62deg, rgb(0, 30, 74) 1.95%, rgb(0, 73, 181) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle3 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}

 .list {
    padding: 15px;
    margin-bottom: 15px;
    /*background-color: #ffffff;*/
    background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px;
  }
    .circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
    background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle img {
    width: 100%;
    height: auto;
    display: block;
     height :20px;
      width:15px; 
}
    .circle1 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(210, 244, 235) -0.63%, rgb(144, 247, 189) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle1 img {
    width: 100%;
    height: auto;
    display: block;
     height :35px;
      width:40px; 
}

    .about-banner {
        position: relative; /* Ensure the position context for pseudo-element */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add box-shadow */
        border-radius: 8px; /* Optional: Add border radius for rounded corners */
        overflow: hidden; /* Ensure overflow is hidden for inner elements */
    }

    .about-banner img {
        display: block; /* Ensure image behaves as block element */
        width: 100%; /* Ensure image fills its container */
        height: auto; /* Maintain aspect ratio */
    }

    .video-player {
        position: absolute; /* Position video player overlay */
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); /* Center exactly */
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        border-radius: 50%; /* Optional: Round shape for play button */
        padding: 20px; /* Adjust padding as needed */
    }

    .video-player i {
        color: #fff; 
        font-size: 48px; 
    }
    .img-fluid{
        border-radius: 5px;
    }
.aronai {
    position: relative;
    background-image: url('assets/images/style-images/bax-background-blue.png');
    /*background-image: url('assets/images/icon/btc.jpg');*/
    background-size: cover;
    background-position: center;
    padding: 100px 0; /* Adjust padding as needed */
}

/*.aronai::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
}*/
.aronai::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('assets/images/style-images/bax-background-blue.jpg');
  background-size: cover;
  background-position: center;
  opacity: 0.4;
  z-index: 1;
}

.container-events {
    position: relative;
    z-index: 1;

}
.mask {
    position: absolute;
    background-size: cover;
    background-position: center center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.8;
}

.bg-gradient-info {
    /*background-image: linear-gradient(310deg, rgba(33, 82, 255, 0.8) 0%, rgba(33, 212, 253, 0.8) 100%); /* Adjust opacity of gradient stops */
    /*background-image: linear-gradient(310deg, rgba(125, 146, 221, 0.8) 0%, rgb(151, 232, 225) 100%);*/
   /*background-image: linear-gradient(310deg, rgb(117, 123, 92) 0%, rgba(33, 212, 253, 0.8) 100%);*/
   background-image: linear-gradient(310deg, rgba(234, 133, 44, 0.8) 0%, rgb(240, 235, 193) 100%);
}
#categoryOutput{
padding: 16px 20px;
  border-radius: 8px;
  border: 1px solid var(--primary-border);
  background: var(--body);
  height: 52px;
  width: 100%;
  /*color: var(--primary-title);*/
  color: #798080;
  font-size: 16px;
}
</style>
<!-- Citizen Service Modal start -->


        <div class="modal fade" id="citizenServiceModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">

            <div class="modal-dialog modal-xl  modal-dialog-centered d-flex flex-column mt-30">
                <div class="modal-content">

                    <!-- Contact area S t a r t -->
                    <section class="contact-area citizen">
                        <div class="contact-card citizen-content">
                            <div class="bx-shd2 border border-2" style="position: absolute; top: 1px; right: 2px; background-color: hwb(0 64% 8%); padding: 5px; border-radius: 100%; transform: translateX(30%) translateY(-30%); ">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="container pb-3">
                                <div class="row justify-content-center">
                                    <div class="d-flex gap-16 align-items-center justify-content-center"
                                        style="align-items: center;">
                                        <h4>Citizen <span id="serviceTitle" style="color:#2d7dd8"></span> to UDD</h4>

                                      


                                        <div class="circle-primary-sm"
                                            style=" padding: 3%; background: linear-gradient(180deg, #e7bce7 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                            <img style="max-width: 30px;"
                                                src="assets/images/style-images/department-removebg-preview.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="container pt-30">
                                <div class="row">

                                    <div class="col-lg-5 col-md-12">

                                        <div class="d-flex  align-items-center mb-60 gap-10">
                                            <!-- Logo-->
                                            <div class="logo">
                                                <a href="index.html"><img src="assets/images/logo/udd-logo-removebg-preview.png" alt="logo"
                                                        class="changeLogo" style="max-width: 92px"></a>
                                            </div>

                                            <div>
                                                <h5 style="color: rgb(45, 125, 216); font-weight: bold;">Urban
                                                    Development Department</h5>
                                                <h6 style="color: rgb(67, 67, 68); font-weight: bold;">KOKRAJHAR, BTC,
                                                    ASSAM</h6>
                                            </div>

                                        </div>



                                        <div class="sch-item-left ">
                                            <div class="d-flex gap-10 pb-3 align-items-center">


                                                <div class="circle-primary-sm"
                                                    style=" padding: 3%; background: linear-gradient(180deg, #6883df 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>


                                                <div class="sch-item-left-item-content">
                                                    <strong>Address</strong>
                                                    <span class="sch-item-left-item-text"><a
                                                            href="https://maps.app.goo.gl/zmTFfbzcwABXK7yz5"
                                                            target="_blank">C79H+R65, Boro Bhatarmari, Assam
                                                            783370</a></span>
                                                </div>
                                            </div>

                                            <div class="d-flex gap-10 pb-3 align-items-center">

                                                <div class="circle-primary-sm"
                                                    style=" padding: 3%; background: linear-gradient(180deg, #5d8add 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                                    <i class="fas fa-phone"></i>
                                                </div>



                                                <span class="sch-item-left-item-content">
                                                    <strong>Phone</strong>
                                                    <span class="sch-item-left-item-text"><a
                                                            href="tel:8812825012">8812825012</a></span>
                                                </span>
                                            </div>
                                            <div class="d-flex gap-10 pb-3 align-items-center">

                                                <div class="circle-primary-sm"
                                                    style=" padding: 3%; background: linear-gradient(180deg, #597cda 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                                    <i class="fas fa-envelope"></i>
                                                </div>


                                                <span class="sch-item-left-item-content">
                                                    <strong>Email</strong>
                                                    <span class="sch-item-left-item-text"><a
                                                            href="mailto: contact@uddbtr.org">contact@uddbtr.org</a></span>
                                                </span>
                                            </div>

                                        </div>




                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-7">

                                        <h4 class="text-center pt-30 pb-30" id="subject"></h4>

                                        <form method="post" class="contact-form">
                                            <div class="row g-4">
                                                <div class="col-sm-12">
                                                    <label>Whom are you Suggesting for?</label>
                                                    <select class="custom-form" name="mb" id="mb">

                                                        <option value=""selected disabled="">Select MB</option>
                                                        <option value="Basugaon MB">Basugaon MB</option>
                                                        <option value="Bijni MB">Bijni MB</option>
                                                        <option value="Fakiragram MB">Fakiragram MB</option>
                                                        <option value="Goreswar MB">Goreswar MB</option>
                                                        <option value="Gossaigaon MB">Gossaigaon MB</option>
                                                        <option value="Kajalgaon MB">Kajalgaon MB</option>
                                                        <option value="Kokrajhar MB">Kokrajhar MB</option>
                                                        <option value="Mushalpur MB">Mushalpur MB</option>
                                                        <option value="Tamulpur MB">Tamulpur MB</option>
                                                        <option value="Tangla MB">Tangla MB</option>
                                                        <option value="Udalguri MB">Udalguri MB</option>
                                                        <option value="UDD">Urban Development Department</option>
                                                    </select>

                                                </div>

                                                <div class="col-sm-6">
                                                    <label>Category Selected</label>
                                                    <input class="custom-form" type="hidden" placeholder="Category" name="category" id="category">
                                                    <p id="categoryOutput" style=""></p> 
                                                </div>

                                                <div class="col-sm-6">
                                                    <label>Email</label>
                                                    <input class="custom-form" name="email" id="email" type="text"placeholder="Your Email">
                                                    <p id="emailErrorMessage" style="color: red"></p>
                                                </div>



                                                <div class="col-sm-12">
                                                    <label>Message</label>
                                                    <textarea class="custom-form-textarea"
                                                        id="message" name="message" rows="2"
                                                        placeholder="Enter your message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="mt-40">
                                                <p id="formErrorMessage" style="color: red"></p>
                                                <div class="sign-btn">
                                                    <button class="button-signin" id="submit">
                                                        SUBMIT
                                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                                            <path clip-rule="evenodd"
                                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>

                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--/ End-of Contact-->


                </div>
            </div>
        </div>




        <!--  Cityzen service modal end  -->
   <section class="news-area section-padding2 aronai" >
       <div class="mask bg-gradient-info"></div>
            <div class="container container-events">
 
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Our Recent Events
                            </h4>
                          
                            <!-- <p>Recent events in the Urban Development Department of Kokrajhar have focused on enhancing infrastructure and community services to meet growing urban needs.</p> -->
                        </div>
                        
                        
                    </div>

                </div>
                <div class="row g-4 mb-60">
                        <div class="col-xl-7 col-lg-7">
                            <div class="tab-content" id="v-pills-tabContent-two">
                                <?php
                                  if($recentEvent){
                                    $c=0;
                                    foreach($recentEvent as $re){
                                        $c++;
                                ?>

                                <div class="tab-pane fade show <?php if($c==1){echo "active";} ?>" id="pills-news-<?= $c; ?>" role="tabpanel" aria-labelledby="pills-news-<?= $c; ?>">
                                    <div class="about-banner imgEffect4">
                                        <img src="admin/<?= $re['image']; ?>" alt="smartBTR" class="img-fluid" style="height:25rem;">
                                        <a href="<?= $re['url']; ?>" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                                            <div class="video-player">
                                                <i class="ri-play-fill"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                  }else{
                                    for($i=0;$i<3;$i++){
                                ?>

                                <div class="tab-pane fade show <?php if(++$i==1){echo "active";} ?> " id="pills-news-<?= ++$i; ?>" role="tabpanel" aria-labelledby="pills-news-<?= ++$i; ?>">
                                    <div class="about-banner imgEffect4">
                                        <img src="admin/img/black.png" alt="smartBTR" class="img-fluid" style="height:25rem;">
                                        <a href="https://youtu.be/3WblMMl02" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                                            <div class="video-player">
                                                <i class="ri-play-fill"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                  }
                                ?>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="all-contents" id="v-pills-tab-two" role="tablist" aria-orientation="vertical">
                             
                                <?php
                                  if($recentEvent){
                                    $c=0;
                                    foreach($recentEvent as $re){
                                        $c++;
                                ?>

                                <div class="news-content <?php if($c==1) {echo "active";} ?>" id="pills-news-<?= $c; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-news-<?= $c; ?>" role="tab" aria-controls="pills-news-<?= $c; ?>" aria-selected=<?php if($c==1) {echo "true";} ?>>
                                    
                                    <div class="d-flex align-items-center gap-10">
                                        <img src="admin/<?= $re['image']; ?>" class="img-fluid" style="height: 70px;width: 100px;" alt="Location Icon">
                                        <h4 class="title">
                                            <a href="javascript:void(0)"><?= $re['head']; ?></a>
                                        </h4>
                                    </div>
                                    <div class="news-info">
                                        <div class="d-flex gap-10 align-items-center">
                                            <p class="name" style="font-weight: 700;color: #fff !important;"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon"><?= $re['address']; ?></p>
                                        </div>
                                        <p class="time"><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"><?= $re['date']; ?></p>
                                    </div>
                                    
                                </div>
                                
                                <?php
                                    }
                                  }else{                             
                                ?>

                                <div class="news-content active" id="pills-news-three-tab" data-bs-toggle="pill" data-bs-target="#pills-news-three" role="tab" aria-controls="pills-news-three" aria-selected="true">
                                    
                                    <div class="d-flex align-items-center gap-10">
                                        <img src="admin/img/black.png" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                        <h4 class="title">
                                            <a href="javascript:void(0)">event heading regarding for each.</a>
                                        </h4>
                                    </div>
                                    <div class="news-info">
                                        <div class="d-flex gap-10 align-items-center">
                                            <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon">event location</p>
                                        </div>
                                        <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon">event date</p>
                                    </div>
                                    
                                </div>

                                <div class="news-content " id="pills-news-three-tab" data-bs-toggle="pill" data-bs-target="#pills-news-three" role="tab" aria-controls="pills-news-three" aria-selected="">
                                    
                                    <div class="d-flex align-items-center gap-10">
                                        <img src="admin/img/black.png" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                        <h4 class="title">
                                            <a href="javascript:void(0)">event heading regarding for each.</a>
                                        </h4>
                                    </div>
                                    <div class="news-info">
                                        <div class="d-flex gap-10 align-items-center">
                                            <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon">event location</p>
                                        </div>
                                        <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon">event date</p>
                                    </div>
                                    
                                </div>

                                <div class="news-content " id="pills-news-three-tab" data-bs-toggle="pill" data-bs-target="#pills-news-three" role="tab" aria-controls="pills-news-three" aria-selected="">
                                    
                                    <div class="d-flex align-items-center gap-10">
                                        <img src="admin/img/black.png" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                        <h4 class="title">
                                            <a href="javascript:void(0)">event heading regarding for each.</a>
                                        </h4>
                                    </div>
                                    <div class="news-info">
                                        <div class="d-flex gap-10 align-items-center">
                                            <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon">event location</p>
                                        </div>
                                        <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon">event date</p>
                                    </div>
                                    
                                </div>
                                
                                <?php
                                    }                                  
                                ?>

                            </div>
                        </div>
                    </div>

                    <?php
                      if($recentEvent){
                        echo 
                        '
                        <div class="col-12 text-center">
                            <div class="section-button d-inline-block">
                                <a href="videoGallery">
                                    <button type="submit">
                                        <div class="svg-wrapper-1">
                                            <div class="svg-wrapper">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>View all Events</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        ';
                      }
                    ?>
            </div>
            <div class="shape-bg-about">
                <img src="assets/images/icon/bg-shape-2.png" alt="smartBTR">
            </div>
            </div>
        </section>


        <section class="news-area section-padding2"style="padding-top:none; ">
            <div class="container">
                <div class="row justify-content-center bg">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                            <!-- <span class="highlights">News & Article</span> -->
                            <h4 class="title">
                                Latest News & Articles
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php
                      if($NewsArticle){
                        foreach($NewsArticle as $news){
                    ?>

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details?nid=<?= base64_encode($news['id']); ?>">
                                    <img style="min-height: 250px; max-height: 250px;"
                                        src="admin/<?= $news['image']; ?>"
                                    alt="">
                                </a>
                            </figure>
                            <div class="news-content">
                               <div class="heading d-flex gap-16">

                                  

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;"><?= $news['date']; ?></span>
                                    </div>

                                    <div class="border-bottom d-flex">
                                        <i class="fas fa-map-marker-alt"></i>
                                         <span class="heading-pera ml-3" style="font-weight: bold;"><?= $news['address']; ?></span>
                                    </div>

                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details?nid=<?= base64_encode($news['id']); ?>">
                                        <?php
                                          $desc=strip_tags($news['description']);
                                          if(strlen($desc)>50){
                                            echo substr($desc,0,50)." ... <span class='text-danger'>read more</span>";
                                          }else{
                                            echo $desc;
                                          }
                                        ?>
                                    </a>
                                </h4>
                            </div>
                        </article>
                    </div>

                    <?php
                        }    
                      }else{
                        for($i=0;$i<3;$i++){
                    ?>

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="#0"><img style="min-height: 250px; max-height: 250px;"
                                        src="admin/img/black.png"
                                        alt="">
                                    </a>
                            </figure>
                            <div class="news-content">
                               <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">dd/mm/yyyy</span>
                                    </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="#0">description for this news ...</a>
                                </h4>
                            </div>
                        </article>
                    </div>

                    <?php
                        }
                      }
                    ?>                    
                    
                </div>

                <?php if($NewsArticle){ ?>
                    <div class="col-12 text-center">
                        <div class="section-button d-inline-block">
                            <a href="news">
                                <button>
                                    <div class="svg-wrapper-1">
                                        <div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <span>View all News</span>
                                </button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!--/ End of News -->

        <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="section-title mx-605 mb-30 d-flex gap-16">
                            <!-- <span class="highlights">about us</span> -->
                            <h4 class="title">Photo Gallery</h4>
                            <!--<img style="max-width: 70px" src="assets/images/style-images/photo-gallery-removebg-preview.png" alt="">-->
                            <!-- <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Platea urna hendrerit
                                dui eget velit sollicitudin orci. Non sit lorem dolor placerat
                                faucibus. Ut tellus feugiat facilisi neque sagittis cursus
                                sagittis.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tour-details-area">

                <!-- Details Banner Slider -->
                <div class="tour-details-banner">
                    <div class="swiper tourSwiper-active">
                        <div class="swiper-wrapper">
                            <?php
                                  if($gallery){
                                    foreach($gallery as $photo){
                                ?>

                                <div class="swiper-slide">    
                                    <a href="gallery">
                                    <img src="admin/<?= $photo['image']; ?>"
                                        alt="smartBTR" style="width:100%;height:25rem;">    
                                    </a>
                                </div>
                                
                                <?php
                                    }
                                  }else{
                                    for($i=0;$i<5;$i++){
                                ?>

                                <div class="swiper-slide">    
                                    <a href="#0">
                                    <img src="admin/img/black.png"
                                        alt="smartBTR">    
                                    </a>
                                </div>
                                
                                <?php
                                    }
                                  }
                                ?>
                            
                        </div>
                        <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                        <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                    </div>
                </div>
                <!-- / Slider-->

                
            </div>
        </section>
        <!--/ End-of Destination -->
        
         <style>
        /* Add your CSS here */
        .card {
            /*background-color: #ffffff;*/  
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 15px;
            background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-content {
            display: flex;
            flex-direction: row;
            padding: 15px;
        }

        .image-container {
            flex: 1;
            margin-right: 15px;
        }

        .scheme-image {
            /*max-width: 100%;*/
            height: auto;
            border-radius: 8px;
            max-width: 250px;
            max-height: 100px;
        }

        .details {
            flex: 2;
        }

        .title a {
            text-decoration: none;
            color: #333;
        }

        .title h6 {
            font-size: 18px;
            margin: 0;
        }

        .info {
            margin-top: 10px;
        }

        .date {
            color: #888;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .card-content {
                flex-direction: column;
            }

            .image-container {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
    </main>

    <!-- bottom images start -->
    <?php include("include/imgAndArnoimotion.php");?>
    <!-- bottom images end -->

    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>

    <!-- Footer S t a r t -->


    
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>


    <!-- sweetalert -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>


    
    <script>
        function visitULB() {
            var district = document.querySelector('.district-dropdown').value;
            var ulb = document.querySelector('.ulb-dropdown').value.replace(/ /g, '').toLowerCase(); // Convert to lowercase and remove spaces
            if (district && ulb) {
                // var url = ulb + ".assamurban.in";
                // const url = `http://${ulb}_mb.assamurban.in`;
                // window.location.href = "http://" + url;
                // const url = `http://${ulb}_mb`;
                const url = `http://uddbtr.org/ulb/${ulb}_mb`;
                window.location.href = url;
                // window.location.href = ulb/${ulb}_mb;
            } else {
                alert("Please select both District and ULB.");
            }
        }
    </script>
     <script>
        // Function to truncate the title to 50 words
        function truncateTitle(titleElement) {
            var titleText = titleElement.innerText;
            var words = titleText.split(' ');
            if (words.length > 50) {
                var truncatedText = words.slice(0, 50).join(' ') + '...';
                titleElement.innerText = truncatedText;
            }
        }

        // Truncate the title
        var titleElement = document.querySelector('.title a');
        truncateTitle(titleElement);

        // Add event listener to the "View More" button
        document.getElementById('view-more-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default action of following the link
            window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
        });
    </script>



    <script>
        // Get all elements with the class name "clickSuggession"
        const clickServiceElements = document.getElementsByClassName("clickService");

        // Iterate over the elements and add an event listener to each
        for (let i = 0; i < clickServiceElements.length; i++) {
            clickServiceElements[i].addEventListener("click", function (event) {
                console.log("suggestion clicked");

                // Prevent the default action to stay on the current page
                event.preventDefault();

                // Access the parent <a> element
                const parentLink = event.target.closest('a');

                // Retrieve the data attribute from the parent <a> element
                const data = parentLink.getAttribute('data-citizenService');
                console.log("Data attribute value: ", data);

                // Set the value of the serviceSubject input field
                document.getElementById("serviceSubject").value = data;

                document.getElementById("serviceSubject").style.fontSize = "20px"

                // Set the text of the subject h4 element
                document.getElementById("subject").innerText = "Give Your " + data;
            });
        }
    </script>

<script>
        // $(document).ready(function() {
            
        //     $('.clickService').on('click', function(e) {
        //         e.preventDefault();
               
               
        //         var serviceTitle = $(this).data('cs');
        //         var category = $("#category").val(serviceTitle);
        //         $('#categoryOutput').text(serviceTitle);
        //         // $('#category').val(serviceTitle);
        //         var mb = $("#mb").val();
        //         var email = $("#email").val();
        //         var message = $("#message").val();
                
        //         var formData = new FormData();
               
        //         formData.append('category', category);
        //         formData.append('mb', mb);
        //         formData.append('email', email);
        //         formData.append('message', message);
                
        //         // Log the service title to console
        //         console.log('Clicked Service: ' + serviceTitle);
        //         $('#category').html(serviceTitle);
                
        //         // Update modal content with serviceTitle
        //         $('#serviceTitle').text(serviceTitle);
                
        //         // Show the modal
        //         $('#citizenServiceModal').modal('show');
    
               
        //     });
        // });
        $(document).ready(function() {
    $('.clickService').on('click', function(e) {
        e.preventDefault();
        
        var serviceTitle = $(this).data('cs');
        
        $('#categoryOutput').text(serviceTitle);
        $('#category').val(serviceTitle);
        $('#serviceTitle').text(serviceTitle);
        $('#citizenServiceModal').modal('show');
    });
    
    $('#submit').on('click', function(e) {
        e.preventDefault();
        
        var mb = $("#mb").val();
        // console.log(mb);
        var email = $("#email").val();
        // console.log(email);
        var message = $("#message").val();
        // console.log(message);
        var category = $("#category").val(); 
        // console.log(category);
        
        var formData = new FormData();
        formData.append('mb', mb);
        formData.append('email', email);
        formData.append('message', message);
        formData.append('category', category);
        
        // Validate form fields
        if (mb === "" || email === "" || message === "" || category === "") {
            $("#formErrorMessage").html("Fill all the details to continue...");
        } else {
            $("#formErrorMessage").html("");
            
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }
            
            if (!validateEmail(email)) {
                $("#emailErrorMessage").html("Please enter a valid email address.");
                $("#email").focus();
            } else {
                $("#emailErrorMessage").html("");
                
                // Proceed with AJAX request
                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/submit-message",
                    data: formData,
                    success: function(response) {
                        if (response.successMessage) {
                            $("#submit").css("display", "false");
                            swal("Success!", response.successMessage, "success");
                            $("#mb").val("");
                            $("#email").val("");
                            $("#message").val("");
                            $("#category").val("");
                            setTimeout(function() {
                                location.reload();
                            }, 3000);
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                    },
                    error: function(error) {
                        swal("Error!", "Something went wrong", "error");
                    }
                });
            }
        }
    });
});


    </script>



</body>

</html>

