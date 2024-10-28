<?php include("include/head.php");

include('classes/Crud.php');
$crud=new Crud();
$orgInfo=$crud->Read("organization_info","1 order by `id` desc");

?>
<body>
   <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
         <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Organization Chart</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Organization Chart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Destination area S t a r t -->
        <section class="destination-details-section section-padding2" style="padding-top: 30px;">
            <div class="container">

            <div class="row mt-30">
                <div class="col-12 d-flex justify-content-center">
                    <div class="title text-center pb-30"
                        style="color: rgb(65, 171, 212); font-weight: bolder; display: inline-block; font-size: x-large;">
                    ORGANIZATION INFORMATION OF UDD, ASSAM
                    </div>

                </div>
            </div>

                <div class="row g-4">
                    <div class="col-xl-8 col-lg-7">   
                        
                        <?php
                           if($orgInfo){
                        ?>

                        <embed src="admin/<?= $orgInfo[0]['pdf']; ?>" width="100%" height="600" 
                        type="application/pdf">
                        
                        <?php
                           }else{
                        ?>

                        <embed src="" width="100%" height="600" style="background-color: rgba(0, 0, 0,0.6);"
                        type="application/pdf">
                        
                        <?php
                           }
                        ?>



                        <!-- Details content -->
                        <?php
                           if($orgInfo){
                        ?>

                        <div class="destination-details-content">
                            <h4 class="title text-center">Information about UDD</h4>
                            
                            <p class="pera" style="text-align:justify;">
                                <?= strip_tags($orgInfo[0]['udd_information']); ?>
                            </p>
                           
                        </div>               
                        
                        <?php
                           }else{
                        ?>

                        <div class="destination-details-content">
                            <h4 class="title text-center">Information about UDD</h4>
                            
                            <p class="pera t-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi quam, autem sapiente esse alias, eius porro modi aut iusto corporis distinctio. Tempore fuga itaque, inventore recusandae expedita, quam libero quo nesciunt quibusdam similique perferendis architecto, enim neque molestias. Fugiat, provident quidem. Dolores quisquam blanditiis itaque dolor necessitatibus! Aut quidem exercitationem voluptate!
                            </p>
                           
                        </div>             
                        
                        <?php
                           }
                        ?>                        
                        <!-- Details content -->

                    </div>


                    <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">
                            <div class="col-lg-12">

                                <!-- / Offer card -->
                                <?php
                                if($orgInfo){
                                ?>

                                <div class="destination-offer-three" style="background-image: url('admin/<?= $orgInfo[0]['image']; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    <div class="destination-content-offer">
                                    
                                        <h4 class="title" style="color: white !important;">Urban Development Department</h4>
                                        <span style="font-size: large;color: white !important;  font-weight: bold;">Kokrajhar, BTR, Assam</span>
                                        
                                    </div>
                                </div>            
                                
                                <?php
                                }else{
                                ?>

                                <div class="destination-offer-three" style="background-image: url('admin/img/black.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    <div class="destination-content-offer">
                                    
                                        <h4 class="title" style="color: white !important;">Urban Development Department</h4>
                                        <span style="font-size: large;  font-weight: bold;">Kokrajhar, BTR, Assam</span>
                                        
                                    </div>
                                </div>            
                                
                                <?php
                                }
                                ?>
                                <!-- Offer Card -->
                               
                     
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