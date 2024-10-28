

<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();

$data = null;

if (isset($_GET['q'])) {
    $q = $_GET['q'];

    switch ($q) {
        case 'recent-updates':
            $data = $crud->Read("recent_updates", "1 ORDER BY `id` DESC");
            $title = 'Recent Updates';
            $recentupdates=$crud->Read("recent_updates","1 order by `id` desc");
            break;
        case 'usefullLinks':
            $data = $crud->Read("usefull_links", "1 ORDER BY `id` DESC");
            $title = 'Useful Links';
            $links=$crud->Read("usefull_links","1 order by `id` desc");
            break;
        case 'schemes':
            $data = $crud->Read("schemes", "1 ORDER BY `id` DESC");
            $title = 'Schemes';
            $schemes=$crud->Read("schemes","1 order by `id` desc");
            break;
        default:
            $title = 'Content Not Found';
            break;
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
    background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
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
    <!-- Breadcrumbs S t a r t -->
    <section class="breadcrumbs-area" style="background-color:none;">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s"><?php echo htmlspecialchars($title); ?></h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single active"><?php echo htmlspecialchars($title); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

<!-- <section class="content-area mt-3">
    <div class="container">
        <?php if ($data): ?>   
            <p class="text-danger">No data available.</p>
        <?php endif; ?>
    </div>
</section> -->

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
                                                <a href="about-details?s=chairPersonMessage" style="color: #fff;">READ MORE</a>
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
                      if($q=='recent-updates'){
                    ?>
                      
                       <style>
                            .select-box option{
                                color: #00a2c7 !important;
                                font-weight:500;
                            }                        

                            .form-container {
                                display: flex;
                                flex-wrap: wrap;
                                gap: 10px; 
                                max-width: 100%;
                                box-sizing: border-box;
                            }
                            
                            .select-box {
                                text-decoration: none;
                                color: white;
                                background: linear-gradient(111.04deg, rgb(66, 174, 129) -0.63%, rgb(58, 96, 73) 107.47%);
                                box-shadow: rgba(0, 0, 0, 0.18) 0px 4.78603px 8.37555px;
                                padding: 8px 15px;
                                border-radius: 5px;
                                font-size: 14px;
                                font-weight: 900;
                                transition: background-color 0.3s, box-shadow 0.3s;
                                border: none;
                                flex: 1;
                                min-width: 120px;
                            }
                            
                            .input-group {
                                display: flex;
                                align-items: center;
                                flex: 1;
                                min-width: 200px;
                            }
                            
                            .input-group-prepend {
                                display: flex;
                                align-items: center;
                            }
                            
                            .input-group-text {
                                background-color: #42aa7e;
                                border: 1px solid #ced4da;
                                border-radius: 5px 0 0 5px;
                                padding: 8px 12px;
                                font-size: 14px;
                            }
                            
                            .form-control {
                                padding: 8px 12px;
                                border-radius: 0 5px 5px 0;
                                border: 1px solid #ced4da;
                                font-size: 14px;
                            }
                            
                            @media (max-width: 768px) {
                                .form-container {
                                    flex-direction: 
                                    gap: 15px; 
                                }
                            }

                         </style>



                    <div class="col-xl-8 col-lg-8">
                        <div class="mx-430 mb-30 p-3">

                            <div class="d-flex align-items-center gap-10" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    All updates 
                                </h4> 
                            </div>                              
                              
                                <!-- scheme ul  -->
                             
                                <ul class="recent-news-list2" id="default-notice">
                                    
                                    <?php
                                        if($recentupdates){
                                        $c=0;
                                        foreach($recentupdates as $recentUpdate){
                                            $c++;
                                    ?>
                                        <div class="tour-include-exclude radius-6 mb-3"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">

                                        <div class="row">
                                        
                                            <div class="tour-details-content col-sm-12 col-md-9 col-lg-9" style="border-left: 2px solid red; padding: 15px;">
                                            <a href="recent-update-details?ruid=<?= base64_encode($recentUpdate['id']) ?>"  >

                                                <div class="includ-exclude-point">
                                                    <div class="d-flex gap-4">
                                                        <h5 class=" title line-clamp-2" style="color: rgb(189, 157, 226) !important;"><?= $recentUpdate['head'] ?></h5>
                                                        
                                                        <div>
                                                            <?php
                                                                if($c==1){
                                                                    echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <p class="mt-2 fw-3 fs-5 pera" ><?= $recentUpdate['title'] ?></p>

                                                    <div class="d-flex justify-content-between flex-wrap gap-8">
                                                        <div class="d-flex align-items-center gap-8">
        
                                                        <p class="date">
                                                            <?= date('F j, Y', strtotime($recentUpdate['date'])) ?>
                                                        </p>
        
                                                        </div>
        
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <!-- <div class="includ-exclude-point">
                                                    <h5 class="title text-blue mt-2">Description of this update :</h5>
                                                    <p class="fs-6 line-clamp-2">
                                                        <?= $recentUpdate['description'] ?>
                                                    </p>
                                                </div> -->
                                            </a>
                                            </div>
                                    

                                            <div class="col-sm-12 col-md-3 col-lg-3 mt-2 d-flex justify-content-center aligin-items-center d-flex ">
                                                <div>
                                                    <a href="recent-update-details?ruid=<?= base64_encode($recentUpdate['id']) ?>"  >
                                                        <p style="font-size: small; font-weight: bold; color: rgb(69, 139, 219); border-radius: 6px; border: 1px dotted rgb(19, 130, 194); padding: 7px;">See details</p>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>                                                                    

                                            <div class=" mt-2 d-flex justify-content-center aligin-items-center d-flex" >
                    
                                            </div>

                                        </div>

                                        
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

                            <div class="d-flex align-items-center gap-10" >
                                <h4 class="title" style="color: rgb(104, 166, 236) !important;">
                                    Schemes
                                </h4> 
                            </div>                             
                                                            
                                <ul class="recent-news-list2" id="default-schemes">

                                    <?php
                                        if($schemes){
                                        $c=0;
                                        foreach($schemes as $scm){  
                                            $c++;
                                    ?>
                                 
                                        <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                                            <a href="scheme-details?id=<?= base64_encode($scm['id']); ?>">
                                                <div style="display: flex;align-items: center;gap: 2rem;">
                                                    
                                                        <div>
                                                            <?php
                                                            if($scm['image']){
                                                            ?>
                                                            <img src="admin/<?= $scm['image']; ?>" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                                            <?php
                                                            }else{
                                                            ?>
                                                            <img src="admin/img/others/empty.jpg" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div>
                                                            <div class="title line-clamp-2">
                                                        
                                                                <h6> <?= $scm['scheme_name'] ?> 
                                                                <?php
                                                                    if($c==1){
                                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                                    }
                                                                ?>
                                                                </h6>
                                                                                            
                                                            </div>
                                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                                <div class="d-flex align-items-center gap-8">
                
                                                                <p class="date">
                                                                    <?= date('F j, Y', strtotime($scm['date'])) ?>
                                                                </p>
                
                                                                </div>
                
                                                            </div>
                                                        </div>
                                                
                                                </div>
                                            </a>
                                            <div>

                                            <?php
                                              if($scm['pdf']){
                                            ?>
                                              <a href="admin/<?= $scm['pdf']; ?>" target="_blank">
                                                <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;cursor: pointer;" alt="">
                                              </a>
                                            <?php
                                              }
                                            ?>

                                            </div>
                                        </li>
                              
                                    <?php }
                                        }
                                        else{                                   
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
                    

                </div>


            </div>

        </section>


<style>
        /* Add your CSS here */
        .card {
            /*background-color: #ffffff;*/  
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 15px;
            background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-content {
            display: flex;
            flex-direction: row;
            padding: 15px;
        }

        .image-container {
            flex: 1;
            margin-right: 15px;
        }

        .scheme-image {
            /*max-width: 100%;*/
            height: auto;
            border-radius: 8px;
            max-width: 250px;
            max-height: 100px;
        }

        .details {
            flex: 2;
        }

        .title a {
            text-decoration: none;
            color: #333;
        }

        .title h6 {
            font-size: 18px;
            margin: 0;
        }

        .info {
            margin-top: 10px;
        }

        .date {
            color: #888;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .card-content {
                flex-direction: column;
            }

            .image-container {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
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




