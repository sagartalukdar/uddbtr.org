<?php include("include/head.php");?>
<link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />
<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
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
 
<!-- / Navbar -->
<!-- <style>
  .form-control {
    border: none;
    border-bottom: 2px solid #ced4da;
    transition: border-bottom 0.3s ease;
    outline: none; 
  }

  .form-control:focus {
    border-bottom: 2px solid #007bff;
  }
</style> -->
<style>
    /* Basic styles for form elements */
    .form-floating {
        position: relative;
        margin-bottom: 1rem;
    }
    .form-floating input,
    .form-floating select,
    .form-floating textarea {
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .form-floating label {
        position: absolute;
        top: 0;
        left: 0;
        padding: .375rem .75rem;
        pointer-events: none;
        color: #495057;
        transition: top 0.3s ease, opacity 0.3s ease, color 0.3s ease;
    }
    /* Animation for label when input gets focus */
    .form-floating input:focus ~ label,
    .form-floating select:focus ~ label,
    .form-floating textarea:focus ~ label,
    .form-floating input:not(:placeholder-shown) ~ label,
    .form-floating select:not(:placeholder-shown) ~ label,
    .form-floating textarea:not(:placeholder-shown) ~ label {
        top: -0.5rem;
        font-size: 1rem;
        color: #6c757d;
        font-weight: 700;
    }
</style>
      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row">
 <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Float label</h5>
      <div class="card-body"style="box-shadow: none;">
        
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" placeholder="" style="height: 100px"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Select</label>
            </div>
            <div class="form-floating">
                <label for="flatpickr-human-friendly" class="form-label">Human Friendly Date Picker</label>
                <input type="text" class="form-control" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" />
          </div>
          <div class="form-floating">
            <label for="flatpickr-time" class="form-label">Time Picker</label>
            <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
          </div>
      </div>
    </div>
  </div>
  
  <!-- Total Revenue -->
  
  <!--/ Total Revenue -->
  
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

  
  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
 <?php include("include/javascript.php");?>
   <script src="assets/vendor/libs/moment/moment.js"></script>
<script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
<script src="assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
<script src="assets/vendor/libs/pickr/pickr.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="assets/js/forms-pickers.js"></script>
</body>


</html>


