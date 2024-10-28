<?php include("include/head.php");
include('classes/Crud.php');
$crud=new Crud();
?>
<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">History</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">History</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
<style type="text/css">
    .text-head{
        font-size: 40px;
        font-weight: 700px;
        font-family: var(--Dm);
    }
  .pera{
    font-size: 18px;
  font-weight: 700;
  line-height: 1.5;
  margin-bottom: 20px;
  font-family: var(--Dm);
  color: black;
  }
  .pera ul li{
     line-height: 40px;
  }

</style>
            <!-- about us -->

            <section class="tour-details-section section-padding2">
            <div class="tour-details-area">

                

                <div class="tour-details-container">
                    <div class="container">

                        

                        <div class="mt-30">
                            <div class="row g-4">
                                <!-- Left content -->
                                <div class="col-xl-7 col-lg-7">
                                    <div class="testimonial-header">
                                    
                                        <div class="user-info" style="margin-top: 50px">
                                            <p class="name fs-2" style="color: #5ab6ec;font-weight: 700" >History</p>
                                           
                                        </div>
                                        
                                    </div>
                                    <!-- About tour -->
                                    <div class="testimonial-body">

                                        <p class="pera" style="text-align: justify;">
                                            The Bodoland Territorial Council (BTC) is an autonomous district council for the Bodoland Territorial Region in India. It was established in February 2003.The BTC has 40 elected members and an additional six members that are appointed by the Governor of Assam. The area under the BTC jurisdiction is officially called the Bodoland Territorial Region (BTR). The region falls within the geographical map of the least developed region in India. The agro-based economy is the only source of livelihood of the people. Industrialisation and other employment opportunities are scant.The Bodoland Territorial Council is headed by a Speaker and its executive committee is chaired by a Chief Executive Member, currently Mr. Pramod Boro. The BTC consists of four contiguous districts — Kokrajhar, Baksa, Udalguri and Chirang. 
                                        </p>
                                    </div>
                                    <!-- / About tour -->

                                    

                                    

                                    
                                </div>

                                <!-- Right content -->
                                <div class="col-xl-5 col-lg-5">
                                    <!-- <div class="card" style="padding: 15px;margin-bottom: 15px;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;border: none"> -->
                                        <div class="image-wrapper">
                                          <img src="assets/images/gallery/districtmap.png" class="img-fluid" alt="Image">
                                        </div>

                                        <!-- <div class="card-body">
                                            <div class="testimonial-body">
                                                    
                                                    <p class="name text-center" style="color: #60aef6;font-size: 30px;font-weight: 700;line-height: 1.2;">BTR, ASSAM</p>
                                                    <p class="text">
                                                        <ul>
                                                            <li><strong>Established:</strong><span style="font-size: 15px"> 9 February, 2003</span></li>
                                                            <li><strong>Govt. Type:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                            <li><strong>Body:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                            <li><strong>Total Area:</strong> <span style="font-size: 15px"> 8,970 Km2</span></li>
                                                            <li><strong>Official Languages:</strong> <span style="font-size: 15px"> Bodo, English, Assamese</span></li>
                                                        </ul>
                                                    </p>
                                            </div>

                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- end of about us -->
    <?php include('include/imgAndArnoimotion.php') ?>

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