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
                placeholder: 'Type a message here.....',
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
        initializeCKEditor("#message", "globalEditor");
        initializeCKEditor("#editMessage", "globalEditor2");
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
                     Add Executive's Message
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Add Executive's Message</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""  />
                                    <label for="name">Full Name</label>
                                 </div>

                                 <label for="message">Message</label>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="message" placeholder="" />
                                 </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" name="image" id="image" placeholder=""  />
                                            <label for="image">Executive's Image</label>
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
                                            <input type="file" class="form-control" accept="image/*" name="banner" id="banner" placeholder=""  />
                                            <label for="banner">Banner Image</label>
                                            <p class="bannerErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="chosen-banner" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>
                                 </div>   

                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="url" id="url" placeholder=""  />
                                    <label for="url">Video Url</label>
                                    <p class="urlErrorMessage"></p>
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
                        <h5 class="card-title">View Executive's Message</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Executive's image</th>
                                 <th>Name</th>
                                 <th>Message</th>
                                 <th>Banner</th>     
                                 <th>Video url</th>                           
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $executiveMessages = $crud->Read('executive_message',"1 order by `id` desc"); 
                                 if ($executiveMessages) {
                                   $n=0;
                                   foreach($executiveMessages as $message){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><img src="<?php echo $message['image'];?>" style="max-width: 120px"></td>
                                 <td><?php echo $message['name'];?></td>
                                 <td style="text-align:justify;"><?php echo $message['message']; ?></td>
                                 <td><img src="<?php echo $message['banner'];?>" style="max-width: 120px"></td>
                                 <td><?php echo $message['url']; ?></td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $message['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Executive's image</th>
                                 <th>Name</th>
                                 <th>Message</th>
                                 <th>Banner</th>        
                                 <th>Video url</th>                                
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Executive's Message</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 <input type="hidden" id="ModalID">
                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="editName" id="editName" placeholder=""  />
                                    <label for="editName">Full Name</label>
                                 </div>

                                 <label for="editMessage">Message</label>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="editMessage" placeholder="" />
                                 </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" name="editImage" id="editImage" placeholder=""  />
                                            <label for="editImage">Executive's Image</label>
                                            <p class="editImageErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="edit-chosen-image" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" name="editBanner" id="editBanner" placeholder=""  />
                                            <label for="editBanner">Banner Image</label>
                                            <p class="editBannerErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="edit-chosen-banner" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>
                                 </div>   

                                 <div class="form-floating">
                                    <input type="text" class="form-control" name="editUrl" id="editUrl" placeholder=""  />
                                    <label for="editUrl">Video Url</label>
                                    <p class="editUrlErrorMessage"></p>
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
        handleImageUpload("banner", "chosen-banner");
        handleImageUpload("editImage", "edit-chosen-image");
        handleImageUpload("editBanner", "edit-chosen-banner");
    </script>


  <script>
    $('#submit').on('click',function(){ 
      var name=$('#name').val();
      if(globalEditor){
        var message=globalEditor.getData();
      }
      var image=$('#image')[0].files[0];
      var banner=$('#banner')[0].files[0];
      var url=$('#url').val();

      var formIsValid = true;

      if(!image || !banner || !name || !message || !url){
        $('.formErrorMessage').html("please fill all details to continue !");

        if(!image || !banner){
            if(!image){
            $('.imageErrorMessage').html("Please Select any image here ");
            $('.imageErrorMessage').css("color","red");
            $('#image').focus();
            }
            else{
                $('.imageErrorMessage').html("");  
            }
            if(!banner){
            $('.bannerErrorMessage').html("Please Select any image here ");
            $('.bannerErrorMessage').css("color","red");
            $('#banner').focus();
            }else{
                $('.bannerErrorMessage').html(""); 
            }
        }
        else{
            $('.imageErrorMessage').html(""); 
            $('.bannerErrorMessage').html("");          
        }

      }else{      
        $('.formErrorMessage').html("");
        $('.imageErrorMessage').html("");
        $('.bannerErrorMessage').html("");

        function validateUrl($url){
            var urlReg=/^(https?:\/\/)?((([a-zA-Z\d](([a-zA-Z\d-]{0,61}[a-zA-Z\d])?)\.)+[a-zA-Z]{2,6})|(([0-9]{1,3}\.){3}[0-9]{1,3})|(\[?[A-Fa-f0-9]*:[A-Fa-f0-9:]+\]?))(:\d+)?(\/[-a-zA-Z\d%_.~+]*)*(\?[;&a-zA-Z\d%_.~+=-]*)?(#[-a-zA-Z\d_]*)?$/;
            return urlReg.test($url);
        }
        if(!validateUrl(url)){
            formIsValid = false;
            $('.urlErrorMessage').html("please enter a valid url");
            $('.urlErrorMessage').css("color","red");
            $('#url').focus();
        }else{
            $('.urlErrorMessage').html(""); 
        }

        if (!formIsValid) {
            return; // Stop execution if the form is not valid
        }
       
        var formData=new FormData();
        formData.append("name",name);
        formData.append("message",message);
        formData.append("image",image);     
        formData.append("banner",banner);     
        formData.append("url",url);     
        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-executive-message",        
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
            url: "xhr/fetch-executive-message", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#editName').val(response.name);
            $('#editUrl').val(response.url);
            if(globalEditor2){
               globalEditor2.setData(response.message);
            }   
            $('#edit-chosen-image').attr("src",response.image);     
            $('#edit-chosen-banner').attr("src",response.banner);             
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
      var editName=$('#editName').val();
      var editImage=$('#editImage')[0].files[0];
      var editChosenImage = $('#edit-chosen-image').attr('src');

      var editBanner=$('#editBanner')[0].files[0];
      var editChosenBanner = $('#edit-chosen-banner').attr('src');

      if(globalEditor2){
      var editMessage=globalEditor2.getData();
      }
      var editUrl=$('#editUrl').val();

      var formIsValid = true;

      if(!editName || !editChosenImage || !editChosenBanner || !editMessage || !editUrl){
         $('#updateErrorMessage').html("please fill all details to continue !");         
      }else{
         $('#updateErrorMessage').html("");

        function validateUrl($url){
            var urlReg=/^(https?:\/\/)?((([a-zA-Z\d](([a-zA-Z\d-]{0,61}[a-zA-Z\d])?)\.)+[a-zA-Z]{2,6})|(([0-9]{1,3}\.){3}[0-9]{1,3})|(\[?[A-Fa-f0-9]*:[A-Fa-f0-9:]+\]?))(:\d+)?(\/[-a-zA-Z\d%_.~+]*)*(\?[;&a-zA-Z\d%_.~+=-]*)?(#[-a-zA-Z\d_]*)?$/;
            return urlReg.test($url);
        }
        if(!validateUrl(editUrl)){
            formIsValid = false;
            $('.editUrlErrorMessage').html("please enter a valid url");
            $('.editUrlErrorMessage').css("color","red");
            $('#editUrl').focus();
        }else{
            $('.editUrlErrorMessage').html(""); 
        }

        if (!formIsValid) {
            return; // Stop execution if the form is not valid
        }
         
         var formData=new FormData();
         formData.append('name',editName);
         formData.append('image',editImage);
         formData.append('message',editMessage);
         formData.append('url',editUrl);
         formData.append('banner',editBanner);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-executive-message",
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
         url:"xhr/delete-executive-message",
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
