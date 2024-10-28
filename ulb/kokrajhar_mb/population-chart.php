<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();
 $population=$crud->Read("population_info","1 order by `id` desc");
?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
     <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Population Chart</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Population Chart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
    <div class="container">

        <div class="row mt-30">
            <div class="col-12 d-flex justify-content-center">
                <div class="title text-center pb-30"
                    style="color: rgb(65, 171, 212); font-weight: bolder; display: inline-block; font-size: x-large;">
                   POPULATION CHART OF KOKRAJHAR, ASSAM
                </div>

            </div>
        </div>


            <div class="row g-4 mb-30">
                <?php
                   if($population){
                ?>    
                <div class="col-xl-8 col-lg-7">
                    <embed src="admin/<?= $population[0]['pdf']; ?>" width="100%" height="600" type="application/pdf">
                </div>
                <?php
                   }else{
                ?>
                <div class="col-xl-8 col-lg-7" style="display: flex;justify-content: center;align-items: center;">
                   <div style="display: flex;justify-content: center;align-items: center;width: 90%;height: 100%; border: 1px solid black;border-radius: 20px;">
                    <img src="admin/img/organizationInfo/pdfcover.png" style="width: 4rem;height: 4rem;" alt="">
                   </div>
                </div>
                <?php
                   }
                ?>                

                <style>
                    .back-dark-custom::before {
                        content: "";
                        position: absolute;
                        background-repeat: no-repeat;
                        background-size: contain;
                        width: 100%;
                        height: 100%;
                        bottom: 0px;
                        right: 0px;
                        z-index: -1;
                        background: linear-gradient(90deg, #63606075 -0.26%, #6f727269 -0.26%, rgb(7 21 22 / 14%) 33.39%, rgb(7 21 22 / 19%) 45.1%, rgb(94 97 97 / 32%) 59.82%);
                    }
                </style>

                <div class="col-xl-4 col-lg-5" >
                    <div class="row g-4 position-static top-0">
                        <div class="col-lg-12">
                            <?php
                            if($population){
                            ?>    

                            <!-- Offer Card -->
                            <div class="destination-offer-three back-dark-custom"
                                style="background-image: url('admin/<?= $population[0]['image']; ?>'); background-repeat: no-repeat; background-size: cover;"  >
                                <div class="destination-content-offer">

                                    <h4 class="title" style="color: white !important;">Kokrajhar Municipality Board</h4>
                                    <span style="font-size: large;  font-weight: bold; color: #ffffff;">Kokrajhar, Assam, BTR</span>

                                </div>
                            </div>
                            <!-- / Offer card -->

                            <?php
                            }else{
                            ?>
                            <!-- Offer Card -->
                            <div class="destination-offer-three back-dark-custom"
                                style="background-image: url('admin/img/chairPersonMessage/black.jpg'); background-repeat: no-repeat; background-size: cover;"  >
                                <div class="destination-content-offer">

                                    <h4 class="title" style="color: white !important;">Kokrajhar Municipality Board</h4>
                                    <span style="font-size: large;  font-weight: bold; color: #ffffff;">Kokrajhar, Assam, BTR</span>

                                </div>
                            </div>
                            <!-- / Offer card -->
                            <?php
                            }
                            ?>
                        </div>               
                    </div>
                </div>






            </div>
    </div>

    <div >
        <img src="../../assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
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