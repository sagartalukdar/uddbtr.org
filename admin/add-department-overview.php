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
                placeholder: 'Type here.....',
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
        initializeCKEditor("#history", "globalEditor1");
        initializeCKEditor("#overview", "globalEditor2");
        initializeCKEditor("#editHistory", "globalEditor3");
        initializeCKEditor("#editOverview", "globalEditor4");
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
                     Add Overview of Department
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"> Add Overview of Department</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 
                                <label for="history">History</label>
                                <div class="form-floating">
                                <input type="text" class="form-control" id="history" placeholder=""  />
                                </div>

                                <label for="overview">Overview</label>
                                <div class="form-floating">
                                <input type="text" class="form-control" id="overview" placeholder="" />
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="image1" placeholder=""  />
                                            <label for="image1">Image1</label>
                                            <p class="image1ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="chosen-image1" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="image2" placeholder=""  />
                                            <label for="image2">Image2</label>
                                            <p class="image2ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="chosen-image2" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">                               
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="image3" placeholder=""  />
                                            <label for="image3">Image3</label>
                                            <p class="image3ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="chosen-image3" class="image-style" width="100px" height="100px">
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
                        <h5 class="card-title">View Overview of Department</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                               <tr>
                                 <th>Sl no.</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>                        
                                 <th>history</th>        
                                 <th>overview</th>                                
                                 <th>Action</th>                                   
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $departmentOverviews = $crud->Read('department_overview',"1 order by `id` desc"); 
                                 if ($departmentOverviews) {
                                   $n=0;
                                   foreach($departmentOverviews as $overview){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><img src="<?php echo $overview['image1'];?>" style="height:120px; max-width: 140px"></td>
                                 <td><img src="<?php echo $overview['image2'];?>" style="height:120px; max-width: 140px"></td>
                                 <td><img src="<?php echo $overview['image3'];?>" style="height:120px; max-width: 140px"></td>                                 
                                 <td style="text-align:justify;"><?php echo $overview['history']; ?></td>
                                 <td style="text-align:justify;"><?php echo $overview['overview']; ?></td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $overview['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>image 1</th>
                                 <th>image 2</th>
                                 <th>image 3</th>                        
                                 <th>history</th>        
                                 <th>overview</th>                                
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
                            
                              <input type="hidden" id="ModalID">
                            
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle">Edit Overview of Department</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                               
                                 
                                <label for="editHistory">History</label>
                                <div class="form-floating">
                                <input type="text" class="form-control" id="editHistory" placeholder=""  />
                                </div>

                                <label for="editOverview">Overview</label>
                                <div class="form-floating">
                                <input type="text" class="form-control" id="editOverview" placeholder="" />
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="editImage1" placeholder=""  />
                                            <label for="editImage1">Image1</label>
                                            <p class="editImage1ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="edit-chosen-image1" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="editImage2" placeholder=""  />
                                            <label for="editImage2">Image2</label>
                                            <p class="editImage2ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="edit-chosen-image2" class="image-style" width="100px" height="100px">
                                            </figure>
                                        </div> 
                                    </div>

                                    <div class="col-sm-12 col-md-6">                               
                                        <div class="form-floating">
                                            <input type="file" class="form-control" accept="image/*" id="editImage3" placeholder=""  />
                                            <label for="editImage3">Image3</label>
                                            <p class="editImage3ErrorMessage"></p>
                                        </div>

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <figure class="image-container">
                                                <img id="edit-chosen-image3" class="image-style" width="100px" height="100px">
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

        handleImageUpload("image1", "chosen-image1");
        handleImageUpload("image2", "chosen-image2");
        handleImageUpload("image3", "chosen-image3");
        handleImageUpload("editImage1", "edit-chosen-image1");
        handleImageUpload("editImage2", "edit-chosen-image2");
        handleImageUpload("editImage3", "edit-chosen-image3");
    </script>


  <script>
    $('#submit').on('click',function(){ 
      if(globalEditor1){
        var history=globalEditor1.getData();
      }
      if(globalEditor2){
        var overview=globalEditor2.getData();
      }
      var image1=$('#image1')[0].files[0];
      var image2=$('#image2')[0].files[0];
      var image3=$('#image3')[0].files[0];

      if(!history || !overview || !image1 || !image2 || !image3){
        $('.formErrorMessage').html("please fill all details to continue !");

        if(!image1 || !image2 || !image3){
            if(!image1){
            $('.image1ErrorMessage').html("Please Select any image here ");
            $('.image1ErrorMessage').css("color","red");
            $('#image1').focus();
            }else{
                $('.image1ErrorMessage').html("");
            }
            if(!image2){
            $('.image2ErrorMessage').html("Please Select any image here ");
            $('.image2ErrorMessage').css("color","red");
            $('#image2').focus();
            }else{
                $('.image2ErrorMessage').html("");
            }
            if(!image3){
            $('.image3ErrorMessage').html("Please Select any image here ");
            $('.image3ErrorMessage').css("color","red");
            $('#image3').focus();
            }else{
                $('.image3ErrorMessage').html("");
            }
        }
        else{
            $('.image1ErrorMessage').html(""); 
            $('.image2ErrorMessage').html(""); 
            $('.image3ErrorMessage').html("");         
        }

      }else{      
        $('.formErrorMessage').html("");
        $('.image1ErrorMessage').html(""); 
        $('.image2ErrorMessage').html(""); 
        $('.image3ErrorMessage').html("");  
       
        var formData=new FormData();
        formData.append("history",history);
        formData.append("overview",overview);
        formData.append("image1",image1);     
        formData.append("image2",image2);      
        formData.append("image3",image3);     
        formData.append("ajax","ajax");   
        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-department-overview",        
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
            url: "xhr/fetch-department-overview", 
            data: {
               dataId:dataId         
            },
            success: function(response){      
            if(globalEditor3){
               globalEditor3.setData(response.history);
            }
            if(globalEditor4){
               globalEditor4.setData(response.overview);
            }     
            $('#edit-chosen-image1').attr("src",response.image1);     
            $('#edit-chosen-image2').attr("src",response.image2);   
            $('#edit-chosen-image3').attr("src",response.image3);             
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

      var image1=$('#editImage1')[0].files[0];
      var editChosenImage1 = $('#edit-chosen-image1').attr('src');

      var image2=$('#editImage2')[0].files[0];
      var editChosenImage2 = $('#edit-chosen-image2').attr('src');

      var image3=$('#editImage3')[0].files[0];
      var editChosenImage3 = $('#edit-chosen-image3').attr('src');

      if(globalEditor3){
      var history=globalEditor3.getData();
      }
      if(globalEditor4){
      var overview=globalEditor4.getData();
      }
 

      if(!editChosenImage1 || !editChosenImage2 || !editChosenImage3 || !history || !overview){
         $('#updateErrorMessage').html("please fill all details to continue !");         
      }else{
         $('#updateErrorMessage').html("");
         
         var formData=new FormData();
         formData.append('image1',image1);
         formData.append('image2',image2);
         formData.append('image3',image3);
         formData.append('history',history);
         formData.append('overview',overview);
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-department-overview",
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
         url:"xhr/delete-department-overview",
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
