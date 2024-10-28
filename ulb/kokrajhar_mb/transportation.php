

<?php include("include/head.php");?>
<body>
    
    <?php include("include/preloader.php")  ?>
    <?php include("include/header.php");?>
    <main>

       <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2" style="padding-top: 30px;">
            <div class="tour-details-area">

               
                <div class="tour-details-container">
                    <div class="container">

                       

                        <div class="mt-30">
                            <div class="row g-4">

                                 <!-- Details Heading -->
                                 <div style="color: rgb(55, 152, 177);" > 
                                    <div class="d-flex flex-column text-center">
                                        <h3> 
                                        <i class="fas fa-road"></i>
                                        Kokrajhar Municipality Board Transportation </h3>
                                    
                                    </div>
                                
                                </div>
                                <!-- / Details Heading -->

                               <div class="">
                                <div class="row g-4">

                                    <!-- left content -->
   
                                  

                                   <div class="col-xl-4 col-lg-5">
                                    <div class="row col-12 mb-20">
                                      <img style="height: 80%; width: 100%; object-fit: contain;" src="../../assets/images/style-images/bodolan-trasportation.jpg" alt="">
                                    </div>
                                   <div class="row col-12">
                                        <div class="col-6">
                                            <img style="height: 100%; width: 100%; object-fit: contain;" src="../../assets/images/style-images/transportation1.PNG" alt="">
                                        </div>
                                        <div class="col-6">
                                            <img style="height: 100%; width: 100%; object-fit: contain;" src="../../assets/images/style-images/transportation2.PNG" alt="">
                                        </div>
                                   </div>

                                </div>
   
                                   <!-- right content -->
                                   <div class="col-xl-8 col-lg-7 testimonial-card-two">
   
                                       <!-- About tour -->
                                       <div class="tour-details-content">
   
                                             <p class="font-700 fs-6 t-justify">It is inhibited by people of different ethnicities and cultures. The main inhabitants are Bodos, Koch Rajbongshi, Assamese, Garo, and Santalis. Bodos and other tribals can be seen in most of the villages while Bengalis, Gorkha, Biharis and Marwaris are seen as merchants in Market areas. The tea tribes can also be seen in the tea gardens.As of 2001 India census,[3] Kokrajhar had a population of 31,152. Males constitute 52% of the population and females 48%. Kokrajhar has an average literacy rate of 79%, higher than the national average of 59.5%: male literacy is 84%, and female literacy is 74%. In Kokrajhar, 10% of the population is under 6 years of age. The district has 3 sub divisions Kokrajhar, Gossaigaon and Basugaon.</p>
   
                                     
                                   
                                       </div>
                                       <!-- / About tour -->
   
                                   </div> 
   
   
   
   
   
                                     <!-- left content -->
   
                                     <div class="col-xl-8 col-lg-7 testimonial-card-two">
   
                                        <!-- About tour -->
                                        <div class="tour-details-content">
    
                                              <p class="font-700 fs-6 t-justify">The Plains Tribes Council of Assam had demanded, since its inception in 1967, for a separate union territory for the Boro and other plain tribes to be called Udayachal.[8] With the failure of PTCA, the All Bodo Students' Union launched the Bodo Movement in 1987 with the demand for a separate state to be called Bodoland,[9] ending with the Bodo Accord of 1993 with the formation of Bodoland Autonomous Council.[10] Bodoland is named after Bodo, an alternative spelling of the Boro people who live primarily in the Dooars regions of Goalpara and Kamrup districts.</p>
    
                                          
                                    
                                        </div>
                                        <!-- / About tour -->
    
                                    </div> 
    
    
                                     <!-- Right Content -->
    
                                     <div class="col-xl-4 col-lg-5">
   
                                        <img style="height: 100%; width: 100%; object-fit: contain;" src="../../assets/images/style-images/transportation3.PNG" alt="">
    
                                    </div>
    
    
   
   
                                      <!-- left content -->
     
   
                               </div>
                               </div>

                             
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Destination -->


        <!-- img  arnoi slicker -->
        <?php include("include/imgAndArnoimotion.php") ?>


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

