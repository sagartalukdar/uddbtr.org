<?php include("include/head.php");?>
<link rel="stylesheet" href="../../assets/css/image-gallery.css">
<body>
   <?php
     include('classes/Crud.php');
     $crud=new Crud();
     $allGallery=$crud->Read("gallery","1 order by `id` desc");
     $eventGallery=$crud->Read("gallery","`category`='Event' order by `id` desc");
     $cultureGallery=$crud->Read("gallery","`category`='Culture' order by `id` desc");
     $localAreaGallery=$crud->Read("gallery","`category`='Local areas' order by `id` desc");
     $developmentGallery=$crud->Read("gallery","`category`='Development' order by `id` desc");
     $planingsGallery=$crud->Read("gallery","`category`='Planings' order by `id` desc");
     $othersGallery=$crud->Read("gallery","`category`='Others' order by `id` desc");
   ?>
   <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Gallery</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Gallery</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
		<!-- Breadcrumbs S t a r t -->
		<section class="breadcrumbs-area breadcrumb-bg d-flex flex-column align-items-center" style="background-color: white !important;">
			<div class="container d-flex flex-column align-items-center">
                <div class="d-flex align-items-center gap-10">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Kokrajhar mb Gallery</h1>    
                </div>
                
				
			</div>

		</section>
		<!--/ End-of Breadcrumbs-->

          <!-- Packages S t a r t -->
          <section class="package-area section-padding2">
            <div class="container">
                
                <ul class="nav nav-pills package-pills" id="pills-tab" role="tablist">
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav active" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" role="tab" aria-controls="pills-all"
                            aria-selected="true">
                            All
                        </button>
                    </li>
                
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav " id="pills-london-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-london" role="tab" aria-controls="pills-london" aria-selected="false">
                            Events
                        </button>
                    </li>
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-bangkok-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-bangkok" role="tab" aria-controls="pills-bangkok"
                            aria-selected="false">
                            culture
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-hongkong-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-hongkong" role="tab" aria-controls="pills-hongkong"
                            aria-selected="false">
                            Development
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-manchester-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-manchester" role="tab" aria-controls="pills-manchester"
                            aria-selected="false">
                            Local Areas
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-dubai-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-dubai" role="tab" aria-controls="pills-dubai" aria-selected="false"> UDD Planing </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-others-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-others" role="tab" aria-controls="pills-others" aria-selected="false">Others </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <div class="row g-4">
                            <?php
                               if($allGallery){
                                foreach($allGallery as $ag){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $ag['image']; ?>" alt="">
                                        </a>                                        
                                    </div>                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-london" role="tabpanel"
                        aria-labelledby="pills-london-tab">
                        <div class="row g-4">
                            <?php
                               if($eventGallery){
                                foreach($eventGallery as $eg){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $eg['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-bangkok" role="tabpanel" aria-labelledby="pills-bangkok-tab">
                        
                        <div class="row g-4">
                            <?php
                               if($cultureGallery){
                                foreach($cultureGallery as $cg){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void();">
                                            <img src="admin/<?= $cg['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                     
                        
                    </div>


                    <div class="tab-pane fade" id="pills-hongkong" role="tabpanel" aria-labelledby="pills-hongkong-tab">
                        <div class="row g-4">
                            <?php
                               if($developmentGallery){
                                foreach($developmentGallery as $dg){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $dg['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-manchester" role="tabpanel"
                        aria-labelledby="pills-manchester-tab">
                        <div class="row g-4">
                            <?php
                               if($localAreaGallery){
                                foreach($localAreaGallery as $lag){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $lag['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                        <div class="row g-4">
                            <?php
                               if($planingsGallery){
                                foreach($planingsGallery as $pg){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $pg['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-others" role="tabpanel" aria-labelledby="pills-others-tab">
                        <div class="row g-4">
                            <?php
                               if($othersGallery){
                                foreach($othersGallery as $og){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="javascript:void()">
                                            <img src="admin/<?= $og['image']; ?>" alt="travello">
                                        </a>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <?php
                                }
                               }else{
                            ?>
                               <?php echo '<h4 class="text-center text-danger">No image here !</h4>';?>
                            <?php
                               }
                            ?>      

                        </div>
                    </div>
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

        <!--/ End of Packages -->

        <div >
            <img src="../../assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
        </div>  

        
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
        document.getElementById('view-more-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default action of following the link
            window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
        });
    </script>


<script src="../../assets/js/image-gallery.js"></script>

</body>

</html>