<?php include("include/head.php");?>
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
               <div class="container-xxl flex-grow-1 container-p-y" style="background-color: <?php echo $container_xxl_color;?>">
                
                <h4 class="py-3 mb-4">
                  <span style="text-transform: uppercase;">Verify Scheme Details</span>
                </h4>
                  <div class="mt-3">
                     <!-- Button trigger modal -->
                     <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Manage Schemes
                     </button> -->
                     <!-- Modal -->
                     




                     
                  <!-- Users List Table -->
                  <div class="card" style="margin-top: 20px">
                      <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                          <h5 class="card-title mb-0">Scheme Details Verification</h5>
                          <span>
                             <a href="manage-schemes">
                              <button class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="bx bx-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Scheme</span></span></button>
                            </a>
                          </span>
                         
                      </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 
                                 <th>Scheme Name</th>
                                 <th>Location</th>
                                 <!-- <th>Date Completed</th> -->
                                 <!-- <th>Municipality Board</th> -->
                                 <th>Contractor</th>
                                 <th>Contact</th>
                                 <th>Progress Details</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>
                                 <th>Progress</th>
                                 <th>Status</th>                               
                                 <th>Verify/Cancel</th>
                                
                                 <!-- <th>Start date</th>
                                    <th>Salary</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $readSchemeDetails = $crud->Read('scheme_details',"1 order by `id` desc"); 
                                 if ($readSchemeDetails) {
                                   $n=0;
                                   foreach($readSchemeDetails as $readKey){
                                    $scheme_details_id=$readKey['id'];
                                    $schemeID=$readKey['scheme_id'];
                                    $scheme_details=$readKey['scheme_details'];
                                    $progress=$readKey['progress'];
                                    $scheme_img1=$readKey['image1'];
                                    $scheme_img2=$readKey['image2'];
                                    $scheme_img3=$readKey['image3'];
                                    $readScheme = $crud->Read('schemes',"`id`='$schemeID'"); 
                                    if($readScheme){
                                      foreach($readScheme as $Scheme){
                                         $scheme_name=$Scheme['scheme_name'];

                                         $location=$Scheme['location'];
                                         $done_by=$Scheme['done_by'];
                                         $contact_no=$Scheme['contact_no'];
                                 ?>
                              <tr>
                                 <td class="data"><?php echo ++$n; ?></td>
                                 
                                 <td class="data"><?php echo $scheme_name;?></td>
                                 <td class="data"><?php echo $location; ?></td>
                                 <td class="data"><?php echo $done_by; ?></td>
                                 <td class="data"><?php echo $contact_no; ?></td>
                                 <td class="data"><?php echo $scheme_details; ?></td>
                                 <td class="data"><img src="<?php echo $scheme_img1; ?>"style="max-width: 80px"> </td>
                                 <td class="data"><img src="<?php echo $scheme_img2; ?>"style="max-width: 80px"> </td></td>
                                 <td class="data"><img src="<?php echo $scheme_img3; ?>"style="max-width: 80px"> </td></td>
                                 <td class="data"><?php echo $progress; ?></td>
                                 <td class="data">
                                  <?php $status = $readKey['status']; 
                                      if ($status==0) {
                                          echo '<span class="badge bg-danger">not-Verified</span>';
                                      } else if ($status==1) {
                                          echo '<span class="badge bg-success">Verified</span>';
                                      } else if ($status==2) {
                                          echo '<span class="badge bg-info">cancel</span>';
                                      } else {
                                          echo '<span class="badge bg-primary">Error</span>';
                                      }
                                  ?>
                                          
                                 </td>
                                 <td class="data">
                                      <div class="action-buttons">
                                          <button class="btn btn-success btn-sm verify-btn" data-id="<?php echo $scheme_details_id; ?>" data-scheme-id="<?php echo $schemeID; ?>"><i class="fas fa-check"></i></button>

                                          <button class="btn btn-danger btn-sm cancel-btn" data-id="<?php echo $scheme_details_id; ?>" data-scheme-id="<?php echo $schemeID; ?>"><i class="fas fa-times"></i></button>
                                      </div>
                                  </td>
                                
                              </tr>
                              <?php }}}}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Scheme Name</th>
                                 <th>Location</th>
                                 <th>Contractor</th>
                                 <th>Contact</th>
                                 <th>Progress Details</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>
                                 <th>Progress</th>
                                 <th>Status</th>                              
                                 <th>Verify/Cancel</th>                                 
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     
                  </div>
               </div>
               <style type="text/css">
                 .action-buttons {
                      display: flex;
                      gap: 10px; /* Adjust the gap between buttons as needed */
                      justify-content: center; /* Center the buttons horizontally */
                  }
               </style>
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



   
  <!-- Page JS -->
  <script src="assets/js/forms-pickers.js"></script>
  <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>

  <script type="text/javascript">

        $(function() {
            // Verify button click handler
            $('.verify-btn').on('click', function() {
                var scheme_details_Id = $(this).data('id');
                console.log(scheme_details_Id);
                var schemeId = $(this).data('scheme-id');
                console.log(schemeId);
                
                var formData = new FormData();
                formData.append('scheme_details_Id', scheme_details_Id);
                formData.append('schemeId', schemeId);
                
                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/verify-scheme-details",
                    data: formData,
                    success: function(response) {
                        if (response.successMessage) {
                            swal("Success!", response.successMessage + " Reloading", "success");
                            setTimeout(function() {
                                window.location.reload();
                            }, 3000);
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                    },
                    error: function(error) {
                        swal("Error!", "Something went wrong", "error");
                    }
                });
        });



        // Cancel button click handler
        $('.cancel-btn').on('click', function() {
            var scheme_details_Id = $(this).data('id');
            console.log(scheme_details_Id);
            var schemeId = $(this).data('scheme-id');
            console.log(schemeId);
            
            var formData = new FormData();
            formData.append('scheme_details_Id', scheme_details_Id);
            formData.append('schemeId', schemeId);

            if (confirm('Are you sure you want to cancel?')) {
                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/cancel-scheme-details",
                    data: formData,
                    success: function(response) {
                        if (response.successMessage) {
                            swal("Success!", response.successMessage + " Reloading", "success");
                            setTimeout(function() {
                                window.location.reload();
                            }, 3000);
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                    },
                    error: function(error) {
                        swal("Error!", "Something went wrong", "error");
                    }
                });
            } else {
                alert('Cancel aborted.');
            }
        });
    });




  </script>

</body>
</html>
<!-- beautify ignore:end -->
