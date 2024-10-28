<?php include("include/head.php");
 include ('classes/Crud.php');
 $crud=new Crud();
 $dignities=$crud->Read("department_dignities","1 order by `id` desc");
?>
        
    <body>
        <?php include("include/preloader.php");?>
        <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Contact</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Contact area S t a r t -->
        <section class="contact-area section-padding2">
            <div class="position-relative ">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-xl-6  col-lg-6 ">
                               <!-- info -->
                        <div class="destination-details-info">
                         
                            <div class="info-table">
                                <table class="table">
                                    <tbody>

                                        <tr class="text-center">
                                            <th style="color: rgb(98, 98, 202);">UDD Members Designation</th>
                                            <td style="color: rgb(98, 98, 202);" >Name</td>
                                        </tr>

                                        <?php
                                          if($dignities){
                                            foreach($dignities as $hon){
                                        ?>
                                        <tr>
                                            <th><?= $hon['designation']; ?></th>
                                            <td> <?= $hon['name']; ?> </td>
                                        </tr>
                                        <?php
                                            }
                                          }else{
                                            for($i=0;$i<7;$i++){
                                        ?>
                                        <tr>
                                            <th>{Designation }, Urban Development Department</th>
                                            <td> Full Name </td>
                                        </tr>
                                        <?php
                                            }
                                          }
                                        ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /info  -->

                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-card">
                                <h4 class="contact-heading">Send message to UDD.</h4>
                                <form method="POST" class="">
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your name" name="name" id="name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your email" name="email" id="email">
                                             <span id="contact-email-error"></span>
                                        </div>                                       
                                
                                        <div class="col-12">
                                            <input class="custom-form" type="text" placeholder="Select subject" id="subject" name="subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="custom-form-textarea" id="message" name="message" 
                                            rows="5" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                    <p id="formErrorMessage" style="color: red;font-weight: 700"></p>
                                    <div class="mt-40">
                                       <div class="sign-btn">
                                            <button class="button-signin" id="contact">
                                              SUBMIT
                                              <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                                <path
                                                  clip-rule="evenodd"
                                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                  fill-rule="evenodd"
                                                ></path>
                                              </svg>
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Contact-->

        

        <!-- Map -->
       <div style="padding-left: 15px; padding-right: 15px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d223.32043467763754!2d90.27826261474925!3d26.4193793738313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37588a9e2fb3f68f%3A0x270c51c94ec0f719!2sOffice%20of%20the%20CHD%2C%20Urban%20Development%20Office%20BTC!5e0!3m2!1sen!2sin!4v1719412359890!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>   
        <!-- / Map -->


      
    </main>

    <!-- bottom images start -->
    <?php include("include/imgAndArnoimotion.php");?>
    <!-- bottom images end -->


    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>

    <!-- sweetalert -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
  

    <script type="text/javascript">
        $(document).ready(function () {
            $('#email').on('blur', function () {
                var email = $(this).val();
                $.ajax({
                    url: 'xhr/validate-email', 
                    type: 'POST',
                    data: { email: email },
                    success: function (response) {
                        if (response === "invalid") {
                            $('#contact-email-error').text('Invalid Email address').css('color', 'red');
                            $("#contact").prop("disabled", true);
                        } else {
                            $('#contact-email-error').text('').css('color', ''); 
                            $("#contact").prop("disabled", false);
                        }
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#contact').on('click', function (e) {
                e.preventDefault(); // Prevent default form submission

                var name = $("#name").val().trim();
                var email = $("#email").val().trim();
                var subject = $("#subject").val().trim();
                var message = $("#message").val().trim();

                // Clear previous error messages
                $("#formErrorMessage").html("");
                $("#emailErrorMessage").html("");

                // Validating form fields
                if (!name || !email || !subject || !message) {
                    $("#formErrorMessage").html("Kindly fill all details...");
                    return false; // Prevent AJAX call if validation fails
                }

                // Validate email
                function validateEmail(email) {
                    var emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return emailReg.test(email);
                }

                if (!validateEmail(email)) {
                    $("#emailErrorMessage").html("Please enter a valid email address.");
                    return false; // Prevent AJAX call if email is invalid
                }

                // Create FormData object
                var formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('subject', subject);
                formData.append('message', message);

                // Making an AJAX request to the server
                $.ajax({
                    type: "POST",
                    url: "xhr/send-message", // Replace with your server endpoint
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    data: formData,
                    success: function(response){
                        if(response.successMessage){
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
                });
            });
        });
    </script>

</body>

</html>