<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();
 $chairPersonMessage=$crud->Read("chair_person_message","1 order by `id` desc");
?>
<body>
   <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main style="background: url('../../assets/images/style-images/box-background.jpg')">
         <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">CHAIRPERSON'S MESSAGE </h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">CHAIRPERSON'S MESSAGE </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

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
                                            CHAIRPERSON'S MESSAGE 
                                        </h3>
                                    
                                    </div>
                                
                                </div>
                                <!-- / Details Heading -->

                               

                                <!-- left content -->
                                <div class="col-xl-8 col-lg-7 testimonial-card-two bx-shd2">

                                    <!-- About tour -->
                                    <div class="tour-details-content">

                                    <?php
                                        if($chairPersonMessage){
                                        ?>
                                          <p class="pera t-justify"> 
                                           <?= $chairPersonMessage[0]['message']; ?>
                                           </p>
                                        <?php        
                                        }else{
                                        ?>
                                          <p class="pera t-justify"> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, expedita autem obcaecati dolorum nemo sint quibusdam? Quis in accusamus vero rem, atque numquam dicta quasi quo a officiis tempora eveniet. Minima minus expedita unde facilis vel dolor odio quisquam illum. Placeat consectetur est cum aut, unde animi deserunt natus a asperiores impedit id quisquam reprehenderit cumque maiores. Quidem doloribus, tempore ducimus laudantium magnam numquam, eius laboriosam cum est ea aut ipsam corporis unde dignissimos obcaecati. Sequi hic placeat in maxime doloribus minima ratione nostrum, commodi eius omnis mollitia fugiat facere dolore, suscipit molestiae a tempora, reprehenderit tempore sint rem iusto consequuntur. Porro, sit voluptates iusto non eius rerum suscipit similique alias! Fugiat nemo, itaque assumenda ad repellat debitis sapiente possimus, velit odio cumque soluta fuga dolorem aut atque earum saepe, nobis ipsa!
                                           </p>
                                           <p class="pera t-justify"> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, expedita autem obcaecati dolorum nemo sint quibusdam? Quis in accusamus vero rem, atque numquam dicta quasi quo a officiis tempora eveniet. Minima minus expedita 
                                           </p>
                                           <p class="pera t-justify"> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, expedita autem obcaecati dolorum nemo sint quibusdam? Quis in accusamus vero rem, atque numquam dicta quasi quo a officiis tempora eveniet. Minima minus expedita gnissimos obcaecati. Sequi hic placeat in maxime doloribus minima ratione nostrum, commodi eius omnis mollitia fugiat facere dolore, suscipit molestiae a tempora, reprehenderit tempore sint rem iusto consequuntur. Porro, sit voluptates iusto non eius rerum suscipit similique alias! Fugiat nemo, itaque assumenda ad repellat debitis sapiente possimus, velit odio cumque soluta fuga dolorem aut atque earum saepe, nobis ipsa!
                                           </p>
                                        <?php
                                        }
                                    ?>   

                                    </div>
                                    <!-- / About tour -->

                                </div> 

                                  <!-- right content -->


                                    <div class="col-xl-4 col-lg-5">

                                        <div class="date-travel-card position-sticky top-0 bx-shd2"  style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; ">
                                            
                                            <div class="d-flex align-items-center justify-content-center ">
                                                <div style="height: 270px; width: 270px; " >
                                                  <?php
                                                    if($chairPersonMessage){
                                                  ?>
                                                    <img style="height: 100%; width: 100%; object-fit: contain;" src="admin/<?= $chairPersonMessage[0]['image'] ?>" alt="">
                                                  <?php        
                                                    }else{
                                                  ?>
                                                    <img style="height: 100%; width: 100%; object-fit: contain;" src="admin/img/chairPersonMessage/black.jpg" alt="">
                                                  <?php
                                                    }
                                                  ?>
                                                </div>
                                                    
                                            </div>

                                            <div class="border border-2 mt-10"></div>

                                            <h5 class=" text-center" >
                                                <?php
                                                    if($chairPersonMessage){
                                                  ?>
                                                    <?= $chairPersonMessage[0]['name']; ?>
                                                  <?php        
                                                    }else{
                                                  ?>
                                                    Chairperson’s name
                                                  <?php
                                                    }
                                                ?>
                                            </h5>
                                            
                                        </div>
                                            
                                        <div class="search-filter-section">
                                            
                                            <div class="heading bx-shd2" style="background-color: rgb(161, 195, 226); padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px; ">
                                                
                                                    
                                                <img style="max-width: 30px;" src="../../assets/images/style-images/department-removebg-preview.png" alt="">
                
                
                                                <h3 class="title">Kokrajhar Municipality Board</h3>
                                            </div>
                                            <div class=" bx-shd2 tour-search d-flex flex-column" style="background-color: #e6e5e5; padding: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                
                                        
                
                                                <p class="mb-3">• To provide democratic and accountable government for local communities</p>
                
                                                <p class="mb-3">• To ensure the provision of services to communities in a sustainable manner
                                                </p>                                
                                            
                                                <p class="mb-3">• To promote social and economic development</p>
                                                
                                            <p class="mb-3"> • To promote a safe and healthy environment</p>
                                                
                                                <p class="mb-3">• To encourage the involvement of communities and community organisations in the matters of local government.</p>
                                                
                                                <p class="mb-3">• To structure and manage its administration and budgeting and planning processes to give priority to the basic needs of the community, to promote the social and economic development of the community</p>
                                                
                                                <p class="mb-3">• To participate in national and provincial development programmes</p>     
                                            </div>
                        
                
                
                                        </div>

                                        <div class="cover"></div>



                                  </div>
                             
                            </div>
                        </div>
                    </div>
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




</body>

</html> 