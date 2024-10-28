

<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();
 $introduction=$crud->Read("introduction","1 order by `id` desc");
 $chairPersonMessage=$crud->Read("chair_person_message","1 order by `id` desc");
?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
       <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Introduction</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Introduction</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->
     
        <!-- about us -->

        <section class="mt-30  position-relative" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row g-4">

                    <div class="col-xl-4 col-lg-4">
                        <div class="news-details-banner imgEffect">
                            <div class="comment-section">
                            <div class="main-profile">
                                    <?php
                                        if($chairPersonMessage){
                                    ?>

                                    <div class="d-flex flex-column gap-10">
                                        <div class="user-img-lg">
                                            <img src="admin/<?= $chairPersonMessage[0]['image'] ?>"
                                                alt="chairpersonPhoto">
                                        </div>

                                        <div>
                                            <p class="desg font-700 text-secondary"><?= $chairPersonMessage[0]['name']; ?></p>
                                        </div>
                                    </div>

                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Chairperson’s Message
                                        </h4>
                                        
                                        <?php
                                          $message=strip_tags($chairPersonMessage[0]['message']);
                                          if(strlen($message)>150){
                                        ?>
                                        
                                        <p style="text-align:justify">
                                            <?php echo substr($message,0,150)." ..."; ?>
                                            <span
                                                style="font-size: 13px;
                                                font-weight: 700;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px; cursor: pointer;">
                                                <a href="chair-person-message" style="color: #fff;">READ MORE</a>
                                            </span>
                                        </p>

                                        <?php
                                          }else{
                                        ?>
                                        <p class="pera">
                                            <?php echo $message; ?>
                                        </p>
                                        <?php
                                          }
                                        ?>
                                        
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>

                                    <?php
                                        }else{
                                    ?>

                                    <div class="d-flex flex-column gap-10">
                                        <div class="user-img-lg">
                                            <img src="admin/img/chairPersonMessage/black.jpg"
                                                alt="chairpersonPhoto"  style="height: 100%;">
                                        </div>

                                        <div>
                                            <p class="desg font-700 text-secondary">Chairperson’s name</p>
                                        </div>
                                    </div>

                                    <div class="user-info">
                                        <h4 class="name">
                                            <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                            Chairperson’s Message
                                        </h4>


                                        <p class="pera"> message from the Chairperson’s of Kokrajhar Municipality Board  </p>
                                        <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                    </div>
                                    
                                    <?php
                                        }
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                  
                    <div class="col-xl-8 col-lg-8">
                        <div class=" mx-430 mb-30  available-card">

                            <div class="d-flex align-items-center gap-10 mb-3" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    INTRODUCTION 

                                </h4> 
                            </div>

                            <?php
                               if($introduction){
                            ?>
                            <div class="pera t-justify user-qty-card text-justify bx-shd2" style="font-weight: normal;">                                
                                <p class="mb-3" >
                                    <?php
                                      echo $introduction[0]['introduction'];
                                    ?>
                                </p>                              
                            </div>
                            <?php
                               }else{
                            ?>
                            <div class="pera t-justify user-qty-card text-justify bx-shd2" style="font-weight: normal;">                                
                                <p class="mb-3" style="text-align:justify">
                                    <?php
                                      echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, optio fugit vel eligendi et dignissimos eum ab obcaecati ipsum aperiam tempora quibusdam soluta odit! Exercitationem deleniti excepturi veniam delectus ad a natus tenetur debitis nihil, quas mollitia dolor voluptas. Cumque, vel sed? Consectetur possimus eius quibusdam ut ducimus molestias dolor omnis perferendis neque ipsa, eaque illo?
                                      
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, optio fugit vel eligendi et dignissimos eum ab obcaecati ipsum aperiam tempora quibusdam soluta odit! Exercitationem deleniti excepturi veniam delectus ad a natus tenetur debitis nihil, quas mollitia dolor voluptas. Cumque, vel sed? Consectetur possimus eius quibusdam ut ducimus molestias dolor omnis perferendis neque ipsa, eaque illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, optio fugit vel eligendi et dignissimos eum ab obcaecati ipsum aperiam tempora quibusdam soluta odit! Exercitationem deleniti excepturi veniam delectus ad a natus tenetur debitis nihil, quas mollitia dolor voluptas. Cumque, vel sed? Consectetur possimus eius quibusdam ut ducimus molestias dolor omnis perferendis neque ipsa, eaque illo?';
                                    ?>
                                </p>                              
                            </div>
                            <?php
                               }
                            ?>

                        </div>

                    </div>

                </div>


            </div>

        </section>


        <!-- end of about us -->
    </main>

    <div >
        <img src="../../assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
    </div>  

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




