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
                     Add Updates
                     </button>
                     <!-- Modal -->   
                     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                           <form class="modal-content" enctype="multipart/form-data" action="" method="post">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="backDropModalTitle"> Add Update</h5>
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
                                 
                                 <label for="description">Description</label>
                                 <div class="form-floating">
                                    <input type="text" class="form-control" id="description" placeholder="" />                              
                                 </div>
                                
                                 <div class="row">
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
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="link" placeholder=""  />
                                          <label for="link">Additional link</label>
                                          <p class="urlErrorMessage" style="color:red;"></p>
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
                        <h5 class="card-title">View All Updates</h5>
                     </div>
                     <div class="card-datatable table-responsive" style="padding: 20px">
                        <table id="example" class="datatables-users"style="width:100%; padding: 20px">
                           <thead>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Head</th>
                                 <th>Title</th>
                                 <th>Pdf</th>        
                                 <th>Description</th>        
                                 <th>Link</th>                               
                                 <th>Action</th>                         
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $recentupdates = $crud->Read('recent_updates',"1 order by `id` desc"); 
                                 if ($recentupdates) {
                                   $n=0;
                                   foreach($recentupdates as $update){
                                 ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>                           
                                 <td><?php echo $update['head'];?></td>
                                 <td style="text-align:justify;"><?php echo $update['title']; ?></td>
                                 <td>
                                    <?php
                                      if($update['pdf']){
                                    ?>   
                                       <a href="<?php echo $update['pdf'];?>" target="_blank"><img src="img/organizationInfo/pdfcover.png" style="width:40px;height:40px;"></a>
                                    <?php   
                                      }else{
                                        echo "No PDF";
                                     }?>
                                    
                                 </td>
                                 <td style="text-align:justify;"><?php echo $update['description']; ?></td>
                                 <td style="display:flex;justify-content:center;border:none;">
                                    <?php
                                      if($update['link']){
                                    ?>   
                                       <a href="<?php echo $update['link'];?>" target="_blank">
                                          <i class="fa-solid fa-link fa-fade"></i> Visit Link 
                                       </a>
                                    <?php   
                                      }else {
                                       echo "No Link";
                                      }
                                    ?>
                                 </td>
                                 <td>
                                  <a href=""data-bs-toggle="modal" data-id="<?php echo $update['id']; ?>" data-bs-target="#backDropModal2" target="_blank" class="btn btn-danger btn-buy-now btn-sm edit">Edit</a>
                                </td>
                              </tr>
                              <?php }}?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Sl no.</th>                                 
                                 <th>Head</th>
                                 <th>Title</th>
                                 <th>Pdf</th>        
                                 <th>Description</th>        
                                 <th>Link</th>                               
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
                                 <h5 class="modal-title" id="backDropModalTitle">Edit This Update</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">                                 

                                 <div class="form-floating d-none">
                                    <input type="text" class="form-control" id="ModalID" name="ModalID" placeholder=""  />
                                 </div>
                     
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" name="head" id="editHead" placeholder=""  />
                                          <label for="editHead">Head</label>
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="editTitle" placeholder="" />
                                          <label for="editTitle">Title</label>
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
                                             <input type="file" class="form-control" accept="application/*" id="editPdf" placeholder=""  />
                                             <label for="editPdf">Select PDF</label>
                                             <p class="editPdfErrorMessage"></p>
                                       </div>

                                       <div class="form-group mb-1 col-sm-12 col-md-2">
                                             <figure class="image-container">
                                                <img id="edit-chosen-pdf" class="image-style" width="100px" height="100px">
                                             </figure>
                                       </div> 
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" id="editLink" placeholder=""  />
                                          <label for="editLink">Additional link</label>
                                          <p class="editUrlErrorMessage" style="color:red;"></p>
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
      
       function handlePdfUpload(inputId, imageId) {
            let uploadInput = document.getElementById(inputId);
            let chosenImage = document.getElementById(imageId);

            uploadInput.onchange = () => {
                let file = uploadInput.files[0];
                let fileName = file.name;
                if (fileName.endsWith('.pdf')) {
                    chosenImage.setAttribute("src", "img/organizationInfo/pdfcover.png");
                } else {
                    chosenImage.setAttribute("src", "../../../admin/img/others/empty.jpg");
                    alert("Please upload a PDF file.");
                }
            }
        }

        handlePdfUpload("pdf", "chosen-pdf");
        handlePdfUpload("editPdf", "edit-chosen-pdf");

   </script>


