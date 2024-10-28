<?php include("include/head.php");?>
<body>

   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <!-- Layout wrapper -->
   <div class="layout-wrapper layout-content-navbar  ">
      <div class="layout-container">
         <!-- Menu -->
         <!-- Menu -->
         <?php include("include/sidebar.php");?>
         <!-- / Menu -->
         <!-- Layout container -->
         <div class="layout-page">
            <!-- Navbar -->
            <?php include("include/navbar.php");?>

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
       <div class="container-xxl flex-grow-1 container-p-y" style="background-color: <?php echo $container_xxl_color;?>">
              
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light"style="text-transform: uppercase;">View-Schemes / </span><span style="text-transform: uppercase;">Scheme-Details</span>
        </h4>

<!-- gallery modal -->
<div class="galleryModal">
  <span class="closeBtn"><i class="fas fa-times"></i></span>
  <div class="containerBox">
      <span class="left"><i class="fas fa-angle-left"></i></span>
      <div class="img-modal">
          <img src="" alt="photo">
      </div>
      <span class="right"><i class="fas fa-angle-right"></i></span>
  </div>
</div>
<!-- gallery modal -->

 <!-- gallery modal css -->
 <style>
  .galleryModal {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, .5);
      align-items: center;
      display: none;
      z-index: 1000;
  }

  .galleryModal.show {
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .galleryModal .containerBox {
      display: flex;
      align-items: center;
  }

  .galleryModal .img-modal {
      width: 676px;
      ;
      height: 460px;
      margin: 0 24px;
  }

  .galleryModal .img-modal img {
      width: 100%;
      height: 100%;
      object-fit: contain;
  }

  .galleryModal span {
      cursor: pointer;
      font-size: 24px;
      color: #fff;
  }

  .galleryModal .closeBtn {
      position: absolute;
      top: 100px;
      right: 64px;
      font-size: 36px;
      color: #fff;
  }

  @media screen and (max-width: 768px) {

      .galleryModal .img-modal {
          width: 476px;
          ;
          height: 360px;
          margin: 0 24px;
      }
  }

  @media screen and (max-width: 576px) {

      .galleryModal .containerBox {
          position: relative;
      }

      .galleryModal span {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
      }

      .galleryModal span.left {
          left: 24px;
          background: rgb(163, 154, 154);
          padding: 5px 6px;
          border-radius: 45%;
      }

      .galleryModal span.right {
          right: 24px;
          background: rgb(163, 154, 154);
          padding: 5px 6px;
          border-radius: 45%;
      }

      .galleryModal .img-modal {
          width: 356px;
          ;
          height: 260px;
          margin: 0 24px;
      }

  }

  @media screen and (max-width: 350px) {
      .galleryModal .img-modal {
          width: 256px;
          ;
          height: 220px;
          margin: 0 24px;
      }
  }
</style>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $scheme_id = base64_decode($id); // Decode the Base64 ID
    $readSchemeDetails = $crud->Read("scheme_details", "`status`=1 and `scheme_id`='$scheme_id' ORDER BY id DESC");

    if ($readSchemeDetails) {
        foreach ($readSchemeDetails as $scheme) {

            $scheme_details = $scheme['scheme_details'];
            $progress = $scheme['progress'];
            $image1 = $scheme['image1'];
            $image2 = $scheme['image2'];
            $image3 = $scheme['image3'];
            $date = $scheme['date'];
            $timestamp = strtotime($date);
            $formattedDate = date('d F Y', $timestamp);


            $readScheme = $crud->Read("schemes", "`id`='$scheme_id'");
            if ($readScheme) {
                foreach ($readScheme as $schemeInfo) {
                    $scheme_name = $schemeInfo['scheme_name'];
                    $location = $schemeInfo['location'];
                    $contractor = $schemeInfo['done_by'];
                    $contact_No = $schemeInfo['contact_no'];
?>
<div class="row mb-4 " style="padding: 10px; border-radius:8px ;">
    <div class="col-12">
        <div class="card h-100">
            <div class="card-body row">
               <!--  <div class="col-sm-4 border-shift">
                    <span class="badge bg-label-primary p-2 mb-5 mb-sm-0"><?php echo $formattedDate; ?></span>
                    
                </div> -->
                <div class="col-sm-6 mb-2 gy-1 text-nowrap d-flex flex-column justify-content-between ps-4 gap-2 pe-3">
                    <div class="d-flex align-items-center gap-3">
                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4">
                            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                              <div class="me-2">
                                 <span class="badge bg-label-primary p-2 mb-5 mb-sm-0">DETAILS</span>
                                  <br>
                                  <small class="text">SCHEME NAME: <?php echo $scheme_name;?></small><br>
                                  <small class="text">LOCATION: <?php echo $location;?></small><br>
                                  <small class="text">CONTRACTOR: <?php echo $contractor;?></small><br>
                                  <small class="text">CONTACT NUMBER: <?php echo $contact_No;?></small><br>
                                  <small class="text">PROGRESS DETAILS: <?php echo $scheme_details;?></small><br>

                              </div>
                            </div>
                          </li>
                          
                        </ul>
                  
                        
                    </div>
                    
                </div>
                <div class="col-sm-6 mb-2 gy-1 text-nowrap d-flex flex-column justify-content-between ps-4 gap-2 pe-3">
                    <div class=" align-items-center gap-3">
                       <span class="badge bg-label-primary p-2 mb-5 mb-sm-0"><?php echo $formattedDate; ?></span><br>
                        <small>Progress</small>
                        <div class="progress w-100" style="height:10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $progress; ?>%" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small><?php echo $progress; ?> %</small>
                    </div>
                    
                </div>
                
            </div>
            <div class="card-footer">
              <div class="imgs images" style="display: flex; flex-wrap: wrap; justify-content: space-evenly; align-items: center; gap: 1.3rem;">
                        <div class="scheme">
                            <img style="height: 6.2rem; width: 8rem; border-radius: 6px; cursor: pointer;" src="<?php echo $image1; ?>" alt="">
                        </div>
                        <div class="scheme">
                            <img style="height: 6.2rem; width: 8rem; border-radius: 6px; cursor: pointer;" src="<?php echo $image2; ?>" alt="">
                        </div>
                        <div class="scheme">
                            <img style="height: 6.2rem; width: 8rem; border-radius: 6px; cursor: pointer;" src="<?php echo $image3; ?>" alt="">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php 
        } // End foreach loop
    } }}else {
        echo '<p style=color:red;font-weight:700>No details added yet.</p>';
    }
} // End if condition
?>



