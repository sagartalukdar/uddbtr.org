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
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
               <!-- Content -->
               <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="mt-3">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Department Dignities
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"> Add Department Dignities</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder=""  />
                                            <label for="name">Full Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="designation" placeholder="" />
                                            <label for="designation">Designation</label>
                                        </div>
                                    </div>
                                </div>          
                               
                              </div>
                              <div class="modal-footer">
                                 <p class="formErrorMessage" style="color:red"></p>
                                 <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button>
                                 <button type="button" id="submit" class="btn btn-primary">ADD</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Users List Table -->
                  <div class="card" style="margin-top: 20px">
                     <div class="card-header border-bottom">
                        <h5 class="card-title">View Department Dignities</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Full Name</th>
                                 <th>Designation</th>                                                      
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $dignities = $crud->Read('department_dignities',"1 order by `id` desc"); 
                                 if ($dignities) {
                                   $n=0;
                                   foreach($dignities as $dignity){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>                           
                                 <td><?php echo $dignity['name'];?></td>
                                 <td style="text-align:justify;"><?php echo $dignity['designation']; ?></td>                                
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $dignity['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Full Name</th>
                                 <th>Designation</th>                                                      
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Department Dignities</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                                 

                                 <div class="form-floating d-none">
                                    <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                                 </div>
                     
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="editName" placeholder=""  />
                                            <label for="editName">Full Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="editDesignation" placeholder="" />
                                            <label for="editDesignation">Designation</label>
                                        </div>
                                    </div>
                                </div>           
                               
                              </div>
                              <div class="modal-footer">
                                 <p id="updateErrorMessage" style="color:red"></p>
                                 <!-- <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button> -->
                                 <button type="button" id="update" class="btn btn-primary">UPDATE</button>
                                 <button type="button" id="delete" class="btn btn-danger">DELETE</button>
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

   <script>
    $('#submit').on('click',function(){ 
      var name=$('#name').val();
      var designation=$('#designation').val();
 
      if(!name || !designation){
        $('.formErrorMessage').html("please fill the above block to continue !");
      }else{      
        $('.formErrorMessage').html("");
         
        var formData=new FormData();
        formData.append("name",name);   
        formData.append("designation",designation);

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-department-dignities",        
          data: formData,
          success: function(response){
            if(response.successMessage){
                  $("#backDropModal").css("display", "none");
                  // showSuccessMessage ();
                  swal("Success!",response.successMessage+" Reloading", "success");
                  
                  setTimeout(function () {
                  window.location.reload();
                  }, 2000);   
                  
            } else if (response.errorMessage) {
                  swal("Error!", response.errorMessage, "error");
            }
            
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
          }
        })
      }
      })

      $('.edit').click(function(){
         var dataId = $(this).data('id');
         $('#ModalID').val(dataId);

         $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "xhr/fetch-department-dignities", 
            data: {
               dataId:dataId         
            },
            success: function(response){  
            $('#editName').val(response.name);    
            $('#editDesignation').val(response.designation);
            },
            error: function(error){
                  console.log("Error:");
                  console.log(error);
            }
         });
      })

      $('#update').click(function(e){
      e.preventDefault();
      var id=$('#ModalID').val();
      var name=$('#editName').val();
      var designation=$('#editDesignation').val();

      if(!name || !designation){
         $('#updateErrorMessage').html("please fill the above block to continue !");
      }else{
         $('#updateErrorMessage').html("");
         
         var formData=new FormData();
         formData.append('name',name);
         formData.append('designation',designation);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-department-dignities",
         mimeType: 'multipart/form-data',
         data: formData,
         success: function(response){
            if(response.successMessage){
                  $("#backDropModal2").css("display", "none");
                  // showSuccessMessage ();
                  swal("Success!",response.successMessage+" Reloading", "success");
                  
                  setTimeout(function () {
                  window.location.reload();
                  }, 2000);   
                  
            } else if (response.errorMessage) {
                  swal("Error!", response.errorMessage, "error");
            }
            
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
         }

         })
      }

      })

      $('#delete').click(function(e){
      e.preventDefault();
      var id=$('#ModalID').val();
      if(confirm("do you want to delete this data ?")){
      $.ajax({
         type:"post",
         dataType:"json",
         url:"xhr/delete-department-dignities",
         data:{dataId:id},
         success: function(response){
            if(response.successMessage){
                  $("#backDropModal2").css("display", "none");
                  // showSuccessMessage ();
                  swal("Success!",response.successMessage+" Reloading", "success");
                  
                  setTimeout(function () {
                  window.location.reload();
                  }, 2000);   
                  
            } else if (response.errorMessage) {
                  swal("Error!", response.errorMessage, "error");
            }
            
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
         }
      })
      }
      })
  </script>

</body>
</html>
<!-- beautify ignore:end -->
