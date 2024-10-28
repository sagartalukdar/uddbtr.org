<?php include("include/head.php");
  include('classes/Crud.php');
  $crud=new Crud();
  $sliders=$crud->Read("home_slider","1 order by `id` desc");
  $aboutUs=$crud->Read("about_us","1 order by `id` desc");
  $chairPersonMessage=$crud->Read("chair_person_message","1 order by `id` desc");
  $homeSlidingCards=$crud->Read("home_sliding_card","1 order by `id` desc");
  $news_events=$crud->Read("news_events","1 order by `id` desc limit 3");
  $galleries=$crud->Read("gallery","1 order by `id` desc limit 10");
  $schemeLimit=$crud->Read("schemes","1 order by id desc limit 3");
  $recentUpdatesLimit=$crud->Read("recent_updates","1 order by `id` desc limit 5");
  $bottomScroll=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");
  $links=$crud->Read("usefull_links","1 order by `id` desc limit 3");
?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    
    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three position-relative">
            <!-- Video -->
            <div class="hero-bg-video video-overlay">
                <?php
                  if($sliders){
                ?>
                <img src="admin/<?= $sliders[0]['image']; ?>" style="width:100%; height:100%; " alt="">
                <?php    
                  }else{
                ?>
                <img src="" style="width:100%; height:100%; " alt="">
                <?php
                  }
                ?>
            </div>

            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <div class="hero-caption-three position-relative z-3">
                            <?php
                              if($sliders){
                            ?>
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                <?= $sliders[0]['head']; ?>
                            </h3>
                            <p class="pera wow fadeInUp font-700" data-wow-delay="0.1s">
                                <?= $sliders[0]['title']; ?>
                            </p>
                            <?php
                              }else{
                            ?>
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                Head text
                            </h3>
                            <p class="pera wow fadeInUp font-700" data-wow-delay="0.1s">
                                title area for home slider.
                            </p>
                            <?php
                              }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-area" style="padding-top: 42px !important;">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
                            <img src="../../assets/images/logo/udd-logo-removebg-preview.png"
                                style="width: 4rem;height: 4rem;margin-left: 1rem;" alt="">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align:justify;">
                            <div style="display: flex;justify-content: center;">
                                <?php
                            if($aboutUs){
                        ?>
                                <img style="max-width: 70%;max-height: 40%;border-radius: 6px;"
                                    src="admin/<?= $aboutUs[0]['image']; ?>" class="" alt="">
                                <?php
                            }else{
                        ?>
                                <img src="" class="" alt="" style="height: 13rem;width: 100%;">
                                <?php
                            }
                        ?>
                            </div>

                            <div class="p-2">
                                <?php
                        if($aboutUs){
                            echo strip_tags($aboutUs[0]['description']);
                        }
                        ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-section-title">
                            <h4 class="title">Welcome to Kokrajhar Municipal Board</h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <?php
                               if($aboutUs){
                             ?>
                            <span class="highlights fancy-font font-400">
                                <?= $aboutUs[0]['head']; ?>
                            </span>
                            <h4 class="title">About Us </h4>
                            <p class="pera t-justify" style="text-align: justify;">
                                <?php
                                  $desc=strip_tags($aboutUs[0]['description']);
                                  if(strlen($desc)>200){
                                    echo substr($desc,0,200). '  <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-danger">...read more</a>';
                                  }else echo $desc;
                                ?>
                            </p>
                            <?php
                               }else{
                             ?>
                            <span class="highlights fancy-font font-400"> Overview</span>
                            <h4 class="title">About Us </h4>
                            <p class="pera t-justify" style="text-align: justify;">short texts about us, Kokrajhar MB
                            </p>
                            <?php
                               }
                             ?>


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <?php
                                  if($aboutUs){
                                ?>
                                <img src="admin/<?= $aboutUs[0]['image']; ?>" class="" alt="">
                                <?php
                                  }else{
                                ?>
                                <img src="" class="" alt="" style="height: 13rem;width: 100%;">
                                <?php
                                  }
                                ?>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5">
                        <div class="news-details-banner imgEffect">
                            <div class="comment-section">
                                <div class="main-profile">
                                    <?php
                                        if($chairPersonMessage){
                                    ?>

                                    <div class="d-flex flex-column gap-10">
                                        <div class="user-img-lg">
                                            <img src="admin/<?= $chairPersonMessage[0]['image'] ?>"
                                                alt="chairpersonPhoto">
                                        </div>

                                        <div>
                                            <p class="desg font-700 text-secondary">
                                                <?= $chairPersonMessage[0]['name']; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Chairperson’s Message
                                        </h4>

                                        <?php
                                          $message=strip_tags($chairPersonMessage[0]['message']);
                                          if(strlen($message)>150){
                                        ?>

                                        <p class="pera">
                                            <?php echo substr($message,0,150)." ..."; ?>
                                            <span
                                                style="font-size: 13px;
                                                font-weight: 700;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px; cursor: pointer;">
                                                <a href="chair-person-message" style="color: #fff;">READ MORE</a>
                                            </span>
                                        </p>

                                        <?php
                                          }else{
                                        ?>
                                        <p class="pera">
                                            <?php echo $message; ?>
                                        </p>
                                        <?php
                                          }
                                        ?>

                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>

                                    <?php
                                        }else{
                                    ?>

                                    <div class="d-flex flex-column gap-10">
                                        <div class="user-img-lg">
                                            <img src="admin/img/chairPersonMessage/black.jpg" alt="chairpersonPhoto"
                                                style="height: 100%;">
                                        </div>

                                        <div>
                                            <p class="desg font-700 text-secondary">Chairperson’s name</p>
                                        </div>
                                    </div>

                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Chairperson’s Message
                                        </h4>


                                        <p class="pera"> message from the Chairperson’s of Kokrajhar Municipality Board
                                        </p>
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>

                                    <?php
                                        }
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>





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
                border: none;
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
                transform: translate(1px, 1px);
                transition-duration: .2s;
            }

            /* Add space between images */
            .destination-banner {
                display: block;
                margin-bottom: 1.5rem;
                /* Adjust the value as needed for spacing between rows */
            }

            .destination-content {
                padding: 1rem;
                /* Adjust padding as needed for spacing within the content */
            }

            /* Optional: Add padding to the container if needed */
            .row.g-4 {
                margin-right: -1.5rem;
                margin-left: -1.5rem;
            }

            .col-lg-12 {
                padding-right: 1.5rem;
                padding-left: 1.5rem;
            }

            /* Basic styling */
            .recent-news-list2 {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .list {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 22px;
                border-bottom: 1px solid #ddd;
                background-color: #fff;
                /* Ensure background color is white */
                border-radius: 8px;
                /* Optional: rounded corners */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                /* Optional: subtle shadow */
                margin-bottom: 10px;
                flex-wrap: wrap;
                /* Allow wrapping for smaller screens */
            }

            .image-container {
                flex-shrink: 0;
                margin-right: 20px;
            }

            .scheme-image {
                max-width: 250px;
                /* Adjust as needed */
                max-height: 100px;
                /* Adjust as needed */
                object-fit: cover;
                border: 1px solid #ddd;
                /* Optional: border for image */
                border-radius: 8px;
                /* Optional: border radius for image */
            }

            .details {
                flex: 1;
            }

            .title a {
                text-decoration: none;
                color: inherit;
            }

            .title h6 {
                margin: 0;
            }

            .info {
                margin-top: 8px;
            }

            .pdf-link {
                margin-left: 20px;
            }

            .pdf-link img {
                width: 30px;
                height: 30px;
                cursor: pointer;
            }

            /* Responsive Styles */
            @media (max-width: 768px) {
                .list {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .image-container {
                    margin-right: 0;
                    margin-bottom: 10px;
                }

                .pdf-link {
                    margin-left: 0;
                    margin-top: 10px;
                }
            }

            @media (max-width: 480px) {
                .title h6 {
                    font-size: 14px;
                }

                .pdf-link img {
                    width: 25px;
                    height: 25px;
                }
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


                                    <div class="heading"
                                        style="display: flex;justify-content: space-between;align-items: center;">
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

                                        <li class="list"
                                            style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">

                                            <div class='mx-2'>
                                                <a
                                                    href="recent-update-details?ruid=<?= base64_encode($notice['id']) ?>">
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
                                                    <img src="admin/img/organizationInfo/pdfcover.png"
                                                        style="width: 30px;height: 30px;" alt="">
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

                                        <li class="list"
                                            style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
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

                                    <div class="heading"
                                        style="display: flex; justify-content: space-between; align-items: center;border-bottom:none">
                                        <h4 class="title">SCHEMES</h4>
                                        <!-- <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                                        <?php
                                        if($schemeLimit){
                                        ?>
                                        <a href="view-all?q=schemes">
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

                                        <li class="list"
                                            style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                            <a href="scheme-details?id=<?= base64_encode($scm['id']); ?>">
                                                <div style="display: flex;align-items: center;gap: 2rem;">

                                                    <div>
                                                        <?php
                                                            if($scm['image']){
                                                            ?>
                                                        <img src="admin/<?= $scm['image']; ?>"
                                                            style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                                        <?php
                                                            }else{
                                                            ?>
                                                        <img src="admin/img/others/empty.jpg"
                                                            style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
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
                                                    <img src="admin/img/organizationInfo/pdfcover.png"
                                                        style="width: 30px;height: 30px;cursor: pointer;" alt="">
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
                                        <li class="list"
                                            style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                            <div style="display: flex;align-items: center;gap: 2rem;">
                                                <div>
                                                    <img src="admin/img/others/empty.jpg"
                                                        style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
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
                                                <img src="admin/img/organizationInfo/pdfcover.png"
                                                    style="width: 30px;height: 30px; filter: blur(1.3px); " alt="">
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

                        <div class="search-filter-section">


                            <div class="heading">

                                <h4 class="title">SOCIAL MEDIA</h4>
                                <!--  <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                            </div>

                            <div class="row g-4 position-static top-0">



                                <ul class="tour-listing">
                                    <iframe
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuddbtr%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                        width="340" height="450" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- notices ends -->

        <!-- start grievance and other services -->

        <!-- Explore S t a r t -->
        <section class="explore-area section-padding2 citizen ">
            <div class="container citizen-content">
                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430">
                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Citizen Charter
                            </h4>
                            <p>List of various online services provided by the ULB for citizens.</p>
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
                                    <h3 class="name">Sugestions to Develope KMB</h4>
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
                                        Dear citizens, your input matters! Share your suggestions with the Urban
                                        Development Department to help shape a better future for our city.<br>
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Sugestions"
                                            data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>
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
                                        Your feedback is essential! Let us know how we're doing and how we can improve
                                        by sharing your thoughts with the Urban Development Department.<br>
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Feedbacks"
                                            data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Ideas</h4>
                                    <p class="pera">
                                        Got ideas? We want to hear them! Share your innovative suggestions with the
                                        Urban Development Department and be part of shaping our city's future.<br>
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Ideas"
                                            data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>
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
                                        <a href="#citizenServiceModal" class="clickService" data-cs="Field Booking"
                                            data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions to Develope KMB</h4>
                                    <p class="pera">
                                        Your ideas matter! Help shape the Urban Development Department's future by
                                        sharing your suggestions for its development.<br>
                                        <a href="#citizenServiceModal" class="clickService"
                                            data-cs="Sugestions to Develope" data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>
                                        </a>
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>

                    <style>
                        .offer-banner-custom .offer-content-two-custom {
                            max-width: 85%;

                        }

                        @media (max-width: 991px) {
                            .offer-banner-custom .offer-content-two-custom {
                                max-width: 84%;
                                text-align: justify;
                            }
                        }


                        .offer-banner::before {
                            content: "";
                            position: absolute;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            z-index: -1;
                            background: linear-gradient(90deg, #636060 -0.26%, #6f7272 -0.26%, rgba(7, 21, 22, 0.6) 33.39%, rgba(7, 21, 22, 0.5) 45.1%, rgba(94, 97, 97, 0.69) 59.82%);

                        }


                        .recent-news-list2 .list {
                            background: linear-gradient(180deg, #cc87134f 0%, rgba(143, 64, 166, 0) 100%);

                        }
                    </style>

                    <div class="col-xl-5 col-lg-5 m-30" style="padding: 0px 16px;">

                        <div class="heading" style="display: flex;justify-content: space-between;align-items: center;">
                            <!-- <span class="line"></span> -->
                            <h4 class="title">Useful Links</h4>
                            <?php
                                if($links){
                            ?>

                            <a href="view-all?q=usefullLinks">

                                <button class="button">
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
                                                <i class="fas fa-long-arrow-alt-right"
                                                    style="font-size: 15px; color: #5ab6ec"></i>
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
                                            <i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 15px; color: #5ab6ec"></i>
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
        </section>
        <!--/ End of Explore -->

        <!-- Citizen service style -->

        <style>
            .citizen {
                position: relative;
                /* Ensure the section is positioned relatively */
            }

            .citizen::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: url('assets/images/style-images/bax-background-blue.PNG');
                background-size: cover;
                background-position: center;
                opacity: 0.4;
                /* Adjust the opacity as needed */
                z-index: 1;
                /* Place it behind the content */
            }

            .citizen .citizen-content {
                position: relative;
                z-index: 2;
                /* Ensure the content is above the background image */
            }

            .citizen-btn {
                box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
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
                            <div class="bx-shd2 border border-2"
                                style="position: absolute; top: 1px; right: 2px; background-color: hwb(0 64% 8%); padding: 5px; border-radius: 100%; transform: translateX(30%) translateY(-30%); ">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="container pb-3">
                                <div class="row justify-content-center">
                                    <div class="d-flex gap-16 align-items-center justify-content-center"
                                        style="align-items: center;">
                                        <h4>Citizen <span id="serviceTitle" style="color:#2d7dd8"></span> to KMB</h4>




                                        <div class="circle-primary-sm"
                                            style=" padding: 3%; background: linear-gradient(180deg, #e7bce7 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                            <img style="max-width: 30px;"
                                                src="../../assets/images/style-images/department-removebg-preview.png"
                                                alt="">
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
                                                <a href="index.html"><img src="assets/images/logo/Kokrajhar-mb-logo.png"
                                                        alt="logo" class="changeLogo" style="max-width: 92px"></a>
                                            </div>

                                            <div>
                                                <h5 style="color: rgb(45, 125, 216); font-weight: bold;">
                                                    Kokrajhar Municipality Board
                                                </h5>
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
                                                            target="_blank">783370 Hospital Rd, Bagansali, Tengapara,
                                                            Kokrajhar, Assam 783372</a></span>
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
                                                <!--<div class="col-sm-12">-->
                                                <!--    <label>Whom are you Suggesting for?</label>-->
                                                <!--    <select class="custom-form" name="mb" id="mb">-->

                                                <!--        <option value=""selected disabled="">Select MB</option>-->
                                                <!--        <option value="Basugaon MB">Basugaon MB</option>-->
                                                <!--        <option value="Bijni MB">Bijni MB</option>-->
                                                <!--        <option value="Fakiragram MB">Fakiragram MB</option>-->
                                                <!--        <option value="Goreswar MB">Goreswar MB</option>-->
                                                <!--        <option value="Gossaigaon MB">Gossaigaon MB</option>-->
                                                <!--        <option value="Kajalgaon MB">Kajalgaon MB</option>-->
                                                <!--        <option value="Kokrajhar MB">Kokrajhar MB</option>-->
                                                <!--        <option value="Mushalpur MB">Mushalpur MB</option>-->
                                                <!--        <option value="Tamulpur MB">Tamulpur MB</option>-->
                                                <!--        <option value="Tangla MB">Tangla MB</option>-->
                                                <!--        <option value="Udalguri MB">Udalguri MB</option>-->
                                                <!--        <option value="UDD">Urban Development Department</option>-->
                                                <!--    </select>-->

                                                <!--</div>-->

                                                <!--<div class="col-sm-12">-->
                                                <!--    <label>Category Selected</label>-->
                                                <!--    <input class="custom-form" type="hidden" placeholder="Category" name="category" id="category">-->
                                                <!--    <p id="categoryOutput" style=""></p> -->
                                                <!--</div>-->
                                                <div class="col-sm-6">
                                                    <label>Category Selected</label>
                                                    <input class="custom-form" type="hidden" placeholder="Category"
                                                        name="category" id="category">
                                                    <p class="custom-form" id="categoryOutput" style=""></p>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label>Email</label>
                                                    <input class="custom-form" name="email" id="email" type="text"
                                                        placeholder="Your Email">
                                                    <p id="emailErrorMessage" style="color: red"></p>
                                                </div>



                                                <div class="col-sm-12">
                                                    <label>Message</label>
                                                    <textarea class="custom-form-textarea" id="message" name="message"
                                                        rows="2" placeholder="Enter your message..."></textarea>
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

        <!-- start grievance and other services -->

        <section class="explore-area section-padding2  "
            style="background-color: black; margin-left: 20px; margin-right: 20px; border-radius: 30px;">
            <div class="container citizen-content">
                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430">
                        <div class="section-title  position-relative mb-60" style="left: 10px;">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h3
                                style="background: linear-gradient(to right, #fafcb1 30%, #b99bab 80%);
                            background-clip: border-box;background-clip: border-box;background-clip: border-box;-webkit-background-clip: text;-webkit-text-fill-color: transparent; text-align: center;font-weight: 700;font-size: 33px">
                                Avail Online Services
                            </h3>
                            <h5
                                style="background: linear-gradient(to right, #fcc9b1 30%, #f097c7 80%);
                            background-clip: border-box;background-clip: border-box;background-clip: border-box;-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-size: large; text-align: justify;">
                                List of various online services provided by the ULB for citizens.</h5>
                        </div>


                    </div>

                </div>
                <div class="row g-4">

                    <div class="col-xl-3 col-lg-3 col-md-4">

                        <a href="https://service.assamurban.in" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image:linear-gradient(to left, rgb(227, 168, 115), rgb(255, 96, 0)); padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Property Tax</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://eodbmis.assam.gov.in/eodb_api/logingeneral" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(162, 217, 168), rgb(124, 223, 56)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Trade Licence Application</h5>

                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/hoardings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(71, 114, 217), rgb(132, 225, 203)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Hoarding Permission</h5>

                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/cesspoolbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(217, 71, 201), rgb(237, 190, 238)); padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Cespool Request</h5>

                            </div>
                        </a>
                    </div>



                </div>

                <div class="row g-4 mt-10">

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/filmshootings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(242, 131, 173), rgb(247, 60, 140)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Film Shooting</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/fieldbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(178, 210, 120), rgb(187, 225, 49)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Field Booking</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/hallbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(120, 159, 210), rgb(103, 86, 225)); padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Hall Booking</h5>



                            </div>
                        </a>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/waterconnections/new" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-image: linear-gradient(to left, rgb(189, 178, 17), rgb(213, 196, 145)); padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Water Connection</h5>


                            </div>
                        </a>

                    </div>



                </div>

                <div class="row g-4 mt-10">

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/tdr/applications" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #2e5db6; padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">TDR</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://assamurban.in/obps" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #eb812a; padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">OBPS</h5>


                            </div>
                        </a>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-4">
                        <a href="https://assamurban.in/ulb-services" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #cc2dbf; padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">View Other Services</h5>

                            </div>
                        </a>

                    </div>

                </div>

                <div class="row g-4 mt-10"
                    style=" background-image: linear-gradient(to left, rgb(202, 169, 169), rgba(255,0,0,1)); padding: 11px; border-radius: 10px;">
                    <div class="col-xl-9 col-lg-8 col-md-8">
                        <div class="d-flex gap-16 align-items-center justify-content-center">
                            <h5 class="name text-center font-700 text-white">We are committed to providing excellent
                                service and want to hear from you. If you have any concerns or complaints about your
                                <span style="color: rgb(23, 79, 182); text-decoration: underline;">Urban Local Bodies
                                    (ULB)</span>, please click on the button to file a grievance.
                            </h5>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <a href="#citizenServiceModal" class="clickService" data-cs="Grievance"
                            data-citizenservice="Grievance" data-bs-toggle="modal">
                            <button class="btn btn-primary-icon-sm" style="padding: 7px 7px 7px">SUBMIT
                                GRIEVANCE</button>
                        </a>
                    </div>
                </div>



            </div>
        </section>

        <!--/ End of Testimonial -->

        <!-- aronoi style -->
        <!-- <div style="position: relative; margin-top: 15px;">
            <img src="admin/img/chairPersonMessage/black.jpg" height="100%" width="100%" alt="">
            <div style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 2;  background-color: rgba(137, 151, 230, 0.5); display: flex; justify-content: center; align-items: center;">
               
            </div>
        </div> -->


        <section class="news-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
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
                      if($news_events){
                        foreach($news_events as $news){
                    ?>

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>"><img
                                        style="min-height: 250px; max-height: 250px;" src="admin/<?= $news['image']; ?>"
                                        alt="">
                                </a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="heading-pera">
                                            <?= strip_tags($news['address']); ?>
                                        </span>
                                    </div>

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">
                                            <?= $news['date']; ?>
                                        </span>
                                    </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>">
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
                                        src="admin/img/chairPersonMessage/black.jpg" alt="">
                                </a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="heading-pera">address</span>
                                    </div>

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">dd/mm/yy</span>
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

                <?php if($news_events){ ?>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="events">
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




        <!-- Destination area S t a r t -->

        <!--/ End-of Destination -->




        <!-- Special area S t a r t -->


        <!-- Brand S t a r t -->

        <!--/ End of Brand -->



        <!--/ End of News -->




        <!-- Destination area S t a r t -->
        <section class="tour-details-section ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="section-title mx-605 mb-30 d-flex gap-16">
                            <!-- <span class="highlights">about us</span> -->
                            <h4 class="title">Photo Gallery</h4>
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
                              if($galleries){
                                foreach($galleries as $photo){
                            ?>
                            <div class="swiper-slide">
                                <a href="gallery">
                                    <img src="admin/<?= $photo['image']; ?>" alt="smartBTR"
                                        style="height: 400px;width: 100%;">
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



    </main>

    <?php include('include/imgAndArnoimotion.php') ?>


    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>

    <!-- Scroll Up  -->
    <!-- <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> -->
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
    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        function visitULB() {
            var district = document.querySelector('.district-dropdown').value;
            var ulb = document.querySelector('.ulb-dropdown').value.replace(/ /g, '').toLowerCase(); // Convert to lowercase and remove spaces
            if (district && ulb) {
                var url = ulb + ".assamurban.in";
                window.location.href = "http://" + url;
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


    <!-- 
<script>
    document.getElementsByClassName("clickSuggession").addEventListener("click", function(event) {
        console.log("suggestion clicked");
        
        // Prevent the default action to stay on the current page
        event.preventDefault();
        
        // Access the parent <a> element
        const parentLink = event.target.closest('a');
        
        // Retrieve the data attribute from the parent <a> element
        const data = parentLink.getAttribute('data-citizenService');
        console.log("Data attribute value: ", data);

        document.getElementById("serviceSubject").value = data;

        document.getElementById("subject").innerText = "Give your valueable " + data;

        document.getElementById("serviceSubject").style.fontSize ="20px"

    });
    

</script> -->




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
        $(document).ready(function () {
            $('.clickService').on('click', function (e) {
                e.preventDefault();

                var serviceTitle = $(this).data('cs');

                $('#categoryOutput').text(serviceTitle);
                $('#category').val(serviceTitle);
                $('#serviceTitle').text(serviceTitle);
                $('#citizenServiceModal').modal('show');
            });

            $('#submit').on('click', function (e) {
                e.preventDefault();

                // var mb = $("#mb").val();
                // console.log(mb);
                var email = $("#email").val();
                // console.log(email);
                var message = $("#message").val();
                // console.log(message);
                var category = $("#category").val();
                console.log(category);

                var formData = new FormData();
                // formData.append('mb', mb);
                formData.append('email', email);
                formData.append('message', message);
                formData.append('category', category);

                // Validate form fields
                if (email === "" || message === "" || category === "") {
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
                            success: function (response) {
                                if (response.successMessage) {
                                    $("#submit").css("display", "false");
                                    swal("Success!", response.successMessage, "success");
                                    // $("#mb").val("");
                                    $("#email").val("");
                                    $("#message").val("");
                                    $("#category").val("");
                                    setTimeout(function () {
                                        location.reload();
                                    }, 3000);
                                } else if (response.errorMessage) {
                                    swal("Error!", response.errorMessage, "error");
                                }
                            },
                            error: function (error) {
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