<?php include("include/head.php");




if (isset($_GET['ruid']) && !isset($_GET['ulb'])) {
    $ruid = base64_decode($_GET['ruid']);

    include('classes/Crud.php');
    $crud=new Crud();
    $aboutUs=$crud->Read("about_us","1 order by `id` desc");
    $chdMessage=$crud->Read("chd_message","1 order by `id` desc");
    $departmentOverview=$crud->Read("department_overview","1 order by `id` desc");
    $bottomScroll=$crud->Read("bottom_scrolling_imges","1 ");
    
    $recentUpdate=$crud->Read("recent_updates","`id`=$ruid");

   

}
 else if (isset($_GET['ruid']) && isset($_GET['ulb'])) {

    $ulb = isset($_GET['ulb']) ? urldecode($_GET['ulb']) : 'default_ulb'; 
    $ulb = base64_decode($ulb);

    $baseDir = 'ulb/';
    $crudFile = $baseDir . $ulb . '/classes/Crud.php';

    if (file_exists($crudFile)) {
        include $crudFile;

        if (class_exists('Crud')) {
            $crud = new Crud();

            if (isset($_GET['ruid'])) {
                $UpdateId = base64_decode($_GET['ruid']);
                // $UpdateId = $crud->Read("recent_updates", "`id`='$UpdateId'");

                $recentUpdate = $crud->Read("recent_updates", "`id`='$UpdateId'");

                if ($recentUpdate) {
                    $head = $recentUpdate[0]['head'];
                    $title = $recentUpdate[0]['title'];
                    $date = $recentUpdate[0]['date'];
                }
            }
        } else {
            echo '<p>Class `Crud` not found in ' . htmlspecialchars($crudFile) . '</p>';
        }
    } else {
        echo '<p>Crud.php not found: ' . htmlspecialchars($crudFile) . '</p>';
    }


 } ?>


<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Recent Update Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Recent Update Details</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->




        <section class="why-area" style="padding-top: 42px !important;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-section-title">
                            <h4 class="title" style="font-size: large;">Read about this update details</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tour-include-exclude radius-6 "
                            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">
                            
                            <?php
                             if($recentUpdate){ ?>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-9 col-lg-9 tour-details-content" style="border-left: 2px solid red;">
                                            <div class="includ-exclude-point">
                                                <h4 class="pera" style="color: rgb(189, 157, 226) !important;"><?= $recentUpdate[0]['head'] ?></h4>
                                                <p class="mt-2 fw-3 fs-5 pera" ><?= $recentUpdate[0]['title'] ?></p>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="includ-exclude-point">
                                                <h5 class="title text-blue mt-2">Description of this update :</h5>
                                                <p class="fs-6 mt-2 t-justify">
                                                    <?= $recentUpdate[0]['description'] ?>
                                                </p>
                                            </div>
                                        </div>

                                        
            
                                        <div class="col-sm-12 col-md-3 col-lg-3 mt-2 d-flex justify-content-center aligin-items-center d-flex " >
            
                                         <?php 
                                           if($recentUpdate[0]['pdf']){ ?>
                                            <div class="d-flex gap-4 align-items-center">
                                                <a href="admin/<?= $recentUpdate[0]['pdf'] ?>" target="_blank">
                                                    <img src="admin/img/organizationInfo/pdfcover.png"
                                                        style="width: 40px;height: 40px;cursor: pointer;" alt="">
                                                </a>

                                                <?php }
                                                    if($recentUpdate[0]['link']){?>
                                                      <a href="<?= $recentUpdate[0]['link'] ?>" target="_blank" >
                                                        <p style="font-size: medium; font-weight: bold; color: rgb(69, 139, 219); border-radius: 6px; border: 1px dotted rgb(19, 130, 194); padding: 7px;"><i class="ri-link-m"></i> Visit Link </p>
                                                      </a>
                                                <?php }
                                                ?>
                                            </div>
                                           
                                        </div>


                                    </div>
                            <?php }
                            ?>
                            


                        </div>
                    </div>

                  


                </div>

            </div>
        </section>






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
                var   = ulb + ".assamurban.in";
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