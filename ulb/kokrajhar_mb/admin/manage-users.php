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
                  <span class="text-muted fw-light"><?php echo $userType;?> /</span><span style="text-transform: uppercase;">Manage Users</span> 
                </h4>
                  <div class="mt-3">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Users
                     </button>
                     <!-- Modal -->
                     




                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"><?php echo $_SESSION['this_user_MB'] ;?></h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                
                                 <div class="form-floating"> 
                                    <select class="form-select" id="MB" name="MB"placeholder="select" aria-label="Floating select example">
                                      
                                      <option value="kokrajhar_mb">Kokrajhar MB</option>
                                      
                                    </select>
                                    <label for="floatingInput">Select MB</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="username" id="username" placeholder=""  />
                                    <label for="floatingInput">Username</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="email" id="email" placeholder=""  />
                                     <p id="emailErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Email</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="password" id="password" placeholder=""  />
                                    
                                    <label for="floatingInput">Password</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder=""  />
                                    <p id="phoneErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Phone</label>
                                 </div>
                                 <!-- <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                 </div> -->
                                 <div class="form-floating">
                                    <select class="form-select" id="userType" name="userType" placeholder="select" aria-label="Floating select example">
                                       <option selected disabled>User Type</option>
                                       <option value="ADMIN">Chairman/E.O</option>
                                       <option value="CP">Content Provider</option>
                                       <!-- <option value="3">Three</option> -->
                                    </select>
                                    <label for="floatingInput">Select UserType</label>
                                 </div>
                                
                                 <div class="form-floating">
                                    <select class="form-select" id="status" name="status" placeholder="select" aria-label="Floating select example">
                                       <option selected disabled>Select</option>
                                       <option value="0">Not Active</option>
                                       <option value="1">Active</option>
                                       <option value="2">Banned</option>
                                       <!-- <option value="3">Three</option> -->
                                    </select>
                                    <label for="floatingInput">Status</label>
                                 </div>
                                <!--  <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=""  />
                                    <label for="floatingInput">Password</label>
                                 </div>
                                 <div class="form-floating">
                                     <label for="flatpickr-range" class="form-label">Range Picker</label>
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" />
                                    <input type="text" class="form-label" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" />
                                    <label for="floatingInput">Select Date</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="" id="flatpickr-time" />
                                    <label for="flatpickr-time">Time Picker</label>
                                 </div> -->
                              </div>
                              <div class="modal-footer">
                                 <p id="formErrorMessage" style="color:red"></p>
                                 <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button>
                                 <button type="button" id="add-user" class="btn btn-primary">ADD</button>

                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Users List Table -->
                  <div class="card" style="margin-top: 20px">
                     <div class="card-header border-bottom">
                        <h5 class="card-title">User Details</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 
                                 <th>Username</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Municipality Board</th>
                                 <th>User Type</th>
                                 <th>Status</th>
                                 <th>Action</th>
                                 <!-- <th>Start date</th>
                                    <th>Salary</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $readUsers = $crud->Read('user',"1"); 
                                 if ($readUsers) {
                                   $n=0;
                                   foreach($readUsers as $readKey){
                                 ?>
                              <tr>
                                 <td class="data"><?php echo ++$n; ?></td>
                                 
                                 <td class="data"><?php echo $readKey['username'];?></td>
                                 <td class="data"><?php echo $readKey['email']; ?></td>
                                 <td class="data"><?php echo $readKey['phone']; ?></td>
                                 <td class="data"><?php echo $readKey['MB']; ?></td>
                                 <td class="data"><?php echo $readKey['userType']; ?></td>
                                 <td class="data">
                                  <?php $status = $readKey['status']; 
                                      if ($status==1) {
                                          echo '<span class="badge bg-success">Active</span>';
                                      } else if ($status==2) {
                                          echo '<span class="badge bg-info">Banned</span>';
                                      } else if ($status==3) {
                                          echo '<span class="badge bg-primary">Left</span>';
                                      } else {
                                          echo '<span class="badge bg-danger">Inactive</span>';
                                      }
                                  ?>
                                          
                                 </td>
                                 <td class="data">
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $readKey['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 
                                 <th>Username</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Municipality Board</th>
                                 <th>User Type</th>
                                 <th>Status</th>
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Users</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <div class="form-floating selectMB"> 
                                    <select class="form-select" id="edit_MB" name="edit_MB"placeholder="select" aria-label="Floating select example">
                                      <option selected disabled>Municipality Board</option>
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
                                    <label for="floatingInput">Select MB</label>
                                 </div>
                                  <div class="form-floating">
                                    <input type="hidden" class="form-control" id="edit_user_id" name="edit_user_id" placeholder=""  />
                                    <label for="floatingInput">User ID</label>
                                 </div>
                                 
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_username" id="edit_username" placeholder=""  />
                                    <label for="floatingInput">Username</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_email" id="edit_email" placeholder=""  />
                                     <p id="updateEmailErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Email</label>
                                 </div>
                                 <!-- <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_password" id="edit_password" placeholder=""  />
                                    <p id="phoneErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Password</label>
                                 </div> -->
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="edit_phone" id="edit_phone" placeholder=""  />
                                    <p id="updatePhoneErrorMessage" style="color:red"></p>
                                    <label for="floatingInput">Phone</label>
                                 </div>
                                 <!-- <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                 </div> -->
                                 <div class="form-floating selectUser">
                                    <select class="form-select" id="edit_userType" name="edit_userType" placeholder="select" aria-label="Floating select example">
                                       <option selected disabled>User Type</option>
                                       <option value="ADMIN">Chairman/E.O</option>
                                       <option value="CP">Content Provider</option>
                                       <!-- <option value="3">Three</option> -->
                                    </select>
                                    <label for="floatingInput">Select UserType</label>
                                 </div>
                                
                                 <div class="form-floating selectStatus">
                                    <select class="form-select" id="edit_status" name="edit_status" placeholder="select" aria-label="Floating select example">
                                       <option selected disabled>Select</option>
                                       <option value="0">Not Active</option>
                                       <option value="1">Active</option>
                                       <option value="2">Banned</option>
                                       <!-- <option value="3">Three</option> -->
                                    </select>
                                    <label for="floatingInput">Status</label>
                                 </div>
                                <!--  <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=""  />
                                    <label for="floatingInput">Password</label>
                                 </div>
                                 <div class="form-floating">
                                     <label for="flatpickr-range" class="form-label">Range Picker</label>
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" />
                                    <input type="text" class="form-label" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" />
                                    <label for="floatingInput">Select Date</label>
                                 </div>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="" id="flatpickr-time" />
                                    <label for="flatpickr-time">Time Picker</label>
                                 </div> -->
                              </div>
                              <div class="modal-footer">
                                 <p id="updateErrorMessage" style="color:red"></p>
                                 <!-- <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button> -->
                                 <button type="button" id="update-user" class="btn btn-primary">UPDATE</button>
                                 <button type="button" id="delete-user" class="btn btn-danger">DELETE</button>

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



<script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>



  
  

  <!-- Page JS -->
  <script src="assets/js/forms-pickers.js"></script>
      <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
        let uploadButton = document.getElementById("upload-button");
        let chosenImage = document.getElementById("chosen-image");

        uploadButton.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src",reader.result);
            }
            fileName.textContent = uploadButton.files[0].name;
        }

    </script>
  <script type="text/javascript">
$(function () {
        $('#add-user').on('click', function () {
             // var name = $("#name").val();
            var username = $("#username").val();
            console.log(username);
            var MB = $("#MB").val();
            var status = $("#status").val();
       
            var email = $("#email").val();
       
            var password = $("#password").val();
            var phone = $("#phone").val();
            var userType = $("#userType").find(":selected").val();
            // var file = $("#upload-button")[0].files[0];
            var formData = new FormData();
            // formData.append('image', file);
            // formData.append('fname', fname);
            // formData.append('lname', lname);
            // formData.append('image', file);
            formData.append('MB', MB);
            formData.append('email', email);
            formData.append('username', username);
            formData.append('password', password);
            formData.append('phone', phone);
            formData.append('userType', userType);
            formData.append('status', status);

            if (username===""||username===null || MB===""||MB===null || status===""||status===null || email===""||email===null || password===""||password===null || phone===""||phone===null || userType===""|| userType===null ) {
                $("#formErrorMessage").html("Fill all the details to continue...");
                $('#add-user').preventDefault();

            } else {
                function validateEmail($email) {
                  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  return emailReg.test($email);
                }
                function validateMobile($mobile) {
                  var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                  return mobileReg.test($mobile);
                }
                if (!validateEmail(email)) {
                    $("#emailErrorMessage").html("Please Enter a valid email address.");
                    $("#email").focus();
                    $('#add-user').preventDefault();
                } else if (!validateMobile(phone)) {
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
                        url: "xhr/add-user",
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
        var userID = $(this).data('id');
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/edit-users",
            data: {userID : userID},
            success: function(response){
              
                $("#edit_username").val(response.username);
               
                $("#edit_email").val(response.email);
                $("#edit_phone").val(response.phone);
                $("#edit_user_id").val(response.user_id);
                $("div.selectMB select").val(response.MB).change();
                $("div.selectUser select").val(response.userType).change();
                $("div.selectStatus select").val(response.status).change();
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
        $('#update-user').on('click', function () {

            var username = $("#edit_username").val();
           
            var email = $("#edit_email").val();
            var MB = $("#edit_MB").val();
            
            var phone = $("#edit_phone").val();
            var userID = $("#edit_user_id").val();
            // var file = $("#aboutImage")[0].files[0];
            var MB = $("#edit_MB").find(":selected").val();
            var userType = $("#edit_userType").find(":selected").val();
            var status = $("#edit_status").find(":selected").val();
            var formData = new FormData();
            formData.append('username', username);
            
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('userID', userID);
            formData.append('MB', MB);
            formData.append('userType', userType);
            // formData.append('image', file);
            formData.append('status', status);

            if (username===""||username===null || email===""||email===null || phone===""||phone===null ||MB===""||MB===null ||status===""||status===null ||userType===""||userType===null) {
                $("#updateErrorMessage").html("Fill all the details to continue...");
                $('#add-user').preventDefault();
            } else {
                function validateEmail($email) {
                  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  return emailReg.test($email);
                }
                function validateMobile($mobile) {
                  var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                  return mobileReg.test($mobile);
                }
                if (!validateEmail(email)) {
                    $("#updateEmailErrorMessage").html("Please Enter a valid email address.");
                    $("#email").focus();
                    $('#add-user').preventDefault();
                } else if (!validateMobile(phone)) {
                    $("#updatePhoneErrorMessage").html("Please Enter a valid phone number.");
                    $("#phone").focus();
                    $('#add-user').preventDefault();
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
                        url: "xhr/update-users",
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
                
            }
            
        });
    });

    $(function () {
        $('#delete-user').on('click', function () {
            
            var userId = $("#edit_user_id").val();
            var formData = new FormData();
            formData.append('user_id', userId);
            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    type: "POST", 
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json", 
                    url: "xhr/delete-users",
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
                alert('User deletion aborted.');
            }
            
                
            
        });
    });
    


  </script>

</body>
</html>
<!-- beautify ignore:end -->
