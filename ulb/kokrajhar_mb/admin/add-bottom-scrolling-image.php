<?php include("include/head.php");?>

<!-- gallery css -->

<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
  }
  .container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px;
  }
  #gallery{
    max-width: 100%;
    padding: 48px 0;
  }
  #gallery h3{
    font-size: 36px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 16px;
    opacity: 0.6;
  }
  #gallery .images{
    display: grid;
    grid-template-columns: repeat(8,1fr);
    gap: 6px;
  }
  #gallery .images .img{
    border: 3px solid #e6e5e5;
    position: relative;
    overflow: hidden;
  }
  #gallery .images .img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(0);
    transition: .3s ease;
  }
  #gallery .images .img:hover img{
    filter: blur(2px);
    cursor: zoom-in;
  }
  #gallery .images .img p{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #fff;
    padding: 2px 0;
    text-align: center;
    transform: translateY(150%);
    transition: .3s ease;
    cursor:pointer;
  }
  #gallery .images .img:hover p{
    transform: translateY(60%);
  }
</style>

<!-- gallery modal css -->
<style>
  .galleryModal{
   position: fixed;
   inset: 0;
   background: rgba(10, 10, 10, 0.6);
   align-items: center;
   display: none;
   z-index: 1000;
  }
  .galleryModal.show{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .galleryModal .containerBox{
    display: flex;
    align-items: center;
  }
  .galleryModal .img-modal{
    width: 676px;;
    height: 460px;
    margin: 0 24px;
  }
  .galleryModal .img-modal img{
    width: 100%;
    height: 100%;
    object-fit: contain;
  }
  .galleryModal span{
    cursor: pointer;
    font-size: 24px;
    color: #fff;
  }
  .galleryModal .closeBtn{
    position: absolute;
    top:80px;
    right:80px;
    font-size: 36px;
    color: #fff;
  }

  @media screen and (max-width: 768px) {
    #gallery .images{
      display: grid;
      grid-template-columns: repeat(6,1fr);
      gap: 6px;
    }
    .galleryModal .img-modal{
    width: 476px;
    height: 360px;
    margin: 0 24px;
    }
  }

  @media screen and (max-width: 576px) {
    #gallery .images{
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap:4px;
    }
    .galleryModal .containerBox{
      position: relative;
    }
    .galleryModal span{
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }
    .galleryModal span.left{
      left: 24px;  
      background:rgb(163, 154, 154);
      padding: 5px 6px;
      border-radius: 45%;
    }
    .galleryModal span.right{
      right: 24px;    
      background:rgb(163, 154, 154);
      padding: 5px 6px;
      border-radius: 45%;  
    }
    .galleryModal .closeBtn{
      top:150px;
      right:50px;
    }
    .galleryModal .img-modal{
      width: 356px;;
      height: 260px;
      margin: 0 24px;
    }

  }

  @media screen and (max-width: 350px) {
    .galleryModal .img-modal{
      width: 256px;;
      height: 220px;
      margin: 0 24px;
    }
    .galleryModal .closeBtn{
      top:250px;
      right:50px;
    }
  }