<script>

   function validateUrl(url) {
      var urlReg = /^(https?:\/\/)?((([a-zA-Z\d]([a-zA-Z\d-]{0,61}[a-zA-Z\d])?)\.)+[a-zA-Z]{2,63}|localhost|(\d{1,3}\.){3}\d{1,3}|(\[[A-Fa-f0-9:]+\]))(:\d+)?(\/[-a-zA-Z\d%_.~+@]*)*(\?[;&a-zA-Z\d%_.~+=-]*)?(#[-a-zA-Z\d_]*)?$/;
      return urlReg.test(url);
   }

   var link=$('#link');
   var editLink=$('#editLink');

   link.on('change',function(){     
      if(link.val()){
         if(!validateUrl(link.val())){
            $('.urlErrorMessage').html("please enter a valid url");          
            $('#link').focus();          
         }else{
            $('.urlErrorMessage').html(""); 
         }   
      }else{
         $('.urlErrorMessage').html(""); 
      }
   })

   editLink.on('change',function(){
      if(editLink.val()){
         if(!validateUrl(editLink.val())){
            $('.editUrlErrorMessage').html("please enter a valid url");          
            $('#editLink').focus();          
         }else{
            $('.editUrlErrorMessage').html(""); 
         }
      }else{
         $('.editUrlErrorMessage').html(""); 
      }    
   })

    $('#submit').on('click',function(){ 

      var pdf=$('#pdf')[0].files[0];
      var chosenPdf = $('#chosen-pdf').attr('src');
      var head=$('#head').val();
      var title=$('#title').val();
      var link=$('#link').val();
      if(globalEditor){
         var description=globalEditor.getData();
      }

      if(!head || !title || !description){
        $('.formErrorMessage').html("please fill required details to continue !");

        if(pdf && !chosenPdf){
            $('.pdfErrorMessage').html("this is not a pdf file, please change");
            $('.pdfErrorMessage').css("color","red");
            $('#pdf').focus();
        }

      }else{      
        $('.formErrorMessage').html("");      
        $('.pdfErrorMessage').html(""); 

        if(link && !validateUrl(link)){       
            exit;
        }
       
        var formData=new FormData();
        formData.append("head",head);
        formData.append("pdf",pdf);
        formData.append("title",title);     
        formData.append("description",description);     
        formData.append("link",link);    
     

        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          cache: false,
          mimeType: 'multipart/form-data',
          dataType: "json",
          url: "xhr/add-notice",        
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
            url: "xhr/fetch-notice", 
            data: {
               dataId:dataId         
            },
            success: function(response){          
            if(response.pdf){
                $('#edit-chosen-pdf').attr("src","img/organizationInfo/pdfcover.png"); 
            }else{
               $('#edit-chosen-pdf').attr("src","../../../admin/img/others/empty.jpg"); 
            } 
            $('#editHead').val(response.head);  
            $('#editTitle').val(response.title);     
            $('#editLink').val(response.link);  
            if(globalEditor2){
              globalEditor2.setData(response.description);
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
     
      var pdf=$('#editPdf')[0].files[0];
      var chosenPdf = $('#edit-chosen-pdf').attr('src');

      var head=$('#editHead').val();
      var title=$('#editTitle').val();
      var link=$('#editLink').val();
      if(globalEditor2){
         var description=globalEditor2.getData();
      }

      if(!head || !title || !description){
         $('#updateErrorMessage').html("please fill all details to continue !");        

         if(pdf && !chosenPdf){
            $('#editPdfErrorMessage').html("this is not a pdf file, please change");
            $('#editPdfErrorMessage').css("color","red");
            $('#editPdf').focus();
         }else{
            $('#editPdfErrorMessage').html("");
         }

      }else{
         $('#updateErrorMessage').html("");        
         $('#editPdfErrorMessage').html("");

         if(link && !validateUrl(link)){       
            exit;
         }
       
         var formData=new FormData();
         formData.append('head',head);
         formData.append('pdf',pdf);
         formData.append('title',title);
         formData.append("description",description);     
         formData.append("link",link);     
         formData.append('id',id);

         $.ajax({
         type: "POST",
         processData: false,
         contentType: false,
         cache: false,
         dataType: "json",
         url: "xhr/edit-notice",
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
         url:"xhr/delete-notice",
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

