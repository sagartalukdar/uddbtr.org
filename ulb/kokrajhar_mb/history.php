<?php include("include/head.php");
include ('classes/Crud.php');
$crud=new Crud();
$history=$crud->Read("history","1 order by `id` desc");
?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
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
            .text-head {
                font-size: 40px;
                font-weight: 700px;
                font-family: var(--Dm);
            }

            .pera {
                font-size: 18px;
                font-weight: 700;
                line-height: 1.5;
                margin-bottom: 20px;
                font-family: var(--Dm);
                color: black;
            }

            .pera ul li {
                line-height: 40px;
            }
        </style>
        <!-- about us -->

        <section class="mt-30  position-relative" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-8 col-lg-8">
                        <div class=" mx-430 mb-30  available-card">

                            <div class="d-flex align-items-center gap-10 mb-3" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    HISTORY
                                </h4> 
                            </div>

                            <div class="pera t-justify user-qty-card text-justify bx-shd2" style="font-weight: normal;">
                                
                                <?php
                                   if($history){
                                ?>        
                                    <p class="mb-3" >
                                       <?= $history[0]['description']; ?>
                                    </p>
                                <?php
                                    }else{
                                ?>
                                    <p class="mb-3" >
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus nisi possimus facilis officiis. Dolorum explicabo temporibus ut corporis quidem, nostrum necessitatibus doloremque non. Consectetur veritatis, rerum, explicabo fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.
                                    </p>

                                    <p class="mb-3" >
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus nisi possimus facilis officiis. Dolorum explicabo temporibus ut corporis quidem, nostrum necessitatibus doloremque non. Consectetur veritatis, rerum, explicabo fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.
                                    </p>
                                    <p class="mb-3" >
                                        perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.
                                    </p>
                                    <p class="mb-3" >
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus nisi possimus facilis officiis. Dolorum explicabo temporibus ut corporis quidem, nostrum necessitatibus doloremque non. Consectetur veritatis, rerum, explicabo fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.
                                    </p>
                                    <p class="mb-3" >
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus nisi possimus facilis officiis. Dolorum explicabo temporibus ut corporis quidem, nostrum necessitatibus doloremque non. Consectetur veritatis, rerum, explicabo fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus nisi possimus facilis officiis. Dolorum explicabo temporibus ut corporis quidem, nostrum necessitatibus doloremque non. Consectetur veritatis, rerum, explicabo fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.fugiat et odio harum reiciendis fugit perferendis dolorum, aspernatur facilis molestiae eum repellendus ad. Recusandae quia odit corporis a blanditiis dolor corrupti exercitationem debitis nam.
                                    </p>
                                <?php
                                    }
                                ?>
                              
                            </div>
                            
                            

                        </div>

                    </div>

                    <div style="max-height: 500;" class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">

                                <?php
                                  if($history){
                                ?>    
                                    <img src="admin/<?= $history[0]['image']; ?>" class="mt-4" alt=""> 
                                <?php    
                                  }else{
                                ?>
                                 <img src="admin/img/chairPersonMessage/black.jpg" class="mt-4" alt=""> 
                                <?php
                                  }
                                ?>
              
                            </div>

                        </div>

                        <div class="col-12">

                

                            <div class="search-filter-section">
        
                                <div class="heading"
                                    style="background-color: rgb(161, 195, 226); padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px; ">
           
        
                                    <h3 class="title">Kokrajhar Municipality Board</h3>
                                </div>
                                <div class="tour-search d-flex flex-column" style="background-color: #e6e5e5; padding: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                                    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        
        
        
                                    <p class="mb-3">• To provide democratic and accountable government for local communities</p>
        
                                    <p class="mb-3">• To ensure the provision of services to communities in a sustainable manner
                                    </p>
        
                                    <p class="mb-3">• To promote social and economic development</p>
        
                                    <p class="mb-3"> • To promote a safe and healthy environment</p>
        
                                    <p class="mb-3">• To encourage the involvement of communities and community organisations in
                                        the matters of local government.</p>
        
                                    <p class="mb-3">• To structure and manage its administration and budgeting and planning
                                        processes to give priority to the basic needs of the community, to promote the social
                                        and economic development of the community</p>
        
                                    <p class="mb-3">• To participate in national and provincial development programmes</p>
                                </div>
        
        
        
                            </div>
        
                            <div class="cover"></div>
        
        
        
                        </div>

                    </div>


                </div>

               



            </div>

        </section>

        <div >
            <img src="../../assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
        </div>  


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