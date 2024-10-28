<?php include("include/head.php");
include ('classes/Crud.php');
$crud=new Crud();
$vision_goals=$crud->Read("vision_goals","1 order by `id` desc");
?>

<body>
    <?php include("include/preloader.php"); ?>
    <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Vision and Goals</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Vision and Goals</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
        <!-- Testimonial S t a r t -->
        <section class="testimonial-area pt-30">
            <div class="container">

                <div class="row g-0">
                    <div class="col-lg-8 ">
                        <div class="swiper h-calc testimonialTwo-active ">
                            <div class="swiper-wrapper bx-shd2">
                                <div class="swiper-slide testimonial-card-two h-calc">

                                    <div class="faqs-area bottom-padding">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <!-- Single -->
                                                    <div class="single-terms mb-30">

                                                        <div class="text-center pb-3">

                                                            <h5 class="title font-600"
                                                                style="margin: 0 10px 0 0; display: inline-block;">
                                                                VISION AND GOALS
                                                            </h5>

                                                        </div>

                                                    </div>
                                                    <!-- Single -->
                                                    <div class="single-terms mb-30">

                                                        <p class="pera mb-20 t-justify">In urban India it is
                                                            predominantly seen that the growing concentration of people
                                                            in urban areas has led to problems of land shortage, housing
                                                            shortfall and congested transit and has also severely
                                                            stressed the existing basic amenities such as water, power
                                                            and open spaces of the towns and cities. Urbanisation has
                                                            also led to dire situations like people increasingly living
                                                            in slums and squatter settlements and has deteriorated the
                                                            quality of life and environmental conditions of cities.</p>

                                                    </div>
                                                    <!-- Single -->
                                                    <div class="single-terms mb-0">

                                                        <p class="pera mb-20 t-justify">High standards of services for
                                                            public who have an actual or potential interest in the
                                                            working of Goreswar Municipal Board Kokrajhar town being the
                                                            Headquarter of Kokrajhar district as well as the capital of
                                                            Bodoland Territorial Area District (BTAD) is growing in size
                                                            and population rapidly. It is very important to usher an era
                                                            of planned development. Any development must enhance the
                                                            role of the town in the region.</p>
                                                    </div>

                                                    <!-- Single -->
                                                    <div class="single-terms mb-0">
                                                        <p class="pera mb-20 t-justify">A clear vision is required for
                                                            the development of a town to remind itself about its
                                                            function, identity and future opportunities. The Revised
                                                            Master Plan for Greater Kokrajhar shall aim to make the best
                                                            use of the physical assets of the entire geographic planning
                                                            area to minimise the adverse impacts of urbanisation and
                                                            must lead to an inclusive sustainable development to gain
                                                            social, economic and environmental benefits. The plan shall
                                                            be comprehensive in nature that it encompasses all the
                                                            functions that makes a community work, including land use,
                                                            transportation, infrastructure, housing, socio-economic,
                                                            tourism, environment and recreation.</p>
                                                    </div>


                                                    <?php
                                                      if($vision_goals){
                                                    ?>

                                                    <h4 class="title font-600"
                                                        style="margin: 0 10px 0 0; display: inline-block;">VISION 
                                                    </h4>

                                                    <div class="single-terms mb-0 p-2 d-flex">
                                                        <i class="ri-shield-check-line"></i>
                                                        <p class="pera mb-20 t-justify ">
                                                            <?= $vision_goals[0]['vision']; ?>
                                                        </p>
                                                    </div>

                                                    <h4 class="title font-600"
                                                        style="margin: 0 10px 0 0; display: inline-block;">
                                                        GOALS
                                                    </h4>

                                                    <div class="single-terms mb-0 p-1 d-flex">
                                                        <p class="pera mb-20 t-justify">
                                                            <?= $vision_goals[0]['goals']; ?>
                                                        </p>
                                                    </div>

                                                    <?php
                                                      }else{
                                                    ?>

                                                    <h4 class="title font-600 pb-2"
                                                        style="margin: 0 10px 0 0; display: inline-block;">VISION 
                                                    </h4>

                                                    <div class="single-terms mb-0">
                                                        <p class="pera mb-20 t-justify">• To improve the quality of life of the people of Kokrajhar through facilitation of infrastructure.</p>
                                                    </div>

                                                    <h4 class="title font-600 pb-2"
                                                        style="margin: 0 10px 0 0; display: inline-block;">
                                                        GOALS
                                                    </h4>

                                                    <div class="single-terms mb-0">
                                                        <p class="pera mb-20 t-justify">• To promote inclusive growth.</p>

                                                        <p class="pera mb-20 t-justify"> • To promote eco-tourism. </p>
                                                            
                                                        <p class="pera mb-20 t-justify">  • To improve the socio-economic status.</p>
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
                        </div>
                    </div>
                    <div class="col-lg-4 mt-50">
                       <div style="width: 100%;display: flex;justify-content: center;">
                        <img style="width: 85%;height: 320px;" src="admin/img/about/fdd0c838954862212e2fe20c92e24e7bkokmb.jpg" alt="">
                       </div>
                    </div>
                </div>
            </div>
        </section>

        <!--/ End of Testimonial -->



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
</body>

</html>