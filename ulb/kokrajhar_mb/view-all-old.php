

<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();

 if(isset($_GET['q'])){
    $q=$_GET['q'];

    if($q=='notices'){
        $notices=$crud->Read("notice","1 order by `id` desc");
    }
    if($q=='usefullLinks'){
        $links=$crud->Read("usefull_links","1 order by `id` desc");
    }
    if($q=='schemes'){
        $schemes=$crud->Read("schemes","1 order by `id` desc");
    }
 }
$chairPersonMessage=$crud->Read("chair_person_message","1 order by `id` desc");
?>

<body>
    <style>
        <style type="text/css">
        .flex-container {
    display: flex;
    align-items: center; /* Align items vertically */
}
.circle2 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle2 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}
.circle3 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(129.62deg, rgb(0, 30, 74) 1.95%, rgb(0, 73, 181) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle3 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}

 .list {
    padding: 15px;
    margin-bottom: 15px;
    /*background-color: #ffffff;*/
    background: linear-gradient(180deg, #cc87134f 0%, rgba(143, 64, 166, 0) 100%);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px;
  }
    .circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
    background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle img {
    width: 100%;
    height: auto;
    display: block;
     height :20px;
      width:15px; 
}
    .circle1 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(210, 244, 235) -0.63%, rgb(144, 247, 189) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle1 img {
    width: 100%;
    height: auto;
    display: block;
     height :35px;
      width:40px; 
}

    .about-banner {
        position: relative; /* Ensure the position context for pseudo-element */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add box-shadow */
        border-radius: 8px; /* Optional: Add border radius for rounded corners */
        overflow: hidden; /* Ensure overflow is hidden for inner elements */
    }

    .about-banner img {
        display: block; /* Ensure image behaves as block element */
        width: 100%; /* Ensure image fills its container */
        height: auto; /* Maintain aspect ratio */
    }

    .video-player {
        position: absolute; /* Position video player overlay */
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); /* Center exactly */
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        border-radius: 50%; /* Optional: Round shape for play button */
        padding: 20px; /* Adjust padding as needed */
    }

    .video-player i {
        color: #fff; 
        font-size: 48px; 
    }
    .img-fluid{
        border-radius: 5px;
    }
.aronai {
    position: relative;
    background-image: url('assets/images/style-images/bax-background-blue.png');
    /*background-image: url('assets/images/icon/btc.jpg');*/
    background-size: cover;
    background-position: center;
    padding: 100px 0; /* Adjust padding as needed */
}

/*.aronai::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
}*/
.aronai::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('assets/images/style-images/bax-background-blue.jpg');
  background-size: cover;
  background-position: center;
  opacity: 0.4;
  z-index: 1;
}

.container-events {
    position: relative;
    z-index: 1;

}
.mask {
    position: absolute;
    background-size: cover;
    background-position: center center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.8;
}

