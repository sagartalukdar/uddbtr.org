<?php include("include/head.php");
if(isset($_GET['nid'])){
    $id=base64_decode($_GET['nid']);
    include('classes/Crud.php');
$crud=new Crud();
$recent=$crud->Read("news_events","`id`='$id'");
$recentNews=$crud->Read("news_events","1 order by `id` desc limit 3");

}
?>
<body>
   <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>


        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
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
                        if(isset($_GET['nid']) && $recent){
                    ?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details-banner imgEffect">
                            <img style="max-height: 500px;" src="admin/<?= $recent[0]['image']; ?>" alt="news details">
                        </div>
                        <div class="news-details-content">
                            <div class="d-flex flex-wrap align-items-center gap-20">
                                <div class="count">
                                    <p class="pera"><?= $recent[0]['date']; ?></p>
                                </div>
                                <div class="divider"></div>
                                <div class="count">
                                    <p class="pera"><?= $recent[0]['address']; ?></p>
                                </div>
                            </div>
                            <h4 class="title"><?= $recent[0]['head']; ?></h4>
                            
                            <div style="text-align: justify !important;">
                              <?= $recent[0]['description']; ?>
                            </div>
                            
                        </div>
                     
                        
                        
                        <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                            <div class="tag-section">
                                
                            </div>
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
                   
                    <?php
                        }else{
                    ?>
                        <div class="col-xl-8 col-lg-7">
                            <div class="news-details-banner imgEffect">
                               <img style="max-height: 500px;" src="admin/img/black.png" alt="news details">
                            </div>
                            <div class="news-details-content">
                                <div class="d-flex flex-wrap align-items-center gap-20">                                    
                                    <div class="count">
                                        <p class="pera">Mon ,dd, yy</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="count">
                                        <p class="pera">event location</p>
                                    </div>
                                </div>
                                <h4 class="title">The title of this news / event</h4>

                            <p class="pera t-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum necessitatibus autem optio, ex facere officiis. Laudantium quibusdam dignissimos tempora ipsam accusamus culpa est, dolorem ipsum sit!    
                            </p>

                            <p class="pera t-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum at cupiditate in repudiandae sit! Totam quae sit, ad numquam quasi perferendis repudiandae ratione sequi voluptate. Vel, provident, dolorem molestiae assumenda sapiente aliquid est maiores, culpa distinctio numquam ipsum! Dignissimos ipsam doloribus minima blanditiis aliquam totam?
                            </p>

                            <p class="pera t-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatem odio commodi voluptates error dicta quaerat, perspiciatis vel unde, nihil voluptas perferendis laudantium nisi exercitationem consectetur facere. Voluptas in vero ut odit minus velit sed repudiandae odio natus quidem at placeat nobis nulla, vitae ab repellendus aut recusandae alias! Ea quaerat porro aut doloremque modi dolorem ex natus aliquam pariatur itaque, nobis animi laudantium obcaecati molestiae ad, hic libero quis, fuga cum velit ab laboriosam assumenda? Ab, excepturi dolor. Vero.
                            </p>

                            </div>                       
                            
                            
                            <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                                <div class="tag-section">
                                    
                                </div>
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
                    <?php
                        }
                    ?>


                    <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">
                            <div class="col-lg-12">
                                <!-- Offer Card -->
                                <div class="destination-offer-three" style="background-image: url('assets/images/style-images/udd-office.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    <div class="destination-content-offer">                                       
                                        <h4 class="title" style="color: white !important;">Urban Development Department</h4>
                                        <span style="font-size: large;  font-weight: bold;">Kokrajhar, Assam, BTR</span>
                                        
                                    </div>
                                </div>
                                <!-- / Offer card -->
                            </div>


                            <div class="col-lg-12">
                                <div class="tour-list-card">
                                    <h4 class="title">News/Events</h4>
                                    <ul class="tour-listing">

                                        <?php
                                            if(isset($_GET['nid']) && $recentNews){
                                                foreach($recentNews as $news){
                                            ?>

                                            <!-- Single -->
                                            <li class="list">
                                                <div class="package-img imgEffect4">
                                                    <a href="news-details?nid=<?= base64_encode($news['id']); ?>">
                                                        <img src="admin/<?= $news['image']; ?>" alt="news">
                                                    </a>
                                                </div>
                                                <div class="package-content">
                                                    <h4 class="area-name">
                                                        <a href="news-details?nid=<?= base64_encode($news['id']); ?>">
                                                            <?= substr(strip_tags($news['description']),0,20)." ..."; ?>
                                                        </a>
                                                    </h4>
                                                    <div class="location">
                                                        <i class="ri-map-pin-line"></i>
                                                        <div class="name"><?= $news['address']; ?></div>
                                                    </div>
                                                    <div class="price-review">
                                                        <div class="rating">
                                                        <p>Date :</p>
                                                            <p class="pera"><?= $news['date']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Single -->
                                            
                                            <?php
                                                }
                                            }else{
                                                for($i=0;$i<3;$i++){
                                            ?>

                                            <!-- Single -->
                                            <li class="list">
                                                <div class="package-img imgEffect4">
                                                    <a href="#0"><img src="admin/img/black.png" alt="news"></a>
                                                </div>
                                                <div class="package-content">
                                                    <h4 class="area-name">
                                                        <a href="#0">
                                                            news / event description 
                                                        </a>
                                                    </h4>
                                                    <div class="location">
                                                        <i class="ri-map-pin-line"></i>
                                                        <div class="name">event / news location</div>
                                                    </div>
                                                    <div class="price-review">
                                                        <div class="rating">
                                                        <p>Date :</p>
                                                            <p class="pera">dd/mm/yyyy</p>
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

                                    <?php
                                      if(isset($_GET['nid']) && $recentNews){
                                        echo 
                                        '
                                        <div class="text-center mt-10">
                                            <a href="news" class="see-more-text">See More</a>
                                        </div>
                                        ';
                                      }
                                    ?>

                                </div>
                            </div>
                         
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ End-of Destination -->

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