</style>

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
                     <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Image
                     </button>
                     <button type="button"  style="margin: 6px;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#backDropModalMultiple">
                        Add Multiple 
                     </button>
                     <!-- Add Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Add Image</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">   

                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
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

                     <!-- Add Multiple Modal -->   
                     <div class="modal fade" id="backDropModalMultiple" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitleMultiple">Add Multiple Image</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">   

                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" name="images[]" id="images" placeholder=""  multiple/>
                                            <label for="images">Select Multiple Images</label>
                                            <p class="multiImageErrorMessage"></p>
                                        </div>

                                       <div class="form-group mb-1 col-sm-12 col-md-12">
                                          <figure class="image-container">
                                             <img id="multi-chosen-image" class="image-style" width="100px" height="100px">
                                          </figure>
                                       </div> 

                                    </div>
                                  
                                </div>                                                         
                              
                              </div>
                              <div class="modal-footer">
                                 <p class="multiFormErrorMessage" style="color:red"></p>
                                 <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">CLOSE</button>
                                 <button type="button" id="multiSubmit" class="btn btn-primary">ADD</button>
                              </div>
                           </form>
                        </div>
                     </div>

                  </div>
                  <!-- Users List Table -->
                  <div class="card" style="margin-top: 20px">

                     <div class="card-datatable table-responsive">
                        <section id="gallery">
                           <div class="container">
                              <h3>Scroll Images</h3>
                              <div class="images" id="itemList">

                                 <?php
                                    $galleryImgs=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");
                                    if($galleryImgs){
                                       foreach($galleryImgs as $img){
                                 ?>

                                    <div class="img">
                                       <span style="display: flex;justify-content: end; padding: 0px 6px;" data-id="<?= $img['id']; ?>" class="edit" data-bs-toggle="modal" data-id="" data-bs-target="#backDropModal2" target="_blank"><i class="fa-solid fa-ellipsis"></i></span>
                                       <img src="<?= $img['image']; ?>" alt="photo">
                                    
                                    </div>                              
                                 <?php
                                       }
                                    }else{
                                       for($i=0;$i<5;$i++){
                                ?>
                                    <div class="img" style="height:200px;width:100%;">
                                       <img src="" alt="photo">
                                       <p><i class="fa-solid fa-camera-rotate"></i> image</p>
                                    </div> 
                                <?php
                                       }
                                    }                  
                                 ?>
                                 
                              </div>
                           </div>

                           <div class="galleryModal">
                              <span class="closeBtn"><i class="fas fa-times"></i></span>
                              <div class="containerBox">
                              <span class="left"><i class="fas fa-angle-left"></i></span>
                              <div class="img-modal">                               
                                 <img src="" alt="photo">
                              </div>
                              <span class="right"><i class="fas fa-angle-right"></i></span>
                              </div>
                           
                           </div>

                        </section>
                     </div>
                     
                  </div>
               </div>
               <!-- / Content -->

                <div class="modal fade" id="backDropModal2" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Edit image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="form-floating d-none">
                                <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                            </div>
                                
                            <div class="modal-body">                               
                                
                                 <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="editImage" placeholder=""  />
                                            <label for="editImage">Select Image</label>
                                            <p class="editImageErrorMessage"></p>
                                        </div>

                                       <div class="form-group mb-1 col-sm-12 col-md-2">
                                          <figure class="image-container">
                                             <img id="edit-chosen-image" class="image-style" width="100px" height="100px">
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
                console.log(reader);
                reader.readAsDataURL(uploadInput.files[0]);
                reader.onload = () => {
                    chosenImage.setAttribute("src", reader.result);
                }
            }
        }

        handleImageUpload("image", "chosen-image");
        handleImageUpload("editImage", "edit-chosen-image");

        handleImageUpload("images", "multi-chosen-image");

    </script>

  <script>
    $('#submit').on('click',function(){ 
      var image=$('#image')[0].files[0];


        if(!image){
            $('.imageErrorMessage').html("Please Select any image here ");
            $('.imageErrorMessage').css("color","red");
            $('#image').focus();
        }else{
            $('.imageErrorMessage').html("");                   
       
       
        var formData=new FormData();
        formData.append("image",image);

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-bottom-scrolling-image",        
          data: formData,
          success: function(response){
            if(response.successMessage){
                  $("#backDropModal").css("display", "none");
                  // showSuccessMessage ();
                  swal("Success!",response.successMessage+ "success");
                  
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

      // multi image select 
      $('#multiSubmit').on('click',function(){ 
      var images=$('#images')[0].files;


        if(images.length ===0){
            $('.multiImageErrorMessage').html("Please Select any image here");
            $('.multiImageErrorMessage').css("color","red");
            $('#images').focus();
        }else{

            $('.multiImageErrorMessage').html("");
            $('.multiFormErrorMessage').html("");
            $('.multiImageErrorMessage').html("");
        
            var formData=new FormData();
            for(let i=0;i<images.length;i++){
            formData.append('images[]',images[i]);
            }

            $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            mimeType: 'multipart/form-data',
            dataType: "json",
            url: "xhr/add-bottom-scroll-multi-image",        
            data: formData,
            success: function(response){
                if(response.successMessage){
                    $("#backDropModalMultiple").css("display", "none");
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
      // multi image select 


      $('.edit').click(function(){
         var dataId = $(this).data('id');
         $('#ModalID').val(dataId);

         $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "xhr/fetch-bottom-scrolling-image", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#edit-chosen-image').attr("src",response.image);              
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


         if(!chosenImage){
            $('#editImageErrorMessage').html("please select any image here ");
            $('#editImageErrorMessage').css("color","red");
            $('#editImage').focus();
         }else{
            $('#editImageErrorMessage').html("");

            
            $('#updateErrorMessage').html("");
            $('#editImageErrorMessage').html("");
            
            var formData=new FormData();
            formData.append('image',image);
           
            formData.append('id',id);

            $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            url: "xhr/edit-bottom-scrolling-image",
            mimeType: 'multipart/form-data',
            data: formData,
            success: function(response){
                if(response.successMessage){
                    $("#backDropModal2").css("display", "none");
                    // showSuccessMessage ();
                    swal("Success!",response.successMessage+ "success");
                    
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
         url:"xhr/delete-bottom-scrolling-image",
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



   <!-- Gallery Scripts -->
   <script>
      const left=document.querySelector('.galleryModal span.left');
      const right=document.querySelector('.galleryModal span.right');
      const modalImg=document.querySelector('.galleryModal .img-modal img');
      const modal=document.querySelector('.galleryModal');
      const close=document.querySelector('.closeBtn');

      const allImg=document.querySelectorAll('#gallery .images .img img');

      let iterator=0;
      for(let i=0;i<allImg.length;i++){
         allImg[i].addEventListener('click',function(){
         const urlImg=this.getAttribute('src');
         // alert(urlImg);
         modal.classList.add('show');
         modalImg.setAttribute('src',urlImg);
         iterator=i;
      });
      
      }

      left.addEventListener('click',function(){
         iterator===0?iterator=allImg.length-1:iterator-=1;
         const urlImg=allImg[iterator].getAttribute('src');
         modalImg.setAttribute('src',urlImg);
      });
      right.addEventListener('click',function(){
      iterator===allImg.length-1?iterator=0:iterator+=1;
      const urlImg=allImg[iterator].getAttribute('src');
      modalImg.setAttribute('src',urlImg);
      });

      close.addEventListener('click',function(){
      modal.classList.remove('show');
      });

   </script>

</body>
</html>
<!-- beautify ignore:end -->
