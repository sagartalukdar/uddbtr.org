<?php include("include/head.php");?>
<link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />

<link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />
<body>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" ></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->

<?php include("include/sidebar.php");?>
<!-- / Menu -->
  <!-- Layout container -->
    <div class="layout-page">
  

<!-- Navbar -->

<?php include("include/navbar.php");?>

  <style>
     
.form-floating {
    position: relative;
    margin-bottom: 1rem;

}

.form-floating input,
.form-floating select,
.form-floating textarea,
.form-floating .flatpickr-input {
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    background-color: #fff;
    border: 0.5px solid #ced4da;
      /*border: none;*/
    border-bottom: 2px solid #00ff4c;
    transition: border-bottom 0.3s ease;
    outline: none; 
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.form-floating label {
    position: absolute;
    top: 0;
    left: 0;
    padding: .375rem .75rem;
    font-size: 15px;
    font-weight: 700;
    pointer-events: none;
    color: #495057;
    transition: top 0.3s ease, opacity 0.3s ease, color 0.3s ease;
}

/* Animation for label when input gets focus */
.form-floating input:focus ~ label,
.form-floating select:focus ~ label,
.form-floating textarea:focus ~ label,
.form-floating .flatpickr-input:not(:placeholder-shown) + label {
    top: -0.5rem;
    font-size: 1rem;
    color: #6c757d;
    font-weight: 700;
}


</style>
      
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> Dashboard
</h4>
<div class="row">
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <!-- <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-truck"></i></span>
          </div> -->
          <!-- <h4 class="ms-1 mb-0">42</h4> -->
        </div>
        <p class="mb-1">Contents required</p>
        <!-- <p class="mb-0">
          <span class="fw-medium me-1">+18.2%</span>
          <small class="text-muted">than last week</small>
        </p> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <!-- <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-error'></i></span>
          </div>
          <h4 class="ms-1 mb-0">8</h4> -->
        </div>
        <p class="mb-1">Contents required</p>
        <!-- <p class="mb-0">
          <span class="fw-medium me-1">-8.7%</span>
          <small class="text-muted">than last week</small>
        </p> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <!-- <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-git-repo-forked'></i></span>
          </div>
          <h4 class="ms-1 mb-0">27</h4> -->
        </div>
        <p class="mb-1">Contents required</p>
        <!-- <p class="mb-0">
          <span class="fw-medium me-1">+4.3%</span>
          <small class="text-muted">than last week</small>
        </p> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <!-- <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-info"><i class='bx bx-time-five'></i></span>
          </div>
          <h4 class="ms-1 mb-0">13</h4> -->
        </div>
        <p class="mb-1">Contents required</p>
        <!-- <p class="mb-0">
          <span class="fw-medium me-1">-2.5%</span>
          <small class="text-muted">than last week</small>
        </p> -->
      </div>
    </div>
  </div>
</div>
<!--/ Card Border Shadow -->

  <!-- /Color Picker-->
</div>


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
  
  <!-- endbuild -->

  
</body>

</html>

<!-- beautify ignore:end -->

