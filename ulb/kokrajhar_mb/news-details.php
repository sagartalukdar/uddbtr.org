<?php include("include/head.php");
  include('classes/Crud.php');
  $crud=new Crud();
  if(isset($_GET['NE_ID'])){
    $id=base64_decode($_GET['NE_ID']);
  }
  $news = $crud->Read("news_events","`id`='$id'"); 
  $news_events=$crud->Read("news_events","`id`!=$id order by `id` desc limit 3");
?>
<body>
   <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>       
         <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">News Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">News Details</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
        <!-- Destination area S t a r t -->
        <section class="destination-details-section section-padding2">
            <div class="container">
                <div class="row g-4">
                    <?php
                      if($news){
                    ?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details-banner imgEffect bx-shd2">
                            <img style="max-height: 500px;" src="admin/<?= $news[0]['image']; ?>" alt="news details">
                        </div>
                        <div class="news-details-content">
                            <div class="d-flex flex-wrap justify-content-start
                             align-items-center gap-20" style="border-bottom: 1px solid #000000;">


                               <div class="d-flex gap-10 align-items-center" >
                                    <div class="">
                                        <img style="height: 70px; width: 70px;" src="assets/images/logo/Kokrajhar-mb-logo.png" alt="UDD">
                                    </div>
                                    <p class="name">NEWS/EVENTS Updates</p>
                                </div>

                                <div class="divider"></div>

                                <div class="count">
                                    <p class="pera">
                                       <?php
                                          echo $news[0]['date'];
                                       ?>
                                    </p>
                                </div>
                                <div class="divider"></div>

                                <div class="count">
                                    <p class="pera"><?= strip_tags($news[0]['address']); ?></p>
                                </div>
                            </div>
                            
                            <h6 class="title"><?= $news[0]['head']; ?></h6>


                            <div style="text-align: justify !important;"> 
                                
                                <p class="pera">  
                                    <?=
                                        $news[0]['description'];
                                    ?>                           
                                </p>
                            </div>

                        </div>                    
                        
                        
                        <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                           
                            <div class="social-section">
                                <h4 class="title">Share :</h4>
                                <div class="social-list">
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-facebook-fill"></i></a>
                                    </div>
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-twitter-fill"></i></a>
                                    </div>
                                    
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-instagram-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">
                            <div class="col-lg-12">
                                <!-- Offer Card -->
                                <div class="destination-offer-three back-dark-custom"
                                    style="background-image: url('../../assets/images/style-images/kokrajar-urban.jpg'); background-repeat: no-repeat; background-size: cover;"  >
                                    <div class="destination-content-offer">

                                        <h4 class="title" style="color: white !important;">Kokrajhar Municipality Board</h4>
                                        <span style="font-size: large;  font-weight: bold; color: #ffffff;">Kokrajhar, Assam, BTR</span>

                                    </div>
                                </div>
                                <!-- / Offer card -->
                            </div>


                            <div class="col-lg-12">
                                <div class="tour-list-card">
                                <i class="fas fa-newspaper"></i>
                                <h4 class="title" style="display: inline-block;" >Recent News/Events</h4>
                                    <ul class="tour-listing">
                                        <?php
                                          if($news_events){
                                            foreach($news_events as $single){
                                        ?>
                                        <!-- Single -->
                                        <li class="list">
                                            <div class="package-img imgEffect4">
                                                <a href="news-details?NE_ID=<?= base64_encode($single['id']); ?>"><img src="admin/<?= $single['image']; ?>" alt="news"></a>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="news-details?NE_ID=<?= base64_encode($single['id']); ?>">
                                                        <?php
                                                          if(strlen($single['head'])>25){
                                                            echo substr($single['head'],0,25)." ...";
                                                          }else{
                                                            echo $single['head'];
                                                          }
                                                        ?>
                                                    </a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name"><?= strip_tags($single['address']); ?></div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="rating">
                                                       <p>Date :</p>
                                                        <p class="pera"><?= $single['date']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Single -->
                                        <?php
                                            }
                                          }                                  
                                        ?>                                      
                                    </ul>
                                    <div class="text-center mt-10">
                                        <a href="events" class="see-more-text">See More</a>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>

                    <?php
                      }else{
                    ?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details-banner imgEffect" style="height: 400px;width: 100%;border: 1px solid gray;">
                            <img style="max-height: 400px;" src="" alt="news details">
                        </div>
                        <div class="news-details-content">
                            <div class="d-flex flex-wrap align-items-center gap-20" style="justify-content: end;">
                                <div class="count">
                                    <p class="pera">
                                      xx/yy/zz
                                    </p>
                                </div>
                                <div class="divider"></div>
                                <div class="count">
                                    <p class="pera">Address or location of the event</p>
                                </div>
                            </div>
                            <h4 class="title">Head, title of this news / event</h4>

                           <p class="pera t-justify">                                                          
                            Sure, here's an extended format with the same message repeated in various ways to meet the length requirement:

                            ---
                            
                            ### News Bulletin
                            
                            **News Updates Coming Soon**
                            
                            Our team is working on bringing you the latest news. Please check back later for updates and announcements.
                            
                            Stay tuned for the latest updates and announcements. We will be sharing exciting news and important information here soon.
                            
                            Check back later for the latest news and updates. We are working on bringing you fresh content and important announcements.
                            
                            We don't have any news to share at the moment. Please visit this section later for the latest updates and information.
                            
                            There's no news to display at the moment. Keep an eye on this space for upcoming news and updates.
                            
                            We don't have any announcements to share right now. Please check back soon for the latest information and updates.
                            
                            Our team is working on bringing you the latest news. Please check back later for updates and announcements.
                            
                            Stay tuned for the latest updates and announcements. We will be sharing exciting news and important information here soon.
                            
                            Check back later for the latest news and updates. We are working on bringing you fresh content and important announcements.
                            
                            We don't have any news to share at the moment. Please visit this section later for the latest updates and information.
                            
                            There's no news to display at the moment. Keep an eye on this space for upcoming news and updates.
                            
                            We don't have any announcements to share right now. Please check back soon for the latest information and updates.
                            
                            Our team is working on bringing you the latest news. Please check back later for updates and announcements.
                            
                            Stay tuned for the latest updates and announcements. We will be sharing exciting news and important information here soon.
                            
                            Check back later for the latest news and updates. We are working on bringing you fresh content and important announcements.
                            
                            We don't have any news to share at the moment. Please visit this section later for the latest updates and information.
                            
                            There's no news to display at the moment. Keep an eye on this space for upcoming news and updates.
                            
                            We don't have any announcements to share right now. Please check back soon for the latest information and updates.
                            
                            Our team is working on bringing you the latest news. Please check back later for updates and announcements.
                            
                            Stay tuned for the latest updates and announcements. We will be sharing exciting news and important information here soon.
                            
                            Check back later for the latest news and updates. We are working on bringing you fresh content and important announcements.
                            
                            We don't have any news to share at the moment. Please visit this section later for the latest updates and information.
                            
                            There's no news to display at the moment. Keep an eye on this space for upcoming news and updates.
                            
                            We don't have any announcements to share right now. Please check back soon for the latest information and updates.
                            
                            ---
                            </p>

                        </div>
                     
                        
                        
                        <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                           
                            <div class="social-section">
                                <h4 class="title">Share :</h4>
                                <div class="social-list">
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-facebook-fill"></i></a>
                                    </div>
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-twitter-fill"></i></a>
                                    </div>
                                    
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i
                                                class="ri-instagram-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">
                            <div class="col-lg-12">
                                <!-- Offer Card -->
                                <div class="destination-offer-three offer-banner" style="background-image: url('admin/img/chairPersonMessage/black.jpg'); background-repeat: no-repeat; background-size: cover; background-position: right;">
                                    <div class="destination-content-offer">
                                       
                                        <h4 class="title" style="color: white !important;">Kokrajhar Municipality Board</h4>
                                        <span class="text-blue" style="font-size: large;  font-weight: bold; ">Kokrajhar, Assam, BTR</span>
                                        
                                    </div>
                                </div>
                                <!-- / Offer card -->
                            </div>


                            <div class="col-lg-12">
                                <div class="tour-list-card">
                                    <i class="fas fa-newspaper"></i>
                                    <h4 class="title" style="display: inline-block;" >News/Events</h4>

                                    <ul class="tour-listing">

                                        <?php
                                        for($i=0;$i<3;$i++){
                                        ?>
                                        <!-- Single -->
                                        <li class="list">
                                            <div class="package-img imgEffect4" style="border: 1px solid gray;">
                                                <a href="#0"><img src="" alt="news"></a>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="#0">Recent news</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Address / Location</div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="rating">
                                                        <p>Date :</p>
                                                        <p class="pera">xx/yy/zz</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Single -->
                                        <?php
                                            }
                                        ?>
                                        
                                    </ul>

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
        <!--/ End-of Destination -->

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
document.getElementById('view-more-btn').addEventListener('click', function(event) {
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
    clickServiceElements[i].addEventListener("click", function(event) {
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

        document.getElementById("serviceSubject").style.fontSize ="20px"

        // Set the text of the subject h4 element
        document.getElementById("subject").innerText = "Give Your " + data;
    });
}
</script>

</body>

</html> 