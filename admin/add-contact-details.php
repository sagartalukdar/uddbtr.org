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
        initializeCKEditor("#address", "globalEditor");
        initializeCKEditor("#editAddress", "globalEditor2");
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
                     Add Contact Details
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"> Add Contact Details</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                              
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="email" class="form-control" id="email" placeholder=""  />
                                          <label for="email">Email</label>
                                          <p class="emailErrorMessage" style="color:red"></p>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="phone" placeholder="" />   
                                          <label for="phone">Phone</label>    
                                          <p class="phoneErrorMessage" style="color:red"></p>                       
                                       </div> 
                                    </div>
                                 </div>        
                                 
                                 <label for="address">Address</label>  
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="address" placeholder="" />                            
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
                        <h5 class="card-title">View Contact Details</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Address</th>                                                          
                                 <th>Action</th>                              
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $contactDetails = $crud->Read('contact_details',"1 order by `id` desc"); 
                                 if ($contactDetails) {
                                   $n=0;
                                   foreach($contactDetails as $contact){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><?php echo $contact['email'];?></td>
                                 <td><?php echo $contact['phone'];?></td>
                                 <td style="text-align:justify;"><?php echo $contact['address']; ?></td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $contact['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                               <tr>
                                 <th>Sl no.</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Address</th>                                                          
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Contact Details</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="form-floating d-none">
                                 <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                              </div>
                                 
                              <div class="modal-body">
                              
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="email" class="form-control" id="editEmail" placeholder=""  />
                                          <label for="editEmail">Email</label>
                                          <p class="editEmailErrorMessage" style="color:red"></p>
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="editPhone" placeholder="" />   
                                          <label for="editPhone">Phone</label>    
                                          <p class="editPhoneErrorMessage" style="color:red"></p>                       
                                       </div>  
                                    </div>
                                 </div>    
                                 
                                 <label for="editAddress">Address</label>  
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="editAddress" placeholder="" />                            
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
    $('#submit').on('click',function(e){ 
        e.preventDefault();
      var email=$('#email').val();
      var phone=$('#phone').val();
      if(globalEditor){
        var address=globalEditor.getData();
      }

      var formIsValid = true;
 
      if(!email || !phone || !address){
        formIsValid = false;
        $('.formErrorMessage').html("please fill all details to continue !");
      }else{    
        $('.formErrorMessage').html("");

        function validateEmail($email) {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          return emailReg.test($email);
        }
        function validateMobile($mobile) {
          var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
          return mobileReg.test($mobile);
        }
       
        if(!validateEmail(email)){
            formIsValid = false;
            $('.emailErrorMessage').html("please enter a valid email");
        }else{
            $('.emailErrorMessage').html(""); 
        }

        if(!validateMobile(phone)){
            formIsValid = false;
            $('.phoneErrorMessage').html("please enter a valid phone number");
        }else{
            $('.phoneErrorMessage').html(""); 
        }

        if (!formIsValid) {
            return; // Stop execution if the form is not valid
        }

        var formData=new FormData();
        formData.append("email",email);
        formData.append("phone",phone);
        formData.append("address",address);      

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-contact-details",        
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
            url: "xhr/fetch-contact-details", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            $('#editEmail').val(response.email);
            $('#editPhone').val(response.phone);
            if(globalEditor2){
               globalEditor2.setData(response.address);
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
      var email=$('#editEmail').val();
      var phone=$('#editPhone').val();
      if(globalEditor2){
         var address=globalEditor2.getData();
      }

      if(!email || !phone || !address){
         $('#updateErrorMessage').html("please fill all details to continue !");
      }else{
         var formIsValid=true;

         $('#updateErrorMessage').html("");

        function validateEmail($email) {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          return emailReg.test($email);
        }
        function validateMobile($mobile) {
          var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
          return mobileReg.test($mobile);
        }
       
        if(!validateEmail(email)){
            formIsValid = false;
            $('.editEmailErrorMessage').html("please enter a valid email");
        }else{
            $('.editEmailErrorMessage').html(""); 
        }

        if(!validateMobile(phone)){
            formIsValid = false;
            $('.editPhoneErrorMessage').html("please enter a valid phone number");
        }else{
            $('.editPhoneErrorMessage').html(""); 
        }

        if (!formIsValid) {
            return; // Stop execution if the form is not valid
        }
         
         var formData=new FormData();
         formData.append('email',email);
         formData.append('phone',phone);
         formData.append('address',address);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-contact-details",
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
         url:"xhr/delete-contact-details",
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
