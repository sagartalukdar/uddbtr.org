<?php 

session_start();

?>





<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Login</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <!-- Page CSS -->
    

    <!-- Helpers -->
<!-- 
    
<link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />

<link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" /> -->
    
</head>

<body>


  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <style type="text/css">
    /* Default styles */
.app-brand {
    text-align: center; /* Center align the image */
}

.responsive-img {
    max-width: 100%; /* Ensures the image never exceeds its original size */
    height: auto; /* Maintains aspect ratio */
}

/* Media query for small screens */
@media (max-width: 768px) {
    .responsive-img {
        max-width: 100%; /* Adjust as needed */
    }
}

  </style>
  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
      <div class="w-100 d-flex justify-content-center">
        <img src="assets/img/illustrations/boy-with-rocket-light.png" class="img-fluid" alt="Login image" width="700" data-app-dark-img="illustrations/boy-with-rocket-dark.png" data-app-light-img="illustrations/boy-with-rocket-light.html">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4" style="background-color: #f9ffff;">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-5">
            <img src="icons/udd3.png" class="responsive-img">
        </div>

        <!-- /Logo -->
        <h4 class="mb-2" style="font-weight: 700">ADMIN LOGIN</h4>
        <!-- <p class="mb-4">Please sign-in to your account and start the adventure</p> -->
          <p class="admin-warning" style="color: red"><?php if (isset($_SESSION['errorLogin'])) {
              echo $_SESSION['errorLogin'];
              unset($_SESSION['errorLogin']);

            } 
                
            ?>
              
          </p>
        <form class="mb-3" action="login-process/users-login-process" method="post">
    <div class="form-floating">
        <select class="form-select" id="userType" name="userType" aria-label="User Type">
            <option selected disabled>User Type</option>
            <option value="ADMIN">ADMIN</option>
            <option value="EO">Chairman/E.O</option>
            <option value="CP">CONTENT PROVIDER</option>
        </select>
        <label for="userType">Select User Type</label>
    </div>
    <div class="form-floating">
        <select class="form-select" id="MB" name="MB" aria-label="Municipality Board">
            <option selected disabled>Select Municipality Board</option>
            <option value="basugaon_mb">Basugaon MB</option>
            <option value="bijni_mb">Bijni MB</option>
            <option value="fakiragram_mb">Fakiragram MB</option>
            <option value="goreswar_mb">Goreswar MB</option>
            <option value="gossaigaon_mb">Gossaigaon MB</option>
            <option value="kajalgaon_mb">Kajalgaon MB</option>
            <option value="kokrajhar_mb">Kokrajhar MB</option>
            <option value="tangla_mb">Tangla MB</option>
            <option value="udalguri_mb">Udalguri MB</option>
            <option value="UDD">UDD</option>
        </select>
        <label for="MB">Select MB</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone" />
       
        <label for="username">Phone</label>
         <p class="admin-warning" style="color: red"><?php if (isset($_SESSION['errorPhone'])) {
              echo $_SESSION['errorPhone'];
              unset($_SESSION['errorPhone']);

            } 
                
            ?>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
        <label for="password">Password</label>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-me" name="remember-me">
            <label class="form-check-label" for="remember-me">
                Remember Me
            </label>
        </div>
    </div>
    <button class="btn btn-primary d-grid w-100" type="submit">
        Sign in
    </button>
</form>


        <!-- <p class="text-center">
          <span>New on our platform?</span>
          <a href="auth-register-cover.html">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-4">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div> -->
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->


  

  <!-- Core JS -->
  <!-- build:js assetsvendor/js/core.js -->
  
  <script src="assetsvendor/libs/jquery/jquery.js"></script>
  <script src="assetsvendor/libs/popper/popper.js"></script>
  <script src="assetsvendor/js/bootstrap.js"></script>
  <script src="assetsvendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assetsvendor/libs/hammer/hammer.js"></script>
  <script src="assetsvendor/libs/i18n/i18n.js"></script>
  <script src="assetsvendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assetsvendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assetsvendor/libs/%40form-validation/popular.js"></script>
<script src="assetsvendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="assetsvendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="assetsjs/main.js"></script>
  

  <!-- Page JS -->
  <script src="assetsjs/pages-auth.js"></script>
  
</body>

</html>

<!-- beautify ignore:end -->

