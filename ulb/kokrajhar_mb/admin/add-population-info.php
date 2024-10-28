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
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Population Information
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Add Population Information</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                                <div class="modal-body">   
                                    
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" accept="image/*" id="image" placeholder=""  />
                                                <label for="image">select image</label>
                                                <p class="imageErrorMessage"></p>
                                            </div>

                                            <div class="form-group mb-1 col-sm-12 col-md-2">
                                                <figure class="image-container">
                                                    <img id="chosen-image" class="image-style" width="100px" height="100px">
                                                </figure>
                                            </div> 
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" accept="application/*" id="pdf" placeholder=""  />
                                                <label for="pdf">Select PDF</label>
                                                <p class="pdfErrorMessage"></p>
                                            </div>

                                            <div class="form-group mb-1 col-sm-12 col-md-2">
                                                <figure class="image-container">
                                                    <img id="chosen-pdf" class="image-style" width="100px" height="100px">
                                                </figure>
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
                        <h5 class="card-title">View Population Information</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Pdf</th>                                                         
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $population_info = $crud->Read('population_info',"1 order by `id` desc"); 
                                 if ($population_info) {
                                   $n=0;
                                   foreach($population_info as $info){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><img src="<?php echo $info['image'];?>" style="max-width: 120px"></td>
                                 <td><a href="<?php echo $info['pdf'];?>" target="_blank"><img src="img/organizationInfo/pdfcover.png" style="width:40px;height:40px;"></a></td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $info['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Pdf</th>                                                       
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Population Information</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="form-floating d-none">
                                 <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                              </div>
                                 
                                <div class="modal-body">   
                                    
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" accept="image/*" id="editImage" placeholder=""  />
                                                <label for="editImage">select image</label>
                                                <p id="editImageErrorMessage"></p>
                                            </div>

                                            <div class="form-group mb-1 col-sm-12 col-md-2">
                                                <figure class="image-container">
                                                    <img id="edit-chosen-image" class="image-style" width="100px" height="100px">
                                                </figure>
                                            </div> 
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" accept="application/*" id="editPdf" placeholder=""  />
                                                <label for="editPdf">Select PDF</label>
                                                <p id="editPdfErrorMessage"></p>
                                            </div>

                                            <div class="form-group mb-1 col-sm-12 col-md-2">
                                                <figure class="image-container">
                                                    <img id="edit-chosen-pdf" class="image-style" width="100px" height="100px">
                                                </figure>
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
   
   <script type="text/javascript">
        function handleImageUpload(inputId, imageId) {
            let uploadInput = document.getElementById(inputId);
            let chosenImage = document.getElementById(imageId);

            uploadInput.onchange = () => {
                let reader = new FileReader();
                reader.readAsDataURL(uploadInput.files[0]);
                reader.onload = () => {
                    chosenImage.setAttribute("src", reader.result);
                }
            }
        }

        handleImageUpload("image", "chosen-image");
        handleImageUpload("editImage", "edit-chosen-image");

        function handlePdfUpload(inputId, imageId) {
            let uploadInput = document.getElementById(inputId);
            let chosenImage = document.getElementById(imageId);

            uploadInput.onchange = () => {
                let file = uploadInput.files[0];
                let fileName = file.name;
                if (fileName.endsWith('.pdf')) {
                    chosenImage.setAttribute("src", "img/organizationInfo/pdfcover.png");
                } else {
                    chosenImage.setAttribute("src", "");
                    alert("Please upload a PDF file.");
                }
            }
        }

        handlePdfUpload("pdf", "chosen-pdf");
        handlePdfUpload("editPdf", "edit-chosen-pdf");

    </script>


  <script>
    $('#submit').on('click',function(){ 
      var image=$('#image')[0].files[0];
      var pdf=$('#pdf')[0].files[0];
      var chosenImage = $('#chosen-image').attr('src');
      var chosenPdf = $('#chosen-pdf').attr('src');

      if(!image || !pdf || !chosenImage || !chosenPdf){
        $('.formErrorMessage').html("please fill all details to continue !");
        if(!image){
            $('.imageErrorMessage').html("Please Select any image here ");
            $('.imageErrorMessage').css("color","red");
            $('#image').focus();
        }else{
            $('.imageErrorMessage').html(""); 
        }

        if(pdf && !chosenPdf){
            $('.pdfErrorMessage').html("this is not a pdf file, please change");
            $('.pdfErrorMessage').css("color","red");
            $('#pdf').focus();
        }else{
            if(!pdf){
            $('.pdfErrorMessage').html("Please Select any pdf here ");
            $('.pdfErrorMessage').css("color","red");
            $('#pdf').focus();
            }else{
                $('.pdfErrorMessage').html(""); 
            }
        }

      }else{      
        $('.formErrorMessage').html("");
        $('.imageErrorMessage').html("");
        $('.pdfErrorMessage').html(""); 
       
        var formData=new FormData();
        formData.append("pdf",pdf);
        formData.append("image",image);      

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-population-info",        
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
            url: "xhr/fetch-population-info", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#edit-chosen-image').attr("src",response.image);     
            if(response.pdf){
                $('#edit-chosen-pdf').attr("src","img/organizationInfo/pdfcover.png"); 
            }             
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
      var image=$('#editImage')[0].files[0];
      var chosenImage = $('#edit-chosen-image').attr('src');

      var pdf=$('#editPdf')[0].files[0];
      var chosenPdf = $('#edit-chosen-pdf').attr('src');

      if(!chosenImage || !chosenPdf ){
         $('#updateErrorMessage').html("please fill all details to continue !");
         if(!chosenImage){
            $('#editImageErrorMessage').html("please select any image here ");
            $('#editImage').focus();
         }else{
            $('#editImageErrorMessage').html("");
         }

         if(!chosenPdf){
            $('#editPdfErrorMessage').html("this is not a pdf file, please change");
            $('#editPdfErrorMessage').css("color","red");
            $('#editPdf').focus();
         }else{
            $('#editPdfErrorMessage').html("");
         }

      }else{
         $('#updateErrorMessage').html("");
         $('#editImageErrorMessage').html("");
         $('#editPdfErrorMessage').html("");

         var formData=new FormData();
         formData.append('image',image);
         formData.append('pdf',pdf);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-population-info",
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
         url:"xhr/delete-population-info",
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
