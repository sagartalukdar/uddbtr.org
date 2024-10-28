<?php include("include/head.php");

include('classes/Crud.php');
$crud=new Crud();
$aboutUs=$crud->Read("about_us","1 order by `id` desc");
$chdMessage=$crud->Read("chd_message","1 order by `id` desc");
$departmentOverview=$crud->Read("department_overview","1 order by `id` desc");


?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
         <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Department Overview</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">Department Overview</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
    
        <style>
            .text-justify {
                text-align: justify;
            }

            .offer-banner::before {
                content: "";
                position: absolute;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                background: none;
            }

            @media (max-width: 991px) {
                .offer-banner::before {
                    background: none;
                }
            }
        </style>


        <section class="why-area" style="padding-top: 42px !important;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-section-title">
                            <h4 class="title" style="font-size: large;">Welcome to Urban Development Department</h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">                         
                
                    <?php
                      if($aboutUs){
                    ?>

                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img style="min-height: 300px; max-height: 300px;" src="admin/<?= $aboutUs[0]['image'] ?>" alt="UDD">
                            </div>

                        </div>
                    </div>                      
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

                    <?php
                      }else{
                    ?>                      
                    
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img style="min-height: 300px; max-height: 300px;" src="admin/img/black.png" alt="UDD">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <h4 class="title">
                                About Us
                            </h4>
                            <span class="highlights fancy-font font-400">Head title</span>
     
                            <p class="pera t-justify">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aspernatur quisquam, laborum accusamus libero, quia consectetur atque laudantium excepturi veritatis corrupti alias est accusantium, animi iusto sint! Ratione, repudiandae excepturi eligendi voluptate harum enim inventore, porro sit deleniti accusamus nihil. Recusandae, debitis totam temporibus esse!
                            </p>

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
                                        <p class="pera" style="text-align: justify;">
                                            <?php
                                                $message=strip_tags($chdMessage[0]['message']);
                                                if(strlen($message)>150){
                                                    echo substr($message,0,150). 
                                                    '
                                                    <span
                                                        style="font-size: 13px;
                                                        font-weight: 700;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px; cursor: pointer;">
                                                        <a href="about-details?s=chdMessage" style="color: #fff;">
                                                            READ MORE
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
                    
                </div>
            </div>
        </section>
        


        <!-- Special area S t a r t -->
        <section class="special-area ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <div class="d-flex align-items-center gap-10">
                                <h4 class="title">
                                    More About Urban Development Department
                                </h4>                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--/ End-of Special-->

        <!-- About Us area S t a r t -->
        <section class="about-area  position-relative" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 col-lg-6">
                        <div class=" mx-430 mb-30  available-card">

                            <div class="d-flex align-items-center gap-10">
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    HISTORY
                                </h4>

                                <div class="circle-primary-sm"
                                    style="padding: 5%; background: linear-gradient(180deg, #e0cb50 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                    <img style="max-width: 40px;"
                                        src="assets/images/style-images/history-removebg-preview.png" alt="">
                                </div>

                            </div>

                            <?php
                               if($departmentOverview){
                            ?>

                                <p class="pera user-qty-card text-justify">
                                    <?php echo strip_tags($departmentOverview[0]['history']); ?>
                                </p>
                            
                            <?php
                               }else{
                            ?>
                                <p class="pera user-qty-card text-justify">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, ab molestias. Cum corrupti sed voluptate impedit quidem adipisci assumenda odit laudantium id laborum veritatis beatae dolorem voluptatibus magnam exercitationem neque minus minima, amet quaerat. Ratione voluptatibus, delectus minus ad quia, sed soluta numquam ducimus adipisci veritatis praesentium omnis assumenda optio repellendus nostrum magnam odio ipsa animi aut? Consectetur temporibus optio nostrum provident similique ex dignissimos sit repellat? Quibusdam officiis reiciendis aliquam consequuntur!
                                </p>
                            <?php
                               }
                            ?>

                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="available-card">
                            <div class="d-flex align-items-center gap-10">
                                <h4 class="title pb-3" style="color: rgb(104, 166, 236) !important;">
                                    OVERVIEW OF THE DEPARTMENT
                                </h4>


                                <div class="circle-primary-sm"
                                    style="padding: 5%; background: linear-gradient(180deg, #df7802 0%, rgb(150 211 202 / 0%) 100%) #e7dce7;">

                                    <img style="max-width: 40px;"
                                        src="assets/images/style-images/overview_department-removebg-preview.png"
                                        alt="">
                                </div>
                            </div>
                            <!-- user qty card -->
                            <?php
                               if($departmentOverview){
                            ?>

                                <p class="pera user-qty-card text-justify">
                                    <?php echo strip_tags($departmentOverview[0]['overview']); ?>
                                </p>
                            
                            <?php
                               }else{
                            ?>
                                <p class="pera user-qty-card text-justify">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, ab molestias. Cum corrupti sed voluptate impedit quidem adipisci assumenda odit laudantium id laborum veritatis beatae dolorem voluptatibus magnam exercitationem neque minus minima, amet quaerat. Ratione voluptatibus, delectus minus ad quia, sed soluta numquam ducimus adipisci veritatis praesentium omnis assumenda optio repellendus nostrum magnam odio ipsa animi aut? Consectetur temporibus optio nostrum provident similique ex dignissimos sit repellat? Quibusdam officiis reiciendis aliquam consequuntur!
                                </p>
                            <?php
                               }
                            ?>
                            <!-- / user qty card -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        <!-- gallery modal -->
                        <div class="galleryModal">
                            <span class="closeBtn"><i class="fas fa-times"></i></span>
                            <div class="containerBox">
                                <span class="left"><i class="fas fa-angle-left"></i></span>
                                <div class="img-modal">
                                    <img src="" alt="photo">
                                </div>
                                <span class="right"><i class="fas fa-angle-right"></i></span>
                            </div>
                        </div>
                        <!-- gallery modal -->

                        <!-- gallery modal css -->
                        <style>
                            .galleryModal {
                                position: fixed;
                                inset: 0;
                                background: rgba(0, 0, 0, .5);
                                align-items: center;
                                display: none;
                                z-index: 1000;
                            }

                            .galleryModal.show {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .galleryModal .containerBox {
                                display: flex;
                                align-items: center;
                            }

                            .galleryModal .img-modal {
                                width: 676px;
                                ;
                                height: 460px;
                                margin: 0 24px;
                            }

                            .galleryModal .img-modal img {
                                width: 100%;
                                height: 100%;
                                object-fit: contain;
                            }

                            .galleryModal span {
                                cursor: pointer;
                                font-size: 24px;
                                color: #fff;
                            }

                            .galleryModal .closeBtn {
                                position: absolute;
                                top: 100px;
                                right: 64px;
                                font-size: 36px;
                                color: #fff;
                            }

                            @media screen and (max-width: 768px) {

                                .galleryModal .img-modal {
                                    width: 476px;
                                    ;
                                    height: 360px;
                                    margin: 0 24px;
                                }
                            }

                            @media screen and (max-width: 576px) {

                                .galleryModal .containerBox {
                                    position: relative;
                                }

                                .galleryModal span {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                }

                                .galleryModal span.left {
                                    left: 24px;
                                    background: rgb(163, 154, 154);
                                    padding: 5px 6px;
                                    border-radius: 45%;
                                }

                                .galleryModal span.right {
                                    right: 24px;
                                    background: rgb(163, 154, 154);
                                    padding: 5px 6px;
                                    border-radius: 45%;
                                }

                                .galleryModal .img-modal {
                                    width: 356px;
                                    ;
                                    height: 260px;
                                    margin: 0 24px;
                                }

                            }

                            @media screen and (max-width: 350px) {
                                .galleryModal .img-modal {
                                    width: 256px;
                                    ;
                                    height: 220px;
                                    margin: 0 24px;
                                }
                            }
                        </style>

                        <div class="row mb-4 " style="padding: 10px; border-radius:8px ;">
                            <div class="col-12">
                                <div class="card h-100">
                                    <div class="card-body row">



                                        <div class="col-12 mb-2 gy-1 text-nowrap d-flex flex-column justify-content-between ps-4 gap-2 pe-3">

                                            <div class="imgs images"
                                                style="display: flex;flex-wrap: wrap;justify-content: space-evenly;align-items: center;gap: 1.3rem;">
                                                <?php
                                                   if($departmentOverview){
                                                ?>
                                                
                                                <div class="scheme">
                                                    <img style="height: 13rem;width: 12rem;border-radius: 6px;cursor: pointer;"
                                                        src="admin/<?= $departmentOverview[0]['image1']; ?>" alt="">
                                                </div>
                                                <div class="scheme">
                                                    <img style="height: 13rem;width: 12rem;border-radius: 6px;cursor: pointer;"
                                                        src="admin/<?= $departmentOverview[0]['image2']; ?>" alt="">
                                                </div>
                                                <div class="scheme">
                                                    <img style="height: 13rem;width: 12rem;border-radius: 6px;cursor: pointer;"
                                                        src="admin/<?= $departmentOverview[0]['image3']; ?>" alt="">
                                                </div>

                                                <?php
                                                   }else{
                                                    for($i=0;$i<3;$i++){
                                                ?>
                                                <div class="scheme">
                                                    <img style="height: 13rem;width: 12rem;border-radius: 6px;cursor: pointer;"
                                                        src="admin/img/black.png"
                                                        alt="">
                                                </div>
                                                <?php
                                                    }
                                                   }
                                                ?>
                                              
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery script -->
                        <script>
                            const left = document.querySelector('.galleryModal span.left');
                            const right = document.querySelector('.galleryModal span.right');
                            const modalImg = document.querySelector('.galleryModal .img-modal img');
                            const modal = document.querySelector('.galleryModal');
                            const close = document.querySelector('.closeBtn');

                            const allImg = document.querySelectorAll('.images .scheme img');

                            let iterator = 0;
                            for (let i = 0; i < allImg.length; i++) {
                                allImg[i].addEventListener('click', function () {
                                    const urlImg = this.getAttribute('src');
                                    // alert(urlImg);
                                    modal.classList.add('show');
                                    modalImg.setAttribute('src', urlImg);
                                    iterator = i;
                                });

                            }

                            left.addEventListener('click', function () {
                                iterator === 0 ? iterator = allImg.length - 1 : iterator -= 1;
                                const urlImg = allImg[iterator].getAttribute('src');
                                modalImg.setAttribute('src', urlImg);
                            });
                            right.addEventListener('click', function () {
                                iterator === allImg.length - 1 ? iterator = 0 : iterator += 1;
                                const urlImg = allImg[iterator].getAttribute('src');
                                modalImg.setAttribute('src', urlImg);
                            });

                            close.addEventListener('click', function () {
                                modal.classList.remove('show');
                            });

                        </script>
                        <!-- gallery script -->





                    </div>
                </div>

            </div>
           
        </section>
        <!--/ End-of About US-->

    </main>

    <!-- bottom images start -->
    <?php include("include/imgAndArnoimotion.php");?>
    <!-- bottom images end -->


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

</body>

</html>