<!-- gallery script -->
<script>
  const left = document.querySelector('.galleryModal span.left');
  const right = document.querySelector('.galleryModal span.right');
  const modalImg = document.querySelector('.galleryModal .img-modal img');
  const modal = document.querySelector('.galleryModal');
  const close = document.querySelector('.closeBtn');

  const allImg = document.querySelectorAll('.images .scheme img');

  let iterator = 0;
  for (let i = 0; i < allImg.length; i++) {
      allImg[i].addEventListener('click', function () {
          const urlImg = this.getAttribute('src');
          // alert(urlImg);
          modal.classList.add('show');
          modalImg.setAttribute('src', urlImg);
          iterator = i;
      });

  }

  left.addEventListener('click', function () {
      iterator === 0 ? iterator = allImg.length - 1 : iterator -= 1;
      const urlImg = allImg[iterator].getAttribute('src');
      modalImg.setAttribute('src', urlImg);
  });
  right.addEventListener('click', function () {
      iterator === allImg.length - 1 ? iterator = 0 : iterator += 1;
      const urlImg = allImg[iterator].getAttribute('src');
      modalImg.setAttribute('src', urlImg);
  });

  close.addEventListener('click', function () {
      modal.classList.remove('show');
  });

</script>
<!-- gallery script --> 

<!-- review List Table -->



          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<?php include("include/footer.php");?>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <?php include("include/javascript.php");?>
  
</body>

</html>

<!-- beautify ignore:end -->