.bg-gradient-info {
    /*background-image: linear-gradient(310deg, rgba(33, 82, 255, 0.8) 0%, rgba(33, 212, 253, 0.8) 100%); /* Adjust opacity of gradient stops */
    /*background-image: linear-gradient(310deg, rgba(125, 146, 221, 0.8) 0%, rgb(151, 232, 225) 100%);*/
   /*background-image: linear-gradient(310deg, rgb(117, 123, 92) 0%, rgba(33, 212, 253, 0.8) 100%);*/
   background-image: linear-gradient(310deg, rgba(234, 133, 44, 0.8) 0%, rgb(240, 235, 193) 100%);
}
#categoryOutput{
padding: 16px 20px;
  border-radius: 8px;
  border: 1px solid var(--primary-border);
  background: var(--body);
  height: 52px;
  width: 100%;
  /*color: var(--primary-title);*/
  color: #798080;
  font-size: 16px;
}
</style>
    </style>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>
       
     
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
                  
                    <?php
                      if($q=='notices'){
                    ?>
                      
                    <div class="col-xl-8 col-lg-8">
                        <div class=" mx-430 mb-30 p-3">

                            <div class="d-flex align-items-center gap-10 mb-3" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    All Notices 
                                </h4> 
                            </div>

                            <ul class="recent-news-list2">
                                
                                <?php
                                    if($notices){
                                    $c=0;
                                    foreach($notices as $notice){
                                        $c++;
                                ?>
                                    
                                    <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                        <div class='mx-2'>

                                            <h4 class="title line-clamp-2">
                                            <a href="#0">
                                                <h6> 
                                                <?php
                                                   echo $notice['head'];
                                                ?> 
                                                <?php
                                                    if($c==1){
                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                    }
                                                ?>
                                                </h6>
                                            </a>                                        
                                            </h4>
                                            <p class='t-justify'>
                                            <?php
                                               echo $notice['title']; 
                                            ?>
                                            </p>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">

                                                <p class="date">
                                                    <?= date('F j, Y', strtotime($notice['date'])) ?>
                                                </p>

                                                </div>

                                            </div>

                                        </div>
                                        <div>

                                        <?php
                                            if($notice['pdf']){
                                        ?>
                                            <a href="admin/<?= $notice['pdf']; ?>" target="_blank">
                                                <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;cursor: pointer;" alt="">
                                            </a>
                                        <?php
                                            }
                                        ?>

                                        </div>
                                    </li>
                                    
                                <?php
                                    }
                                    }else{                                  
                                ?>
                                   <h5 class="text-center text-danger">No Data Found !</h5>                                
                                <?php
                                    }                                    
                                ?>                                      
                                
                            </ul>

                        </div>

                    </div>

                    <?php
                      }
                    ?>


                    <?php
                      if($q=='usefullLinks'){
                    ?>
                      
                    <div class="col-xl-8 col-lg-8">
                        <div class=" mx-430 mb-30 p-3">

                            <div class="d-flex align-items-center gap-10 mb-3" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    Useful Links
                                </h4> 
                            </div>

                            <ul class="recent-news-list2">
                                     
                                <?php
                                if($links){
                                    $u=0;
                                    foreach($links as $link){
                                        $u++;
                                ?>
                                <li class="list">
                                    <h5 class="title line-clamp-2">
                                        <a href="<?= $link['link']; ?>" target="_blank">
                                            <?= $link['title']; ?> 
                                            <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> 
                                            <?php
                                                if($u==1){
                                                echo '<img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px">';    
                                                }
                                            ?>
                                        </a>
                                    </h5>
                                </li>
                                <?php
                                    }
                                }else{                                   
                                ?>
                                   <h5 class="text-center text-danger">No Data Found !</h5>
                                <?php                                    
                                  }
                                ?>
                                                            
                            </ul>

                        </div>

                    </div>

                    <?php
                      }
                    ?>


                    <?php
                      if($q=='schemes'){
                    ?>
                      
                    <div class="col-xl-8 col-lg-8">
                        <div class=" mx-430 mb-30 p-3">

                            <div class="d-flex align-items-center gap-10 mb-3" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    Schemes
                                </h4> 
                            </div>

                            <!-- scheme ul  -->
                            <?php
if ($schemes) {
    foreach ($schemes as $scm) {
        ?>

        <div class="col-lg-9 mb-4">
            <!-- Add your image here -->
            <a href="destination-details.html" class="destination-banner">
                <img src="admin/<?= htmlspecialchars($scm['image']); ?>" 
                     style="width: 100%; height: auto; object-fit: cover; border-radius: 8px;">

                <div class="destination-content">
                    <div class="destination-info">
                        <div class="destination-name">
                            <p class="pera"><?= htmlspecialchars($scm['scheme_name']) ?></p>
                            <div class="location">
                                <i class="ri-map-pin-line"></i>
                                <p class="name"><?= htmlspecialchars($scm['location']) ?></p>
                            </div>
                        </div>
                        <div class="button-section">
                            <div class="arrow-btn">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <?php
    }
}
?>


                        </div>

                    </div>

                    <?php
                      }
                    ?>
                    

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




