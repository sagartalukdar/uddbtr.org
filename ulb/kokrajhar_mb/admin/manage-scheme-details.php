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
               <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="mt-3">
                  <h4 class="py-3 mb-4">
                  <span style="text-transform: uppercase;">Manage Scheme Details</span>
                  </h4>
                  <div class="card" style="margin-top: 20px">
                      <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                          <h5 class="card-title mb-0">Manage Scheme Details</h5>
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
                                 <th>Done by Whom</th>
                                 <th>Contact</th>
                                 <th>Progress Details</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>
                                 <th>Progress</th>                                
                                 <th>Action</th>                               
                     
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $readSchemeDetails = $crud->Read('scheme_details',"1 order by `id` desc"); 
                                 if ($readSchemeDetails) {
                                   $n=0;
                                   foreach($readSchemeDetails as $readKey){
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
                                   <a href=""data-bs-toggle="modal" data-id="<?php echo $readKey['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">EDIT</a>
                                 </td>                                
                              </tr>
                              <?php }}}}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Scheme Name</th>
                                 <th>Location</th>                               
                                 <th>Done by Whom</th>
                                 <th>Contact</th>
                                 <th>Progress Details</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>
                                 <th>Progress</th>                                
                                 <th>Action</th>                                 
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     
                  </div>
               </div>
               <!-- / Content -->
               <div class="modal fade" id="backDropModal2" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Manage Scheme's Details</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control" id="edit_scheme_details_id" name="edit_scheme_details_id" placeholder=""  />
                                </div>
                                
                                 <div class="form-floating">
                                      <textarea class="form-control" name="edit_scheme_details" id="edit_scheme_details" placeholder=" " style="height: 100px;"></textarea>
                                      <label for="scheme_name">Progress Details</label>
                                  </div>
                                  <div class="form-floating">
                                      <input type="number" min="0" max="100" class="form-control" name="edit_scheme_progress" id="edit_scheme_progress" >                        
                                      <label for="edit_scheme_progress">Progress in (Percentage %)</label>
                                      <p id="progressErrorMessage" style="color:red">
                                  </div>
                                   <div class="form-group">
                                      <div class="form-floating">
                                          <input type="file" class="form-control" accept="image/*" name="image1" id="upload-button1" />
                                          <label for="upload-button1">Image 1</label>
                                      </div>
                                      <div class="image-preview">
                                          <img id="chosen-image1" class="image-style" width="100px" height="100px">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="form-floating">
                                          <input type="file" class="form-control" accept="image/*" name="image2" id="upload-button2" />
                                          <label for="upload-button2">Image 2</label>
                                      </div>
                                      <div class="image-preview">
                                          <img id="chosen-image2" class="image-style" width="100px" height="100px">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="form-floating">
                                          <input type="file" class="form-control" accept="image/*" name="image3" id="upload-button3" />
                                          <label for="upload-button3">Image 3</label>
                                      </div>
                                      <div class="image-preview">
                                          <img id="chosen-image3" class="image-style" width="100px" height="100px">
                                      </div>
                                  </div>

                                 
                                 
                              </div>
                              <div class="modal-footer">
                                 <p id="updateErrorMessage" style="color:red"></p>
                                 <!-- <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button> -->
                                 <button type="button" id="update-scheme-details" class="btn btn-primary">UPDATE</button>
                                 <button type="button" id="delete-scheme-details" class="btn btn-danger">DELETE</button>

                              </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     
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

    $(document).ready(function() {
        $('#edit_scheme_progress').on('input', function() {
            var progress = $(this).val();
            var isValid = /^\d+$/.test(progress); 
            
            if (!isValid) {
                $('#progressErrorMessage').text("Progress must be a valid digit.");
                $('#update-scheme-details').attr('disabled', true); 
            } else {
                $('#progressErrorMessage').text("");
                $('#update-scheme-details').attr('disabled', false);

                var value = parseInt(progress);
                if (value > 100) {
                    $('#progressErrorMessage').text("Progress must within the range of 0 to 100.");
                    $('#update-scheme-details').attr('disabled', true); 
                } else if (value < 0) {
                    $('#progressErrorMessage').text("Progress must within the range of 0 to 100.");
                    $('#update-scheme-details').attr('disabled', true);           
                } else{
                    $('#progressErrorMessage').text("");
                    $('#update-scheme-details').attr('disabled', false);
                }
            }        
            
        });
    })

    $(function () {
        $('.edit').on('click', function () {
            var scheme_details_id = $(this).data('id');
            console.log(scheme_details_id);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "xhr/edit-scheme-details",
                data: { scheme_details_id: scheme_details_id },
                success: function (response) {
                    $("#edit_scheme_details_id").val(response.id);
                    $("#edit_scheme_details").val(response.details);
                    $("#edit_scheme_progress").val(response.scheme_progress);
                    
                    // Set image previews
                    $("#chosen-image1").attr('src', response.image1 ? '' + response.image1 : '');
                    $("#chosen-image2").attr('src', response.image2 ? '' + response.image2 : '');
                    $("#chosen-image3").attr('src', response.image3 ? '' + response.image3 : '');

                    console.log(response.status);
                },
                error: function (error) {
                    swal("Error!", "Something went wrong", "error");
                }
            });
        });
    });

    function readURL(input, targetImage) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(targetImage).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            $(targetImage).attr('src', '');
        }
    }

    $("#upload-button1").change(function () {
        readURL(this, '#chosen-image1');
    });
    $("#upload-button2").change(function () {
        readURL(this, '#chosen-image2');
    });
    $("#upload-button3").change(function () {
        readURL(this, '#chosen-image3');
    });


    $(function () {
        $('#update-scheme-details').on('click', function () {
            var scheme_details_id = $("#edit_scheme_details_id").val();
            var scheme_details = $("#edit_scheme_details").val();
           
            var scheme_progress = $("#edit_scheme_progress").val();
           
            var image1 = $("#upload-button1")[0].files[0];
            var image2 = $("#upload-button2")[0].files[0];
            var image3 = $("#upload-button3")[0].files[0];
            
            var formData = new FormData();
            formData.append('scheme_details_id', scheme_details_id);

            formData.append('scheme_details', scheme_details);
            
            formData.append('scheme_progress', scheme_progress);
               if (image1) {
            formData.append('image1', image1);
                }
                if (image2) {
                    formData.append('image2', image2);
                }
                if (image3) {
                    formData.append('image3', image3);
                }
         

            if (scheme_details_id===""||scheme_details_id===null ||scheme_details===""||scheme_details===null || scheme_progress===""||scheme_progress===null || image1===""||image1===null ||image2===""||image2===null ||image3===""||image3===null) {
                $("#updateErrorMessage").html("Fill all the details to continue...");
                $('#update-scheme-details').preventDefault();
            } else {
                    
                    $("#updateErrorMessage").html("");
                    $.ajax({
                        type: "POST", 
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json", 
                        url: "xhr/update-scheme-details",
                        data: formData,
                        success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.reload();
                            }, 1000);   
                            
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
              
                
            }
            
        });
    });

    $(function () {
        $('#delete-scheme-details').on('click', function () {
            var scheme_details_id = $("#edit_scheme_details_id").val();
            // var userId = $("#edit_user_id").val();
            var formData = new FormData();
            formData.append('scheme_details_id', scheme_details_id);
            if (confirm('Are you sure you want to delete this Scheme Details?')) {
                $.ajax({
                    type: "POST", 
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json", 
                    url: "xhr/delete-scheme-details",
                    data: formData,
                    success: function(response){
                    if(response.successMessage){
                        // showSuccessMessage ();
                        swal("Success!",response.successMessage+" Reloading", "success");
                        
                        setTimeout(function () {
                        window.location.reload();
                        }, 3000);   
                        
                    } else if (response.errorMessage) {
                        swal("Error!", response.errorMessage, "error");
                    }
                    
                    },
                    error: function(error){
                    swal("Error!", "Something went wrong", "error");
                    
                    }
                });
            } else {
                alert('Scheme Details deletion aborted.');
            }
            
                
            
        });
    });


  </script>

</body>
</html>
<!-- beautify ignore:end -->
