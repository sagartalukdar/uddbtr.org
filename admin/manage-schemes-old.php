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
                  <span class="text-muted fw-light"><?php echo $userType;?> /</span><span style="text-transform: uppercase;">Manage Scheme</span> 
                </h4>
                  <div class="mt-3">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Schemes
                     </button>
                     <!-- Modal -->
                     




                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">ADD Scheme Under Kokrajhar Municipality Board</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="scheme_name" id="scheme_name" placeholder=""  />
                                    
                                    <label for="floatingInput">Scheme Name</label>
                                 </div>
                                 <div class="form-floating">
                                      <textarea class="form-control" name="location" id="location" placeholder=" " style="height: 100px;"></textarea>
                                      <label for="scheme_name">Location</label>
                                  </div>

                                 <!--  <div class="form-floating">
                                    
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" name="date" />
                                    
                                      <label for="floatingInput">Date Completed</label>
                                  </div> -->
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="person" id="person" placeholder=""  />
                                     <!-- <p id="emailErrorMessage" style="color:red"></p> -->
                                    <label for="floatingInput">Done by</label>
                                 </div>
                                
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder=""  />
                                    <p id="phoneErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Phone</label>
                                 </div>
                                 
                              </div>
                              <div class="modal-footer">
                                 <p id="formErrorMessage" style="color:red"></p>
                                 <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button>
                                 <button type="button" id="add-scheme" class="btn btn-primary">ADD</button>

                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Users List Table -->
                  <div class="card" style="margin-top: 20px">
                     <div class="card-header border-bottom">
                        <h5 class="card-title">Schemes under Kokrajhar Municipality Board</h5>
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
                                 <th>Contractor Name</th>
                                 <th>Contact</th>
                                 <!-- <th>Status</th> -->
                                 <th>Action</th>
                                 <th>Action</th>
                             
                                 <!-- <th>Start date</th>
                                    <th>Salary</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $readUsers = $crud->Read('schemes',"1"); 
                                 if ($readUsers) {
                                   $n=0;
                                   foreach($readUsers as $readKey){
                                 ?>
                              <tr>
                                 <td class="data"><?php echo ++$n; ?></td>
                                 
                                 <td class="data"><?php echo $readKey['scheme_name'];?></td>
                                 <td class="data"><?php echo $readKey['location']; ?></td>
                                 <td class="data"><?php echo $readKey['done_by']; ?></td>
                                 <td class="data"><?php echo $readKey['contact_no']; ?></td>
                                 <!-- <td class="data"><?php echo $readKey['userType']; ?></td> -->
                                 <!-- <td class="data">
                                  <?php $status = $readKey['status']; 
                                      if ($status==1) {
                                          echo '<span class="badge bg-success">approved</span>';
                                      } else if ($status==2) {
                                          echo '<span class="badge bg-info">cancel</span>';
                                      } else if ($status==3) {
                                          echo '<span class="badge bg-primary">Left</span>';
                                      } else {
                                          echo '<span class="badge bg-danger">not-approved</span>';
                                      }
                                  ?>
                                          
                                 </td> -->
                                 <td class="data">
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $readKey['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">EDIT</a>
                                </td>
                                <td class="data">
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $readKey['id']; ?>" data-bs-target="#backDropModal3" target="_blank" class="btn btn-info btn-buy-now btn-sm add-details">ADD DETAILS</a>
                                </td>
                               
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 
                                 <th>Scheme Name</th>
                                 <th>Location</th>
                                 <!-- <th>Date Completed</th> -->
                                 <!-- <th>Municipality Board</th> -->
                                 <th>Contractor Name</th>
                                 <th>Contact</th>
                                 <!-- <th>Status</th> -->
                                 <th>Action</th>
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Schemes under Kokrajhar Municipality Board</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control" id="edit_scheme_id" name="edit_scheme_id" placeholder=""  />
                                    <label for="floatingInput">Scheme ID</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_scheme_name" id="edit_scheme_name" placeholder=""  />
                                    
                                    <label for="floatingInput">Scheme Name</label>
                                 </div>
                                 <div class="form-floating">
                                      <textarea class="form-control" name="edit_location" id="edit_location" placeholder=" " style="height: 100px;"></textarea>
                                      <label for="scheme_name">Location</label>
                                  </div>

                                 <!--  <div class="form-floating">
                                    
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" name="date" />
                                    
                                      <label for="floatingInput">Date Completed</label>
                                  </div> -->
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_person" id="edit_person" placeholder=""  />
                                     <!-- <p id="emailErrorMessage" style="color:red"></p> -->
                                    <label for="floatingInput">Done by</label>
                                 </div>
                                
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_phone" id="edit_phone" placeholder=""  />
                                    <p id="phoneErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Phone</label>
                                 </div>
                                 
                              </div>
                              <div class="modal-footer">
                                 <p id="updateErrorMessage" style="color:red"></p>
                                 <!-- <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button> -->
                                 <button type="button" id="update-scheme" class="btn btn-primary">UPDATE</button>
                                 <button type="button" id="delete-scheme" class="btn btn-danger">DELETE</button>

                              </div>
                           </form>
                        </div>
                     </div>
                     
                     <!-- SCHEME DETAILS MODAL -->
                     <div class="modal fade" id="backDropModal3" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">ADD Schemes Details Under Kokrajhar Municipality Board</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control" id="scheme_id" name="scheme_id" placeholder=""  />
                                    <label for="floatingInput">Scheme ID</label>
                                 </div>
                                 <div class="form-floating">
                                      <textarea class="form-control" name="scheme_details" id="scheme_details" placeholder=" " style="height: 100px;"></textarea>
                                      <label for="scheme_name">Progress Details</label>
                                  </div>
                                  <div class="form-floating">
                                      <textarea class="form-control" name="scheme_progress" id="scheme_progress" placeholder=" " style="height: 100px;"></textarea>

                                      <label for="scheme_name">Progress in (Percentage %)</label>
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
                                 <p id="addErrorMessage" style="color:red"></p>
                                 <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button>
                                 <button type="button" id="add-scheme-details" class="btn btn-primary">Add Details</button>
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
   
    function handleImagePreview(input, imagePreview) {
        input.on('change', function() {
            var file = this.files[0];
            var reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.attr('src', e.target.result);
            }
            
            reader.readAsDataURL(file);
        });
    }

    // Bind image preview for each file input
    handleImagePreview($('#upload-button1'), $('#chosen-image1'));
    handleImagePreview($('#upload-button2'), $('#chosen-image2'));
    handleImagePreview($('#upload-button3'), $('#chosen-image3'));
});
</script>
  

  <script type="text/javascript">
    $(function () {
        $('#add-scheme').on('click', function () {
             // var name = $("#name").val();
            var scheme_name = $("#scheme_name").val();
            console.log(scheme_name);
            var location = $("#location").val();
            // var status = $("#flatpickr-range").val();
       
            var person = $("#person").val();
       
           
            var phone = $("#phone").val();

           
            // var file = $("#upload-button")[0].files[0];
            var formData = new FormData();
            // formData.append('image', file);
            // formData.append('fname', fname);
            // formData.append('lname', lname);
            // formData.append('image', file);
            formData.append('scheme_name', scheme_name);
            formData.append('location', location);
            formData.append('person', person);
            formData.append('phone', phone);
            

            if (scheme_name===""||scheme_name===null || location===""||location===null || person===""||person===null || phone===""||phone===null ) {
                $("#formErrorMessage").html("Fill all the details to continue...");
                $('#add-user').preventDefault();

            } else {
              $("#formErrorMessage").html("");
                
                function validateMobile($mobile) {
                  var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                  return mobileReg.test($mobile);
                }
                 if (!validateMobile(phone)) {
                    $("#phoneErrorMessage").html("Please Enter a valid phone number.");
                    $("#phone").focus();
                    $('#add-user').preventDefault();
                } else {
                    $("#formErrorMessage").html("");
                    $("#emailErrorMessage").html("");
                    $("#phoneErrorMessage").html("");

                    $("#add-user").css("display","none");
                    // $("#add-user-dummy").css("display","inline-block");

                    $.ajax({

                        type: "POST", 
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json", 
                        url: "xhr/add-scheme",
                        mimeType: 'multipart/form-data',
                        data: formData,
                        success: function(response){
                        if(response.successMessage){
                            $("#add-course").css("display", "none");
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.reload();
                            }, 3000);   
                            
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                            $("#add-user-dummy").css("display","none");
                            $("#add-user").css("display","inline-block");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
                }
                
            }
            
        });
    });

$(function () {
        $('.edit').on('click', function () {
        var schemeID = $(this).data('id');
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/edit-schemes",
            data: {schemeID : schemeID},
            success: function(response){
              




                $("#edit_scheme_id").val(response.scheme_id);
               
                $("#edit_scheme_name").val(response.scheme_name);
                $("#edit_location").val(response.location);
                $("#edit_person").val(response.person);
                $("#edit_phone").val(response.phone);
               
                // $('#responseImage').attr("src",response.image);

                console.log(response.status);
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
            }
        });
        });
    });
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#responseImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  } else {
    $('#responseImage').attr('src', '');
  }
}

