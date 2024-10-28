<?php include("include/head.php");

include('classes/Crud.php');
$crud=new Crud();
$objectives=$crud->Read("objectives","1 order by `id` desc");

?>
<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
         <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Objectives</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Objectives</a></li>
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
                    <div class="col-lg-8">
                        <div class="swiper h-calc testimonialTwo-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card-two h-calc">
                                    <div class="testimonial-header d-flex align-items-center justify-content-center d-flex flex-column">
                                        
                                       <div>
                                         <img style="max-height: 200px;" src="assets/images/logo/national-emblem.png" alt="">
                                       </div>

                                    </div>
                                    <div class="faqs-area bottom-padding">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <!-- Single -->
                                                    <div class="single-terms mb-30">
                                                       
                                                        <div class="text-center pb-3">

                                                            <h5 class="title font-600" style="margin: 0 10px 0 0; display: inline-block;">Urban Development Department OBJECTIVES</h5>

                                                            <img style="max-width: 50px;" src="assets/images/style-images/urban-objective-removebg-preview.png" alt="">

                                                        </div>

                                                
                                                
                                                       
                                                        <!-- Single Listing -->
                                                        <ul class="experience listing listing2 d-flex flex-column gap-15">

                                                            <?php
                                                               if($objectives){
                                                                $c=0;
                                                                foreach($objectives as $obj){
                                                            ?>

                                                            <li class="single-list">
                                                                <i class="ri-shield-check-line"></i>
                                                                <p class="pera"><?= ++$c .'. '.$obj['objective']; ?></p>
                                                            </li>    

                                                            <?php        
                                                                }
                                                               }else{
                                                                for($u=1;$u<6;$u++){
                                                            ?>
                                                            <li class="single-list">
                                                                <i class="ri-shield-check-line"></i>
                                                                <p class="pera"><?= $u .'. '; ?>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet exercitationem ipsum ullam tempore!
                                                            </p>
                                                            </li>                        
                                                            <?php
                                                                }
                                                               }
                                                            ?>                                                      
                                                 
                                                        </ul>
                                                    </div>
                                                    <!-- Single -->
                                                    <div class="single-terms mb-30">
                                                        <h5 class="title font-600">More information</h5>
                                                        <p class="pera mb-20 t-justify">BTAD is an autonomous region in Assam, Northeast India. It is made up of four districts on the north bank of the Brahmaputra river below the foothills of Bhutan and Arunachal Pradesh. It is administered by an elected body known as the Bodoland Territorial Council which came into existence under the terms of a peace agreement signed in February 2003 and its autonomy was further extended by an agreement signed in January 2020. The region covers an area of over nine thousand square kilometres and is predominantly inhabited by the Bodo people and other indigenous communities of Assam.</p>
                                                       
                                                    </div>
                                                    <!-- Single -->
                                                    <div class="single-terms mb-0">
                                                        <h5 class="title font-600">Acknowledgement</h5>
                                                        <p class="pera mb-20 t-justify">BY USING SERVICE OR OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE
                                                            THAT YOU HAVE
                                                            READ THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.</p>
                                                    </div>
                                                    <!-- Single -->
                                                    <div class="single-terms mb-0">
                                                         <div>
                                                              <h5 class="title font-600">Contact Us</h5>
                                                        <div class="sch-item-left-item-content">
                                                            <strong>Address</strong>
                                                            <span class="sch-item-left-item-text"><a href="#">C79H+R65, Boro Bhatarmari, Assam 783370</a></span>
                                                        </div>
                                                       
                                                        <div class="sch-item-left-item-content">
                                                            <strong>Email</strong>
                                                            <span class="sch-item-left-item-text"><a href="mailto: contact@uddbtr.org">contact@uddbtr.org</a></span>
                                                        </div>

                                                        <div class="sch-item-left-item-content">
                                                            <strong>Phone</strong>
                                                            <span class="sch-item-left-item-text">
                                                                <a href="tel:+8812825012">8812825012</a>
                                                            </span>
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
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-banner d-none d-lg-block">
                            <img height="70px" width="70px" src="assets/images/news/chd_small.jpg" alt="chd">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--/ End of Testimonial -->


   

        <?php include('include/imgAndArnoimotion.php') ?>



    </main>

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
    document.getElementById('view-more-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of following the link
        window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
    });
</script>

</body>

</html>