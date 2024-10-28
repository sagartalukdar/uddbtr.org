<?php include("include/head.php");
include ('classes/Crud.php');
$crud=new Crud();

 if(isset($_GET['id'])){
    $SchemeId=base64_decode($_GET['id']);
  }
  $scheme = $crud->Read("schemes","`id`='$SchemeId'"); 
  $schemeDetails = $crud->Read("scheme_details","`scheme_id`='$SchemeId'and `status`='1' ORDER BY id DESC"); 
  if($scheme){
      $schemeName=$scheme[0]['scheme_name'];
      $s_contractor=$scheme[0]['done_by'];
      $s_contractor=$scheme[0]['done_by'];
      $contact_no=$scheme[0]['contact_no'];
      $s_location=$scheme[0]['location'];
      
  }

?>

<body>
    <?php include("include/preloader.php"); ?>
    <?php include("include/header.php");?>
    <main>
          <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Scheme Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Scheme Detail</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        

        
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
            height: 260px;
            margin: 0 24px;
        }
  
    }
  
    @media screen and (max-width: 350px) {
        .galleryModal .img-modal {
            width: 256px;
            height: 220px;
            margin: 0 24px;
        }
    }
  </style>






        <section class="testimonial-area pt-30">
            <div class="container">

                <div class="row g-0">
                    <div class=" col-12 col-md-12  col-lg-12 ">
                        <?php if (isset($schemeName) && !empty($schemeName)) { ?>
                            <h2 style="text-align:center;color: #00a2c7 !important;font-weight: 700;">SCHEME NAME : <?php echo $schemeName; ?></h2>
                        <?php } ?>
                        <div
                            class="swiper h-calc testimonialTwo-active swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                            <div class="swiper-wrapper bx-shd2" id="swiper-wrapper-3723c3a988833ccf" aria-live="off">
                                <div class="swiper-slide testimonial-card-two h-calc swiper-slide-visible swiper-slide-fully-visible swiper-slide-active"
                                    role="group" aria-label="1 / 1"
                                    style="width: 744px; opacity: 1; transform: translate3d(0px, 0px, 0px); border-radius: 2%;background-color: none;">
                                    <?php
                                          if($schemeDetails){
                                            foreach($schemeDetails as $s_Details){
                                                $s_details=$s_Details['scheme_details'];
                                                $s_progress=$s_Details['progress'];
                                                $s_image1=$s_Details['image1'];
                                                $s_image2=$s_Details['image2'];
                                                $s_image3=$s_Details['image3'];
                                                $s_date=$s_Details['date'];
                                                $timestamp = strtotime($s_date);
                                                $formatted_date = date('d-F-Y', $timestamp);
                                                
                                        ?>
                                        
                                    <div class="faqs-area bottom-padding">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div class="pera t-justify user-qty-card text-justify bx-shd2"
                                                        style="font-weight: normal;">
                                                        
                                                        <div class="row d-flex justify-content-between">

                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <p  style="padding: 7px;font-weight:700; margin: 20px; margin-left: 0px; color: #3489c2; background-color: rgb(199, 212, 230); border-radius: 7px; width: 110px; text-align: center;">
                                                                   DETAILS
                                                                </p>
                                                                 <P>
                                                                 <strong>PROGRESS DETAILS : </strong>
                                                                 <span> <?php echo $s_details;?></span>
                                                               </P>
                                                               <P>
                                                                <strong>CONTRACTOR : </strong>
                                                                <span> <?php echo $s_contractor;?></span>
                                                              </P>
                                                              
                                                               <P>
                                                                <strong>LOCATION : </strong>
                                                                <span> <?php echo $s_location;?></span>
                                                              </P>
                                                              
                                                              
                                                              
                                                            </div>

                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <p  style="padding: 7px;font-weight:700; margin: 20px; margin-left: 0px; color: #3489c2; background-color: rgb(199, 212, 230); border-radius: 7px; width: 130px; text-align: center;">
                                                                    <?php echo $formatted_date;?>
                                                                 </p>

                                                                 <P>
                                                                    <strong>PROGRESS</strong>
                                                                    
                                                                  </P>
                                                                  <?php
                                                                    if ($s_progress == '100') {
                                                                        // Output for 100% progress
                                                                        echo '<div class="progress">
                                                                                <div class="progress-bar completed" 
                                                                                     role="progressbar" 
                                                                                     style="width: ' . htmlspecialchars($s_progress) . '%;' . 
                                                                                            'background-color: #0dee30;color:#0d0a0a;font-weight:700" 
                                                                                     aria-valuenow="' . htmlspecialchars($s_progress) . '" 
                                                                                     aria-valuemin="0" 
                                                                                     aria-valuemax="100">
                                                                                 
                                                                                  <span class="completed-text">100%</span>
                                                                                  
                                                                                </div>
                                                                                
                                                                              </div>
                                                                              <p><strong>completed<strong> <i class="fa fa-check checkmark"style=color:#36fd0d></i> </p>';
                                                                    } else {
                                                                       
                                                                        echo '<div class="progress">
                                                                                <div class="progress-bar" 
                                                                                     role="progressbar" 
                                                                                     style="width: ' . htmlspecialchars($s_progress) . '%;" 
                                                                                     aria-valuenow="' . htmlspecialchars($s_progress) . '" 
                                                                                     aria-valuemin="0" 
                                                                                     aria-valuemax="100">
                                                                                  ' . htmlspecialchars($s_progress) . '%
                                                                                </div>
                                                                              </div>';
                                                                    }
                                                                    ?>



                                                            </div>

                                                        </div>

                                                        <div class="row mt-30">
                                                            <div class="imgs images  col-12 d-flex flex-wrap gap-10 justify-content-around ">
                                                               <div class="image-box">
                                                                  <img style="max-height: 180px; max-width: 150px; border-radius: 3%;" src="admin/<?php echo $s_image1;?>" alt="progress-image">
                                                               </div>
                                                               <div class="image-box">
                                                                <img style="max-height: 180px; max-width: 150px; border-radius: 3%;" src="admin/<?php echo $s_image2;?>" alt="progress-image">
                                                              </div>

                                                             <div class="image-box">
                                                                <img style="max-height: 180px; max-width: 150px; border-radius: 3%;" src="admin/<?php echo $s_image3;?>">
                                                             </div>


                                                            </div>    
                                                        </div>

                                                          


                                                       

                                                    </div>

                                                </div>

                                               


                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>

                                </div>


                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <div>
            <img src="../../assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%"
                alt="">
        </div>



    </main>





    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
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




    
<!-- gallery script -->
<script>
    const left = document.querySelector('.galleryModal span.left');
    const right = document.querySelector('.galleryModal span.right');
    const modalImg = document.querySelector('.galleryModal .img-modal img');
    const modal = document.querySelector('.galleryModal');
    const close = document.querySelector('.closeBtn');
  
    const allImg = document.querySelectorAll('.images .image-box img');
  
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
  








</body>

</html>