$("#aboutImage").change(function() {
  readURL(this);
});


    $(function () {
        $('#update-scheme').on('click', function () {

            var schemename = $("#edit_scheme_name").val();

            var scheme_id = $("#edit_scheme_id").val();
           console.log(scheme_id);
            var location = $("#edit_location").val();
            var person = $("#edit_person").val();
            
            var phone = $("#edit_phone").val();
            
            var formData = new FormData();
         
            formData.append('scheme_id', scheme_id);
            
            formData.append('schemename', schemename);
            formData.append('location', location);
            formData.append('person', person);
            formData.append('phone', phone);
            

            if (schemename===""||schemename===null || scheme_id===""||scheme_id===null || location===""||location===null || person===""||person===null ||phone===""||phone===null) {
                $("#updateErrorMessage").html("Fill all the details to continue...");
                $('#update-scheme').preventDefault();
            } 
                function validateMobile($mobile) {
                  var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                  return mobileReg.test($mobile);
                }
                 if (!validateMobile(phone)) {
                    $("#updatePhoneErrorMessage").html("Please Enter a valid phone number.");
                    $("#phone").focus();
                    $('#update-scheme').preventDefault();
                } else {
                    $("#formErrorMessage").html("");
                    $("#emailErrorMessage").html("");
                    $("#phoneErrorMessage").html("");
                    $.ajax({
                        type: "POST", 
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json", 
                        url: "xhr/update-scheme",
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
        $('#delete-scheme').on('click', function () {
            
            var schemeId = $("#add-details").val();
            var formData = new FormData();
            formData.append('schemeId', schemeId);
            if (confirm('Are you sure you want to delete this Scheme?')) {
                $.ajax({
                    type: "POST", 
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json", 
                    url: "xhr/delete-scheme",
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
                alert('Scheme deletion aborted.');
            }
            
                
            
        });
    });
    $(document).ready(function() {
   
    $('#backDropModal3').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); 
        var schemeId = button.data('id'); 
        console.log("Scheme ID from button:", schemeId);

        var modal = $(this);
        var inputField = modal.find('#scheme_id');
        inputField.val(schemeId);

        console.log("Scheme ID set in input field:", inputField.val());
    });


    $('#add-scheme-details').on('click', function() {
            
            var scheme_id = $("#scheme_id").val();
            console.log(scheme_id);
            var scheme_details = $("#scheme_details").val();
            console.log(scheme_details);
            var progress = $("#scheme_progress").val();
           var file1 = $("#upload-button1")[0].files[0];
           var file2 = $("#upload-button2")[0].files[0];
           var file3 = $("#upload-button3")[0].files[0];
            
            var formData = new FormData();
            formData.append('scheme_id', scheme_id);
            formData.append('scheme_details', scheme_details);
            formData.append('progress', progress);
             formData.append('image1', file1);
             formData.append('image2', file2);
             formData.append('image3', file3);
           
            if (scheme_id===""||scheme_id===null || scheme_details===""||scheme_details===null || progress===""||progress===null || file1===""||file1===null ||file2===""||file2===null ||file3 ==""|| file3==""){
                $("#addErrorMessage").html("Fill all the details to continue...");
                return false;
            } else {
                $("#addErrorMessage").html("");

               
             
                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "xhr/add-scheme-details",
                        data: formData,
                        success: function(response) {
                            if (response.successMessage) {
                                swal("Success!", response.successMessage + " Reloading", "success");
                                setTimeout(function() {
                        window.location.href = "manage-scheme-details"; // Redirect to manage-scheme-details
                    }, 3000);
                            } else if (response.errorMessage) {
                                swal("Error!", response.errorMessage, "error");
                            }
                        },
                        error: function(error) {
                            swal("Error!", "Something went wrong", "error");
                        }
                    });
                }
      
        
    });
});
$(document).ready(function() {
    
    $('#scheme_progress').on('input', function() {
        var progress = $(this).val();
        var isValid = /^\d+$/.test(progress); 
        
        if (!isValid) {
            $('#progressErrorMessage').text("Progress must be a digit.");
            $('#add-scheme-details').attr('disabled', true); 
        } else {
            $('#progressErrorMessage').text("");
            $('#add-scheme-details').attr('disabled', false);
        }
    });

    // Handle form submission
    $('#add-scheme-details').on('click', function(event) {
        var schemeId = $("#edit_scheme_id").val();
        var progress = $("#scheme_progress").val();

        console.log("Scheme ID from input field:", schemeId);
        console.log("Progress:", progress);

        if (!/^\d+$/.test(progress)) {
            event.preventDefault(); 
            $('#progressErrorMessage').text("Progress must be a digit.");
        }
    });
});


  </script>

</body>
</html>
<!-- beautify ignore:end -->
