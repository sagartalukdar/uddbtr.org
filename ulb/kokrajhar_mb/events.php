<?php include("include/head.php");
  include('classes/Crud.php');
  $crud=new Crud();
  $news_events=$crud->Read("news_events","1 order by `id` desc ");
?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main style="background-color: #faf2f3;">
            <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Events</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Events</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <div style="background-image: url('assets/images/UDD/udd-events-background-image.jpg');">

            <h4 class="title text-center pt-60 pb-10">
                Kokrajhar Municipality Board Events/News
            </h4>


            <!-- Destination area S t a r t -->
            <section class="tour-list-section pb-60">

                <div class="container">
                    <div class="row g-4">

                        <div class="col-12">

                            <div class="all-tour-list">
                                <div class="row g-4">

                                    <ul id='infinite-list'>
                                    </ul>

                                    <?php
                                      if($news_events){
                                        foreach($news_events as $news){
                                    ?>
                                    <div class="col-xl-3 col-lg-3 col-sm-6">
                                        <div class="package-card bx-shd2">
                                            <div class="package-img imgEffect4">
                                                <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>">
                                                    <img src="admin/<?= $news['image']; ?>" alt="smartBTR">
                                                </a>

                                            </div>
                                            <div class="package-content" style="background-color: rgb(253, 253, 253);">
                                                <h4 class="area-name line-clamp-1">
                                                    <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>">
                                                        <h4 class="area-name line-clamp-1">
                                                            <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>">
                                                            <?= $news['head']; ?>    
                                                            </a>
                                                        </h4>
                                                    </a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name"><?= $news['address']; ?></div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">Date : <?= $news['date']; ?></p>
                                                    </div>

                                                </div>
                                                <h6 class=" line-clamp-3" style="color: #808080;">
                                                    <a href="news-details?NE_ID=<?= base64_encode($news['id']); ?>">
                                                        <?= strip_tags($news['description']); ?>
                                                    </a>
                                                </h6>


                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                      }
                                    }else{
                                      for($i=0;$i<7;$i++){
                                    ?>
                                    <div class="col-xl-3 col-lg-3 col-sm-6">
                                        <div class="package-card bx-shd2">
                                            <div class="package-img imgEffect4">
                                                <a href="#0">
                                                    <img src="admin/img/chairPersonMessage/black.jpg" alt="smartBTR">
                                                </a>
                                            </div>
                                            <div class="package-content" style="background-color: rgb(253, 253, 253);">
                                                <h4 class="area-name line-clamp-1">
                                                    <a href="#0">
                                                        <h4 class="area-name line-clamp-1">
                                                            <a href="#0">news shorthand description to show </a>
                                                        </h4>
                                                    </a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">News location / address</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">Date : dd/mm/yy</p>
                                                    </div>

                                                </div>
                                                <h6 class=" line-clamp-3" style="color: #808080;">
                                                    <a href="#0">
                                                    ### News Bulletin
                                                    Stay tuned for the latest updates and announcements. We will be sharing exciting news and important information here soon.
                                                    Check back later for the latest news and updates. We are working on bringing you fresh content and important announcements.    
                                                    We don't have any news to share at the moment. Please visit this section later for the latest updates and information.
                                                    </a>
                                                </h6>


                                            </div>
                                        </div>
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
            </section>
            <!--/ End-of Destination -->


        </div>





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

</body>

</html>