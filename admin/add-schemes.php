<?php include("include/head.php");?>

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
  <span class="text-muted fw-light">Admin /</span> Add Schemes  
</h4>

<!--/ Card Border Shadow -->
<div class="row">
  <!-- Flat Picker -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Form</h5>
      <div class="card-body" style="box-shadow: none;">
        
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder=""  />
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" placeholder="" style="height: 100px"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            <div class="form-floating">
                <select class="form-select" id="floatingSelect" placeholder="select" aria-label="Floating select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingInput">Select</label>
            </div>

            <div class="form-floating">
             <!--  <label for="flatpickr-range" class="form-label">Range Picker</label> -->
              <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" />
                <!-- <input type="text" class="form-label" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" /> -->
                <label for="floatingInput">Select Date</label>
            </div>
           <div class="form-floating">
                <input type="text" class="form-control" placeholder="" id="flatpickr-time" />
                <label for="flatpickr-time">Time Picker</label>
            </div>
           
      </div>
    </div>
</div>
<!-- 
    <div class="col-12 mb-4">
      <div class="card">
        <h5 class="card-header">Flatpickr</h5>
        <div class="card-body">
          <div class="row">
            
            <div class="col-md-6 col-12 mb-4">
              <label for="flatpickr-range" class="form-label">Range Picker</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" />
            </div>
            
          </div>
        </div>
      </div>
    </div> -->
    <!-- /Flatpickr -->

  




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
  
  <!-- endbuild -->


<script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>


  
  

  <!-- Page JS -->
  <script src="assets/js/forms-pickers.js"></script>
  
</body>

</html>

<!-- beautify ignore:end -->

