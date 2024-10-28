<?php include("include/head.php");?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script>
        function initializeCKEditor(selector, globalVar) {
        CKEDITOR.ClassicEditor
            .create(document.querySelector(selector), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Type  here.....',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                removePlugins: [
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType',
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            })
            .then(editor => {
                window[globalVar] = editor; // Store the CKEditor instance in the specified global variable
            })
            .catch(error => {
                console.error(error);
            });
    }

    // Initialize CKEditor instances dynamically
    document.addEventListener('DOMContentLoaded', () => {
        initializeCKEditor("#description", "globalEditor");
        initializeCKEditor("#editDescription", "globalEditor2");
    });
</script>

<style>
   .ck-restricted-editing_mode_standard{
      height:150px;
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
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                     Add Honourable Dignities
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"> Add Honourable Dignities</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"> 
                                 
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="name" id="name" placeholder=""  />
                                          <label for="name">Full Name</label>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="designation" id="designation" placeholder=""  />
                                          <label for="designation">Designation</label>
                                       </div>
                                    </div>
                                 </div>
                                                 
                                 <label for="description">Description</label>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="description" placeholder="" />                              
                                 </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="facebook" placeholder=""  />
                                          <label for="facebook">Facebook link</label>
                                          <p class="facebookUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="youtube" placeholder=""  />
                                          <label for="youtube">Youtube link</label>
                                          <p class="youtubeUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="instagram" placeholder=""  />
                                          <label for="instagram">Instagram link</label>
                                          <p class="instagramUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="twitter" placeholder=""  />
                                          <label for="twitter">Twitter link</label>
                                          <p class="twitterUrlErrorMessage" style="color:red;"></p>
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
                        <h5 class="card-title">View Honourable Dignities</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Name</th>
                                 <th>Designation</th>   
                                 <th>Description</th>     
                                 <th>Social links</th>                                     
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $honourableDignities = $crud->Read('honourable_dignities',"1 order by `id` desc"); 
                                 if ($honourableDignities) {
                                   $n=0;
                                   foreach($honourableDignities as $hon){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><img src="<?php echo $hon['image'];?>" style="max-width: 120px"></td>
                                 <td><?php echo $hon['name'];?></td>
                                 <td><?php echo $hon['designation']; ?></td>
                                 <td style="text-align:justify;"><?php echo $hon['description']; ?></td>

                                 <td style="display: flex;flex-direction: column;align-items: center; justify-content:center;border:none;">
                                   <?php
                                      if($hon['facebook']){
                                    ?>
                                    <a href="<?= $hon['facebook']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <?php
                                      }
                                   ?>

                                   <?php
                                      if($hon['youtube']){
                                    ?>
                                   <a href="<?= $hon['youtube']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-youtube"></i></a>
                                   <?php
                                      }
                                   ?>

                                   <?php
                                      if($hon['instagram']){
                                    ?>
                                   <a href="<?= $hon['instagram']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-instagram"></i></a>
                                   <?php
                                      }
                                   ?>

                                   <?php
                                      if($hon['twitter']){
                                    ?>
                                  <a href="<?= $hon['twitter']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-twitter"></i></a>
                                  <?php
                                      }
                                   ?>

                                 </td>
                              
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $hon['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Image</th>
                                 <th>Name</th>
                                 <th>Designation</th>        
                                 <th>Description</th>  
                                 <th>Social link</th>                                                              
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Honourable Dignities</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="form-floating d-none">
                                 <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                              </div>
                                 
                              <div class="modal-body">   
                                 
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="editName" id="editName" placeholder=""  />
                                          <label for="editName">Full Name</label>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="editDesignation" id="editDesignation" placeholder=""  />
                                          <label for="editDesignation">Designation</label>
                                       </div>
                                    </div>
                                 </div>
                                              
                                 <label for="editDescription">Description</label>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="editDescription" placeholder="" />                              
                                 </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="edit_facebook" placeholder=""  />
                                          <label for="edit_facebook">Facebook link</label>
                                          <p class="edit_facebookUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="edit_youtube" placeholder=""  />
                                          <label for="edit_youtube">Youtube link</label>
                                          <p class="edit_youtubeUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="edit_instagram" placeholder=""  />
                                          <label for="edit_instagram">Instagram link</label>
                                          <p class="edit_instagramUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="edit_twitter" placeholder=""  />
                                          <label for="edit_twitter">Twitter link</label>
                                          <p class="edit_twitterUrlErrorMessage" style="color:red;"></p>
                                       </div>
                                    </div>
                                 </div>
                                
                                 <div class="form-floating">
                                    <input type="file" class="form-control" accept="image/*" name="editImage" id="editImage" placeholder=""  />
                                    <label for="editImage">Select Image</label>
                                    <p class="editImageErrorMessage"></p>
                                 </div>

                                 <div class="form-group mb-1 col-sm-12 col-md-2">
                                      <figure class="image-container">
                                        <img id="edit-chosen-image" class="image-style" width="100px" height="100px">
                                      </figure>
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
    </script>


  <script>

      function validateUrl(url) {
      var urlReg = /^(https?:\/\/)?((([a-zA-Z\d]([a-zA-Z\d-]{0,61}[a-zA-Z\d])?)\.)+[a-zA-Z]{2,63}|localhost|(\d{1,3}\.){3}\d{1,3}|(\[[A-Fa-f0-9:]+\]))(:\d+)?(\/[-a-zA-Z\d%_.~+@]*)*(\?[;&a-zA-Z\d%_.~+=-]*)?(#[-a-zA-Z\d_]*)?$/;
      return urlReg.test(url);
      }


      var facebook=$('#facebook');
      var youtube=$('#youtube');
      var instagram=$('#instagram');
      var twitter=$('#twitter');

      facebook.on('change',function(){
        if(!validateUrl(facebook.val())){
            $('.facebookUrlErrorMessage').html("please enter a valid url");          
            $('#facebook').focus();          
        }else{
            $('.facebookUrlErrorMessage').html(""); 
        }
      })

      youtube.on('change',function(){
        if(!validateUrl(youtube.val())){
            $('.youtubeUrlErrorMessage').html("please enter a valid url");          
            $('#youtube').focus();           
        }else{
            $('.youtubeUrlErrorMessage').html(""); 
        }
      })

      instagram.on('change',function(){
        if(!validateUrl(instagram.val())){
            $('.instagramUrlErrorMessage').html("please enter a valid url");          
            $('#instagram').focus();          
        }else{
            $('.instagramUrlErrorMessage').html(""); 
        }
      })

      twitter.on('change',function(){
        if(!validateUrl(twitter.val())){
            $('.twitterUrlErrorMessage').html("please enter a valid url");          
            $('#twitter').focus();           
        }else{
            $('.twitterUrlErrorMessage').html(""); 
        }
      })


      var edit_facebook=$('#edit_facebook');
      var edit_youtube=$('#edit_youtube');
      var edit_instagram=$('#edit_instagram');
      var edit_twitter=$('#edit_twitter');

      edit_facebook.on('change',function(){
        if(!validateUrl(edit_facebook.val())){
            $('.edit_facebookUrlErrorMessage').html("please enter a valid url");          
            $('#edit_facebook').focus();          
        }else{
            $('.edit_facebookUrlErrorMessage').html(""); 
        }
      })

      edit_youtube.on('change',function(){
        if(!validateUrl(edit_youtube.val())){
            $('.edit_youtubeUrlErrorMessage').html("please enter a valid url");          
            $('#edit_youtube').focus();           
        }else{
            $('.edit_youtubeUrlErrorMessage').html(""); 
        }
      })

      edit_instagram.on('change',function(){
        if(!validateUrl(edit_instagram.val())){
            $('.edit_instagramUrlErrorMessage').html("please enter a valid url");          
            $('#edit_instagram').focus();          
        }else{
            $('.edit_instagramUrlErrorMessage').html(""); 
        }
      })

      edit_twitter.on('change',function(){
        if(!validateUrl(edit_twitter.val())){
            $('.edit_twitterUrlErrorMessage').html("please enter a valid url");          
            $('#edit_twitter').focus();           
        }else{
            $('.edit_twitterUrlErrorMessage').html(""); 
        }
      })
    
   $('#submit').on('click',function(e){ 
      var name=$('#name').val();
      var designation=$('#designation').val();
      if(globalEditor){
        var description=globalEditor.getData();
      }
      var image=$('#image')[0].files[0];

      var facebook=$('#facebook').val();
      var youtube=$('#youtube').val();
      var instagram=$('#instagram').val();
      var twitter=$('#twitter').val();
 
      if(!image || !name || !designation || !description){
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
    
        if(facebook && !validateUrl(facebook) || youtube && !validateUrl(youtube) || instagram && !validateUrl(instagram) || twitter && !validateUrl(twitter)){       
            exit;
        }
         
        var formData=new FormData();
        formData.append("name",name);
        formData.append("designation",designation);
        formData.append("description",description);
        formData.append("image",image);      

        formData.append("facebook",facebook);
        formData.append("youtube",youtube);
        formData.append("instagram",instagram);
        formData.append("twitter",twitter);      

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-honourable-dignities",        
          data: formData,
          success: function(response){
            if(response.successMessage){
                  $("#backDropModal").css("display", "none");                 
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
            url: "xhr/fetch-honourable-dignities", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#editName').val(response.name);
            if(globalEditor2){
               globalEditor2.setData(response.description);
            }
            $('#editDesignation').val(response.designation);
            $('#edit-chosen-image').attr("src",response.image);     
            
            $('#edit_facebook').val(response.facebook);
            $('#edit_youtube').val(response.youtube);
            $('#edit_instagram').val(response.instagram);
            $('#edit_twitter').val(response.twitter);

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
      var name=$('#editName').val();
      var designation=$('#editDesignation').val();
      if(globalEditor2){
         var description=globalEditor2.getData();
      }

      if(!name || !designation || !description || !chosenImage){
         $('#updateErrorMessage').html("please fill all details to continue !");
         if(!chosenImage){
            $('#editImageErrorMessage').html("please select any image here ");
            $('#editImage').focus();
         }else{
            $('#editImageErrorMessage').html("");
         }
      }else{
         $('#updateErrorMessage').html("");
         $('#editImageErrorMessage').html("");

         if(edit_facebook.val() && !validateUrl(edit_facebook.val()) || edit_youtube.val() && !validateUrl(edit_youtube.val()) || edit_instagram.val() && !validateUrl(edit_instagram.val()) || edit_twitter.val() && !validateUrl(edit_twitter.val())){       
            exit;
         }
         
         var formData=new FormData();
         formData.append('image',image);
         formData.append('name',name);
         formData.append('designation',designation);
         formData.append('description',description);
         formData.append('id',id);

         formData.append("edit_facebook",edit_facebook.val());
         formData.append("edit_youtube",edit_youtube.val());
         formData.append("edit_instagram",edit_instagram.val());
         formData.append("edit_twitter",edit_twitter.val());      


         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-honourable-dignities",
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
         url:"xhr/delete-honourable-dignities",
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
