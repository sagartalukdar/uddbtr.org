<?php include("include/head.php")?>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
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
  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">


                <!-- Animation -->
                <div class="card mb-4">
                  <h5 class="card-header">Select Municipality Board</h5>
                  <div class="card-body">
                    <!-- Modal Animation with options -->
                    
                    <div class="d-flex mt-3">
                      <select class="form-select animation-dropdown me-2 w-25" id="animation-dropdown">
                          <option selected disabled="">Select</option>
                          <option value="basugaon_mb">Basugaon MB</option>
                          <option value="bijni_mb">Bijni MB</option>
                          <option value="fakiragram_mb">Fakiragram MB</option>
                          <option value="goreswar_mb">Goreswar MB</option>
                          <option value="gossaigaon_mb">Gossaigaon MB</option>
                          <option value="kajalgaon_mb">Kajalgaon MB</option>
                          <option value="kokrajhar_mb">Kokrajhar MB</option>
                          <option value="tangla_mb">Tangla MB</option>
                          <option value="udalguri_mb">Udalguri MB</option>
                          <option value="urban_development_department">UDD</option>
                          
                      </select>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" id="submit-btn">
                        SUBMIT
                      </button>

                      
                    </div>
                  </div>
                </div>
                <!--/ Table-->
                <div class="card mb-4" id="table-container" style="display: none;">
                    <h5 class="card-header">Users Data</h5>
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl no.</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    
                                </tr>
                            </thead>
                            <tbody></tbody> 
                        </table>
                    </div>
                </div>

          <!-- <div class="card mb-4" id="table-container" style="display: none">
            <h5 class="card-header">Bootstrap modals</h5>
            <div class="card-body">
              <div class="row gy-3">
                <div class="card-datatable table-responsive" style="padding: 20px">
                    <table id="example" class="datatables-users table"style="width:100%; padding: 20px;">
                       <thead>
                          <tr>
                             <th>Sl no.</th>
                             <th>Username</th>
                             <th>Email</th>
                             <th>User Type</th>
                             
                          </tr>
                       </thead>
                       <tbody id="table-body">
                          
                       </tbody>
                       <tfoot>
                          <tr>
                             <th>Sl no.</th>
                             <th>Username</th>
                             <th>Email</th>
                             <th>User Type</th>
                          </tr>
                       </tfoot>
                    </table>
                </div>
                
              </div>
            </div>
  
          </div> -->
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



<script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

  <!-- <script>
    $(document).ready(function () {
    $('#submit-btn').click(function () {
        var selectedValue = $('#animation-dropdown').val();
        if (selectedValue) {
            $.ajax({
                url: 'xhr/view-users',
                type: 'POST',
                data: { mb_selection: selectedValue },
                dataType: 'json',
                success: function (response) {
                    var tableBody = $('#table-body');
                    tableBody.empty();

                    if (response && response.length > 0) {
                        $.each(response, function (index, row) {
                            // Assuming your database columns are username, email, user_type
                            tableBody.append('<tr>' +
                                '<td class="data">' + (index + 1) + '</td>' +
                                '<td class="data">' + row.username + '</td>' +
                                '<td class="data">' + row.email + '</td>' +
                                '<td class="data">' + row.userType + '</td>' +
                                '</tr>');
                        });

                        $('#table-container').show();
                        $('#example_info').show();  
                    } else {
                        $('#table-container').hide(); 
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#table-container').hide(); // Hide table container on error
                }
            });
        } else {
            alert('Please select a municipality board.');
        }
    });
});


</script> -->
<script type="text/javascript">
  $(document).ready(function () {
    $('#submit-btn').click(function () {
        var selectedValue = $('#animation-dropdown').val();
        if (selectedValue) {
            $.ajax({
                url: 'xhr/view-users',
                type: 'POST',
                data: { mb_selection: selectedValue },
                dataType: 'json',
                success: function (response) {
                    var table = $('#example').DataTable({
                        destroy: true, // Destroy existing DataTable instance
                        data: response, // Assign fetched data
                        columns: [
                            { data: null, render: function (data, type, row, meta) { return meta.row + 1; } },
                            { data: 'username' },
                            { data: 'email' },
                            { data: 'userType' }
                        ]
                    });

                    $('#table-container').show(); // Show table container
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#table-container').hide(); // Hide table container on error
                }
            });
        } else {
            alert('Please select a municipality board.');
        }
    });
});

</script>

</body>

</html>



