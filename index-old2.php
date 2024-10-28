<?php include("include/head.php");?>

<body>

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
                        <div class="hero-caption-three position-relative z-3">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                Urban Development Department
                            </h3>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                                To monitor the growth of new urban areas in BTR and include them under planning
                                procedures to ensure their efficient and orderly growth.
                            </p>
                        </div>
                        <!-- <div class="hero-footer position-relative z-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="all-user">
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-2.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-3.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                </div>
                                <div class="happy-user-count">
                                    <p class="user-count">5k+</p>
                                </div>
                                <p class="pera">Happy Customer</p>
                                <span class="wave-emoji">
                                    <img src="assets/images/icon/hand.png" alt="travello">
                                </span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->
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
                            <option value="Tamalpur">Tamalpur</option>
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
                                <path clip-rule="evenodd"
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



        <section class="testimonial-area-three position-relative section-bg-before-two" style="padding-top: 55px;">

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
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <!-- <img src="assets/images/gallery/EM.jpg" alt="smartBTR"> -->
                                            <img src="assets/images/style-images/em.PNG" alt="EM image">

                                        </div>
                                        <div class="user-info" style="margin-top: 50px">
                                            <p class="name fs-2" style="color: #5ab6ec;">Wilson Hasda</p>
                                            <p class="designation fs-6 fw-bold">Executive Member, BTC</p>
                                        </div>

                                    </div>

                                    <div class="testimonial-body">
                                        <p class="t-justify" style="font-size: large;">
                                            The beauty of Indian democracy lies in the role played by its citizens. The
                                            citizens make their representatives responsible to ensure peace, freedom and
                                            progress in the society.

                                            As a people's representative, I am happy for the opprtunity I have got to
                                            serve the people and lead them towards a better future. Grateful to all for
                                            your love and immense support.


                                        </p>
                                    </div>

                                </div>


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="assets/images/gallery/em-mssg.jpg" alt="travello">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="travello">
                            </div>
                            <a href="https://www.youtube.com/watch?v=P2-6tu0pWTc" data-fancybox="video-gallery"
                                class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- / End Slider -->
                </div>
            </div>
            <!-- <div class="shape-testimonial">
                <img src="assets/images/icon/graphic.png" alt="travello">
            </div> -->
        </section>
        <!--/ End of Testimonial -->

        <div style="position: relative; margin-top: 15px;">
            <img src="assets/images/style-images/aronai-bis.png" height="100%" width="100%" alt="">
            <div
                style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 2;  background-color: rgba(137, 151, 230, 0.5); display: flex; justify-content: center; align-items: center;">

            </div>
        </div>

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
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <!-- <span class="highlights fancy-font font-400">About Us</span> -->
                            <!-- <h4 class="title">
                                Overview
                            </h4> -->
                            <p class="pera t-justify">
                                The main function of the department is coordination between the Urban Local Bodies of
                                the BTR and discharging the statutory responsibilities under the provisions of the Assam
                                Municipal Act, 1956 as adopted by B.T.C. The other functions including administering the
                                provisions of the Assam Town & Country Planning Act, 1958 by way of publishing the
                                Master Plan of each and enforcement of building by-laws as per Assam Notified Urban
                                Areas Building Rules (other than Guwahati) 2014 in every urban areas of BTR.
                            </p>

                            <!-- <div class="section-button mt-27 d-inline-block">
                                <a href="about.html" class="btn-primary-icon-sm radius-20">
                                    <p class="pera mt-0">Read More</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img style="min-height: 300px; max-height: 300px;" src="assets/images/style-images/udd-office.jpeg" alt="Council-Head-of-the-Department">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="news-details-banner imgEffect">
                            <div class="comment-section">
                                <div class="main-profile">
                                    <div class="user-img-lg">
                                        <img src="assets/images/news/chd_small.jpg" alt="Council-Head-of-the-Department">

                                    </div>
                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Message from Council Head of Department
                                        </h4>
                                        <p class="desg">Sri Lankeswar Owarie</p>
                                        <p class="pera">Bodoland Territorial Region (BTR) is an autonomous region within
                                            the state of Assam with the total population of 31,55,395 residing in 8970
                                            sq km area....
                                            <span
                                                style="font-size: 13px;
                                          font-weight: 700;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px; cursor: pointer;">
                                                <a href="about-details.php?s=chdMessage" style="color: #fff;">READ
                                                    MORE</a></span>

                                        </p>
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
                                                            href="about-details.php?s=aboutUs" style="color: #fff;">READ
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
                                                            href="about-details.php?s=ourObjective"
                                                            style="color: #fff;">READ MORE</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/department.png"
                                                        style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">Overview Of Department</h4>
                                                    <p class="pera line-clamp-3">
                                                        The main function of the department is coordination between the
                                                        Urban Local Bodies of the BTR and discharging the statutory
                                                        responsibilities under the provisions of the Assam Municipal
                                                        Act, 1956 as adopted by B.T.C
                                                    </p>

                                                    <span
                                                        style="width: 100px; margin-left: auto; font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px"><a
                                                            href="about-details.php?s=OOD" style="color: #fff;">READ
                                                            MORE</a></span>

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
                                                            href="about-details.php?s=History" style="color: #fff;">READ
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
                                                            href="about-details.php?s=btrAssam"
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
        <!-- Testimonial S t a r t -->
        <!-- <section class="testimonial-area " style="padding-top: 60px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title icon-text  mx-auto text-center d-flex align-items-center gap-3;" style="margin-bottom: 20px;">
                                 ////commented<span class="highlights">Testimonial</span>
                            <div class="circle-primary-sm" style="padding: 2%; background: linear-gradient(180deg, #f9b762 0%, rgba(143, 64, 166, 0) 100%) #60cc85;">
                                <img style="max-width: 30px;" src="assets/images/style-images/honourable-icon-removebg-preview.png" alt="">
                            </div>
                            
                            <h4 class="title" style="margin-left: 10px;">                              
                                Hononourable Dignitaries
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="swiper h-calc testimonialTwo-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card-two h-calc">
                                   
                                    
                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/EM.jpg" alt="travello">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name">Wilson Hasda</p>
                                                <p class="designation">Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera" style="text-align: justify;">
                                            Wilson Hasda is an esteemed individual who currently serves as an executive member of the Bodoland Territorial Council. He is affiliated with the United People's Party Liberal (UPPL) and has made significant contributions to the community as a social worker in various non-governmental organizations (NGOs).As an executive member of the Bodoland Territorial Council, Wilson Hasda plays a crucial role in the governance and decision-making processes. His deep understanding of social issues and his commitment to public service make him a valuable asset to the council.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card-two h-calc">
                                    
                                    
                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/chief.jpg" alt="travello">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name">Promod Boro</p>
                                                <p class="designation">Chief Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera" style="text-align: justify;">
                                            Pramod Boro (Born 1 March 1975) is an Indian politician serving as the president of The United People's Party Liberal (UPPL) since 25 February 2020 and Chief Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He was the former president of All Bodo Students Union. Pramod Boro was born to Late Ghanashyam Boro. He is a resident of Tamulpur, Baksa district.As the CEM of BTC, Pramod Boro exemplifies a dedicated leader who is driven by the welfare of the people and the progress of the region. His efforts to bring about positive change and his commitment to inclusive development make him an influential figure in the Bodoland Territorial Council.
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                              //////    <span class="line"></span> 
                                        <h4 class="title">USEFUL LINKS</h4>
                                        <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt="">
                                    </div>

                                    <ul class="recent-news-list2">
                                        <li class="list">
                                            <h5 class="title line-clamp-2 list"><a href="https://bodoland.gov.in/index.php">BTR GOVERNMENT WEB PORTAL  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h5>
                                            
                                        </li>v
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://seedbtr.com/">BTR SEED DEPARTMENT  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://skill.assam.gov.in/">GOVERNMENT OF ASSAM SKILL EMPLOYMENT AND ENTREPRENEUR  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://www.pmkvyofficial.org/">PRADHAN MANTRI KAUSHAL VIKASH YOJNA 
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://assam.gov.in/">GOVERNMENT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://dma.assam.gov.in/">DIRECTORATE OF MUNICIPAL ADMINISTRATION, GOVT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        

                                        
                                       
                                    </ul>
                                    
                                </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--/ End of Testimonial -->


        <!-- Testimonial S t a r t -->
        <section class="testimonial-area " style="padding-top: 60px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title icon-text  mx-auto text-center;" style="margin-bottom: 20px;">
                            <!-- <span class="highlights">Testimonial</span> -->

                            <div class="d-flex align-items-center">
                                <div class="circle-primary-sm"
                                    style="padding: 2%; background: linear-gradient(180deg, #f9b762 0%, rgba(143, 64, 166, 0) 100%) #60cc85; display: flex;">
                                    <img style="max-width: 30px;"
                                        src="assets/images/style-images/honourable-icon-removebg-preview.png" alt="">
                                </div>

                                <h4 class="title" style="display: inline-block !important;margin-left: 10px;">
                                    Honourable Dignitaries
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="swiper h-calc testimonialTwo-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card-two h-calc">


                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/EM.jpg" alt="travello">
                                            </div>

                                            <div class="user-info">
                                                <p class="name">Wilson Hasda</p>
                                                <p class="designation">Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p style="text-align: justify; font-size: large;">
                                            Wilson Hasda is an esteemed individual who currently serves as an executive
                                            member of the Bodoland Territorial Council. He is affiliated with the United
                                            People's Party Liberal (UPPL) and has made significant contributions to the
                                            community as a social worker in various non-governmental organizations
                                            (NGOs).As an executive member of the Bodoland Territorial Council, Wilson
                                            Hasda plays a crucial role in the governance and decision-making processes.
                                            His deep understanding of social issues and his commitment to public service
                                            make him a valuable asset to the council.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card-two h-calc">


                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/chief.jpg" alt="travello">
                                            </div>

                                            <div class="user-info">
                                                <p class="name">Promod Boro</p>
                                                <p class="designation">Chief Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p style="text-align: justify; font-size: large;">
                                            Pramod Boro (Born 1 March 1975) is an Indian politician serving as the
                                            president of The United People's Party Liberal (UPPL) since 25 February 2020
                                            and Chief Executive Member of Bodoland Territorial Region, an autonomous
                                            region in Assam since 15 December 2020. He was the former president of All
                                            Bodo Students Union. Pramod Boro was born to Late Ghanashyam Boro. He is a
                                            resident of Tamulpur, Baksa district.As the CEM of BTC, Pramod Boro
                                            exemplifies a dedicated leader who is driven by the welfare of the people
                                            and the progress of the region. His efforts to bring about positive change
                                            and his commitment to inclusive development make him an influential figure
                                            in the Bodoland Territorial Council.
                                        </p>
                                    </div>
                                </div>

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


                                    <div class="image-wrapper" style="background-color: #ffffff;">
                                        <img src="assets/images/style-images/assammap.png" class="img-fluid"
                                            alt="Image">
                                    </div>


                                    <div class="testimonial-body">

                                        <p class="name text-center"
                                            style="color: #60aef6;font-size: 30px;font-weight: 700;line-height: 1.2;">
                                            BTR, ASSAM</p>
                                        <p class="pera">
                                        <ul>
                                            <li><strong>Established:</strong><span style="font-size: 15px"> 9 February,
                                                    2003</span></li>
                                            <li><strong>Govt. Type:</strong> <span style="font-size: 15px"> Autonomus
                                                    Administrative Region</span></li>
                                            <li><strong>Body:</strong> <span style="font-size: 15px"> Autonomus
                                                    Administrative Region</span></li>
                                            <li><strong>Total Area:</strong> <span style="font-size: 15px"> 8,970
                                                    Km2</span></li>
                                            <li><strong>Official Languages:</strong> <span style="font-size: 15px">
                                                    Bodo, English, Assamese</span></li>
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


        <!-- notices -->

        <section class="destination-details-section section-padding2"
            style="background-image: url('assets/images/style-images/Capture.PNG');">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title mx-430 mx-auto text-center">
                            <!-- <span class="highlights">Testimonial</span> -->
                            <h4 class="title">
                                Updates and Notices

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4" style="padding: 0px 16px;">
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12"
                                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-top-left-radius: 50px; border-bottom-right-radius: 50px; background-color:white; ">
                                <div class="search-filter-section">


                                    <div class="heading">
                                        <!-- <span class="line"></span> -->
                                        <h4 class="title">RECENT NEWS</h4>
                                        <!-- <img  style="max-width: 80px;" src="assets/images/style-images/recent-news-removebg-preview.png" alt=""> -->
                                    </div>

                                    <ul class="recent-news-list">
                                        <li class="list">

                                            <h4 class="title "><a href="news-details.html">Kokrajhar Town Drainage
                                                    Inspection: Significant Improvements in Flood Prevention and
                                                    Community Safety <img class="blink" src="assets/images/icon/n1.png"
                                                        style="max-width: 60px"></a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Inauguration of
                                                    Non-Residential Skill Training Programme in Kokrajhar: A Step
                                                    Forward in Skill Development</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html"> Kokrajhar
                                                    Municipal Board Launches Door-to-Door Waste Segregation Awareness
                                                    Campaign</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Kokrajhar Town
                                                    Drainage Inspection: Significant Improvements in Flood Prevention
                                                    and Community Safety</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="col-xl-4 col-lg-4 m-30" style="padding: 0px 16px;">
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12"
                                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-top-left-radius: 50px; border-bottom-right-radius: 50px; background-color:white;">
                                <div class="search-filter-section">

                                    <!-- <div class="news-detals-search">
                                        <input type="search" class="search-input" placeholder="Search">
                                        <div class="icon">
                                            <i class="ri-search-line"></i>
                                        </div>
                                    </div> -->
                                    <div class="heading">
                                        <!-- <span class="line"></span> -->
                                        <h4 class="title">LATEST TENDER</h4>
                                        <img style="max-width: 50px"
                                            src="assets/images/style-images/tenders-removebg-preview.png" alt="">

                                    </div>

                                    <ul class="recent-news-list">
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Example Tender
                                                    Notice</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Example Tender
                                                    Notice</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Example Tender
                                                    Notice</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">Example Tender
                                                    Notice</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                    <p class="date">Jan 23, 2025</p>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">

                            <div class="col-lg-12">
                                <div class="tour-list-card">
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

            </div>
        </section>

        <!-- notices ends -->

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
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn citizen-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Suggestion</h4>
                                </div>
                            </div>
                            <div class="explore-btn citizen-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Feedbacks</h3>
                                </div>
                            </div>
                            <div class="explore-btn citizen-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Ideas</h4>
                                </div>
                            </div>
                            <div class="explore-btn citizen-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Suggestion to Develop UDD</h4>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3"
                        style="background-color: var(--tertiary-border); border-radius: 13px; padding: 30px;">
                        <div class="tab-content " id="v-pills-tabContent-three">
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel"
                                aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Suggestion</h4>
                                    <p class="pera">
                                        Dear citizens, your input matters! Share your suggestions with the Urban
                                        Development Department to help shape a better future for our city.<br>

                                        <a href="#citizenServiceModal" class="clickService"
                                            data-citizenService="Suggestion" data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">

                                            click here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i>

                                        </a>


                                    </p>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel"
                                aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Feedbacks</h4>
                                    <p class="pera">
                                        Your feedback is essential! Let us know how we're doing and how we can improve
                                        by sharing your thoughts with the Urban Development Department.<br>

                                        <a href="#citizenServiceModal" class="clickService"
                                            data-citizenService="Feedback" data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>

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

                                        <a href="#citizenServiceModal" class="clickService" data-citizenService="Ideas"
                                            data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>

                                    </p>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions to Develop UDD</h4>
                                    <p class="pera">
                                        Your ideas matter! Help shape the Urban Development Department's future by
                                        sharing your suggestions for its development.<br>

                                        <a href="#citizenServiceModal" class="clickService"
                                            data-citizenService="Suggestion to Develop UDD" data-bs-toggle="modal"
                                            style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click
                                            here<i class="fas fa-long-arrow-alt-right"
                                                style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>


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
                    </style>

                    <div class="col-xl-5 col-lg-5">
                        <div class="offer-banner offer-banner-custom imgEffect4 wow fadeInRight" data-wow-delay="0.0s"
                            style="min-height: 100%;">
                            <img style="min-height: 100%; width: 100%; opacity: 0.6; "
                                src="assets/images/style-images/herotender2.PNG" alt="smartBTR">
                            <div class="offer-content-two offer-content-two-custom" style="width: 85%;">
                                <h1 style="font-size: x-large; color: white !important;">If you have any concerns or
                                    complaints about your Urban Local Bodies (ULB), please click on the button to send a
                                    grievance.
                                </h1>


                              

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ End of Explore -->


        <!-- start grievance and other services -->

        <section class="explore-area section-padding2  "
            style="background-color: black; margin-left: 20px; margin-right: 20px; border-radius: 30px;">
            <div class="container citizen-content">
                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430">
                        <div class="section-title  position-relative mb-60" style="left: 10px;">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h3 style=" color: rgb(255, 255, 255); text-align: center;">
                                Avail Online Services
                            </h3>
                            <h5 style="color: white; font-size: large; text-align: justify;">List of various online
                                services provided by the ULB for citizens.</h5>
                        </div>

                        <div>
                            <img height="80px" width="100px"
                                src="assets/images/style-images/online-service-removebg-preview.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="row g-4">

                    <div class="col-xl-3 col-lg-3 col-md-4">

                        <a href="https://service.assamurban.in" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #d3646a; padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Property Tax</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://eodbmis.assam.gov.in/eodb_api/logingeneral" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #96272c; padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Trade Licence Application</h5>

                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/hoardings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #64b0d3; padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Hoarding Permission</h5>

                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/cesspoolbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #d3646a; padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Cespool Request</h5>

                            </div>
                        </a>
                    </div>



                </div>

                <div class="row g-4 mt-10">

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/filmshootings/apply" target="_blank">
                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #d364c4; padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Film Shooting</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/fieldbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #bbac23; padding: 11px; border-radius: 10px;">

                                <h5 class="name text-center font-700 text-white">Field Booking</h5>


                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/hallbookings/apply" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #8264d3; padding: 11px; border-radius: 10px;">
                                <h5 class="name text-center font-700 text-white">Hall Booking</h5>



                            </div>
                        </a>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a href="https://service.assamurban.in/waterconnections/new" target="_blank">

                            <div class="d-flex gap-16 align-items-center justify-content-center"
                                style="background-color: #a79c3d; padding: 11px; border-radius: 10px;">

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
                                    (ULB)</span>, please click on the button to send a grievance.
                            </h5>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <a href="#citizenServiceModal" class="clickService" data-citizenService="Grievance"
                            data-bs-toggle="modal">
                            <button class="button">
                                <span class="button_lg">
                                    <span class="button_sl"></span>
                                    <span class="button_text">SUBMIT GRIEVANCE</span>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>



            </div>
        </section>
        <!-- End grievance and other services -->


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
                                        <h4>Citizen Grievance to UDD</h4>

                                      


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
                                                <a href="index.html"><img src="assets/images/logo/nem.png" alt="logo"
                                                        class="changeLogo" style="max-width: 42px"></a>
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
                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="text"
                                                        placeholder="Enter your name">
                                                </div>

                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="text" placeholder="Your Phone">
                                                </div>

                                                <div class="col-sm-6">
                                                    <select class="custom-form">
                                                        <option value="" disabled selected>Select MB</option>
                                                        <option value="Kokrajhar MB">Kokrajhar MB</option>
                                                        <option value="Fakiragram MB">Fakiragram MB</option>
                                                        <option value="Gossaigaon MB">Gossaigaon MB</option>
                                                        <option value="Kajalgaon MB">Kajalgaon MB</option>
                                                        <option value="Basugaon MB">Basugaon MB</option>
                                                        <option value="Bijni MB">Bijni MB</option>
                                                        <option value="Udalguri MB">Udalguri MB</option>
                                                        <option value="Tangla MB">Tangla MB</option>
                                                        <option value="Goreswar MB">Goreswar MB</option>
                                                        <option value="Mushalpur MB">Mushalpur MB</option>
                                                        <option value="Tamulpur MB">Tamulpur MB</option>
                                                    </select>
                                                </div>


                                                <div class="col-sm-6">
                                                    <input class="custom-form" id="serviceSubject" type="text"
                                                        placeholder="Select subject" readonly>
                                                </div>



                                                <div class="col-sm-12">
                                                    <textarea class="custom-form-textarea"
                                                        id="exampleFormControlTextarea1" rows="2"
                                                        placeholder="Enter your message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="mt-40">
                                                <div class="sign-btn">
                                                    <button class="button-signin">
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



        <style type="text/css">
            .circle {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                overflow: hidden;
                /* Ensure image stays within the circle */
                background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid white;
                /* Add border */
            }

            .circle img {
                width: 100%;
                height: auto;
                display: block;
                height: 20px;
                width: 15px;
            }

            .circle1 {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                overflow: hidden;
                /* Ensure image stays within the circle */
                background: linear-gradient(111.04deg, rgb(210, 244, 235) -0.63%, rgb(144, 247, 189) 107.47%);
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid white;
                /* Add border */
            }

            .circle1 img {
                width: 100%;
                height: auto;
                display: block;
                height: 35px;
                width: 40px;
            }

            .about-banner {
                position: relative;
                /* Ensure the position context for pseudo-element */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                /* Add box-shadow */
                border-radius: 8px;
                /* Optional: Add border radius for rounded corners */
                overflow: hidden;
                /* Ensure overflow is hidden for inner elements */
            }

            .about-banner img {
                display: block;
                /* Ensure image behaves as block element */
                width: 100%;
                /* Ensure image fills its container */
                height: auto;
                /* Maintain aspect ratio */
            }

            .video-player {
                position: absolute;
                /* Position video player overlay */
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                /* Center exactly */
                background-color: rgba(0, 0, 0, 0.5);
                /* Semi-transparent background */
                border-radius: 50%;
                /* Optional: Round shape for play button */
                padding: 20px;
                /* Adjust padding as needed */
            }

            .video-player i {
                color: #fff;
                font-size: 48px;
            }

            .img-fluid {
                border-radius: 5px;
            }

            .aronai {
                position: relative;
                background-image: url('assets/images/icon/aronai.jpg');
                /* Replace with your image path */
                background-size: cover;
                background-position: center;
                padding: 100px 0;
                /* Adjust padding as needed */
            }

            .aronai::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
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

                background-image: linear-gradient(310deg, rgb(117, 123, 92) 0%, rgba(33, 212, 253, 0.8) 100%);
            }
        </style>

        <!-- Destination area S t a r t -->

        <!--/ End-of Destination -->


        <section class="news-area section-padding2 aronai">
            <div class="mask bg-gradient-info"></div>
            <div class="container container-events">

                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430">

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
                            <div class="tab-pane  fade show active" id="pills-news-one" role="tabpanel"
                                aria-labelledby="pills-news-one">
                                <div class="about-banner imgEffect4">
                                    <img src="assets/images/videos/bodoland.png" alt="smartBTR" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery"
                                        class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-news-two" role="tabpanel"
                                aria-labelledby="pills-news-two">
                                <div class="about-banner imgEffect4">
                                    <img src="assets/images/videos/btc-secretary.png" alt="travello" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery"
                                        class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-news-three" role="tabpanel"
                                aria-labelledby="pills-news-three">
                                <div class="about-banner imgEffect4">
                                    <img src="assets/images/videos/kokrajhar.jpg" alt="travello" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery"
                                        class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="all-contents" id="v-pills-tab-two" role="tablist" aria-orientation="vertical">


                            <div class="news-content active" id="pills-news-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-news-one" role="tab" aria-controls="pills-news-one"
                                aria-selected="true" style="background-color: white; margin-bottom: 10px;">
                                <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/bodoland.png" class="img-fluid"
                                        style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png"
                                                class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon,
                                            BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png"
                                            class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024
                                    </p>
                                </div>
                            </div>

                            <div class="news-content" id="pills-news-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-news-two" role="tab" aria-controls="pills-news-two"
                                aria-selected="true" style="background-color: white; margin-bottom: 10px;">

                                <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/btc-secretary.png" class="img-fluid"
                                        style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png"
                                                class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon,
                                            BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png"
                                            class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024
                                    </p>
                                </div>
                            </div>

                            <div class="news-content" id="pills-news-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-news-three" role="tab" aria-controls="pills-news-three"
                                aria-selected="true" style="background-color: white; margin-bottom: 10px;">

                                <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/kokrajhar.jpg" class="img-fluid"
                                        style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png"
                                                class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon,
                                            BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png"
                                            class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="videoGallery.php">
                            <button>
                                <div class="svg-wrapper-1">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24">
                                            <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                                        </svg>
                                    </div>
                                </div>
                                <span>View all Events</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <div class="shape-bg-about">
                <img src="assets/images/icon/bg-shape-2.png" alt="smartBTR">
            </div>
            </div>
        </section>

        <!-- Special area S t a r t -->




        <div>
            <img src="assets/images/style-images/assam-mark-top.png" height="60px" width="100%" alt="">
        </div>

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
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.php"><img style="min-height: 250px; max-height: 250px;"
                                        src="assets/images/UDD/449170313_122094855314387363_6468345228650660617_n.jpg"
                                        alt="">
                                </a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="heading-pera">Kokrajhar, BTR</span>
                                    </div>

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>

                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">25/6/2024</span>
                                    </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details.php">Kokrajhar Town Drainage Inspection: Significant
                                        Improvements in Flood Prevention and Community Safety</a>
                                </h4>
                                <!-- <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div> -->
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.php"><img style="min-height: 250px; max-height: 250px;"
                                        src="assets/images/UDD/449131183_122095700600387363_701628104119839628_n.jpg"
                                        alt="smartBTR"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="heading-pera">Kokrajhar,BTR</span>
                                    </div>

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">25/6/2024</span>
                                    </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details.php"> Kokrajhar Municipal Board Launches Door-to-Door Waste
                                        Segregation Awareness Campaign</a>
                                </h4>
                                <!-- <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div> -->
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.php"><img style="min-height: 250px; max-height: 250px;"
                                        src="assets/images/UDD/latest-events-urban.jpg_large" alt="smartBTR"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="heading-pera">Kokrajhar, BTR</span>
                                    </div>

                                    <div class="border-bottom">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">12 March, 2024</span>
                                    </div>
                                </div>

                                <h4 class="title line-clamp-2">
                                    <a href="news-details.php">Inauguration of Non-Residential Skill Training Programme
                                        in Kokrajhar: A Step Forward in Skill Development</a>
                                </h4>

                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="events.php">
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
            </div>
        </section>
        <!--/ End of News -->



            <!-- Destination area S t a r t -->
            <section class="tour-details-section ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="section-title mx-605 mb-30 d-flex gap-16">
                                <!-- <span class="highlights">about us</span> -->
                                <h4 class="title">Photo Gallery</h4>
                                <!-- <img style="max-width: 70px" src="assets/images/style-images/photo-gallery-removebg-preview.png" alt=""> -->
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
                                <div class="swiper-slide">
    
                                    <a href="gallery.php">
                                    <img src="data:image/jpeg;base64,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"
                                        alt="smartBTR">
    
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="gallery.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1iKS-tVSdWc_Kqc5BQqI2R4ifrLNRB2ESnA&s"
                                        alt="smartBTR">
                                    </a>
                                </div>
    
                                <div class="swiper-slide">
                                    <a href="gallery.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVDMmPz0n7zY3k17VM4FpncbhZOG5QbRGepA&s"
                                        alt="smartBTR">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="gallery.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfynlTnYhjn4jsoESqw_p9s0ROgm4vZPMeGg&s"
                                        alt="smartBTR">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="gallery.php">
                                    <img src="assets/images/news/c5.jpg" alt="smartBTR">
                                    </a>
                                </div>
    
                            </div>
                            <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                            <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                        </div>
                    </div>
                    <!-- / Slider-->
    
    
                </div>
            </section>
            <!--/ End-of Destination -->




        <?php include('include/imgAndArnoimotion.php') ?>


    </main>


    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>

    
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


  



</body>

</html>

