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
                     Add Home Slider
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Add Home Slider</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="head" id="head" placeholder=""  />
                                          <label for="head">Head</label>
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="title" placeholder="" />
                                          <label for="title">Title</label>
                                       </div>
                                    </div>
                                 </div>            
                                
                                 <div class="form-floating">
                                    <input type="file" class="form-control" accept="image/*" name="image" id="image" placeholder=""  />
                                    <label for="image">Select Image</label>
                                    <p class="imageErrorMessage"></p>
                                 </div>

                                 <div class="form-group mb-1 col-sm-12 col-md-2">
                                      <figure class="image-container">
                                        <img id="chosen-image" class="image-style" width="100px" height="100px">
                                      </figure>
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
                        <h5 class="card-title">View Home Slider</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Head</th>
                                 <th>Title</th>
                                 <th>Uploaded date</th>                               
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $homeSliders = $crud->Read('home_slider',"1 order by `id` desc"); 
                                 if ($homeSliders) {
                                   $n=0;
                                   foreach($homeSliders as $slider){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><img src="<?php echo $slider['image'];?>" style="max-width: 120px"></td>
                                 <td><?php echo $slider['head'];?></td>
                                 <td style="text-align:justify;"><?php echo $slider['title']; ?></td>
                                 <td><?php echo $slider['date_uploaded']; ?></td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $slider['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Head</th>
                                 <th>Title</th>
                                 <th>Uploaded date</th>                               
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Home Slider</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                                 

                                 <div class="form-floating d-none">
                                    <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                                 </div>
                     
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="head2" id="head2" placeholder=""  />
                                          <label for="head2">Head</label>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="title2" id="title2" placeholder=""  /> 
                                          <label for="title2">Title</label>                   
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="file" class="form-control" accept="image/*" name="image2" id="image2" placeholder=""  />
                                          <label for="image2">Select Image</label>
                                          <p class="imageErrorMessage2"></p>
                                       </div>

                                       <div class="form-group mb-1 col-sm-12 col-md-2">
                                          <figure class="image-container">
                                             <img id="chosen-image2" class="image-style" width="100px" height="100px">
                                          </figure>
                                       </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="date" class="form-control" name="date_uploaded" id="date_uploaded"  placeholder=""  />
                                          <label for="date_uploaded">Uploaded Date</label>
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
      
        let uploadImage = document.getElementById("image");
        let chosenImage = document.getElementById("chosen-image");

        uploadImage.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadImage.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src",reader.result);
            }
            fileName.textContent = uploadImage.files[0].name;
        }

        let uploadImage2 = document.getElementById("image2");
        let chosenImage2 = document.getElementById("chosen-image2");

        uploadImage2.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadImage2.files[0]);
            reader.onload = () => {
                chosenImage2.setAttribute("src",reader.result);
            }
            fileName.textContent = uploadImage2.files[0].name;
        }

   </script>


  <script>
    $('#submit').on('click',function(){ 
      var head=$('#head').val();
      var title=$('#title').val();
      var image=$('#image')[0].files[0];
 
      if(!image || !head || !title){
        $('.formErrorMessage').html("please fill all details to continue !");
        if(!image){
            $('.imageErrorMessage').html("Please Select any image here ");
            $('.imageErrorMessage').css("color","red");
            $('#image').focus();
        }else{
            $('.imageErrorMessage').html(""); 
        }
      }else{      
        $('.formErrorMessage').html("");
        $('.imageErrorMessage').html("");
       
        var formData=new FormData();
        formData.append("head",head);
        formData.append("title",title);
        formData.append("image",image);      

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-home-slider",        
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
            url: "xhr/fetch-home-slider", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#head2').val(response.head);
            $('#title2').val(response.title);
            $('#date_uploaded').val(response.date_uploaded);   
            $('#chosen-image2').attr("src",response.image);              
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
      var image2=$('#image2')[0].files[0];
      var chosenImage2 = $('#chosen-image2').attr('src');
      var head2=$('#head2').val();
      var title2=$('#title2').val();
      var date=$('#date_uploaded').val();
 

      if(!title2 || !date || !head2 || !chosenImage2){
         $('#updateErrorMessage').html("please fill all details to continue !");
         if(!chosenImage2){
            $('#imageErrorMessage2').html("please select any image here ");
            $('#image2').focus();
         }else{
            $('#imageErrorMessage2').html("");
         }
      }else{
         $('#updateErrorMessage').html("");
         $('#imageErrorMessage2').html("");
         
         var formData=new FormData();
         formData.append('image',image2);
         formData.append('title',title2);
         formData.append('date',date);
         formData.append('head',head2);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-home-slider",
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
         url:"xhr/delete-home-slider",
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
