<?php 

session_start();

?>





<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Login</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/logo/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <!-- Page CSS -->
    
<!-- Bootstrap CSS -->



    <!-- Helpers -->
<!-- 
    
<link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />

<link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" /> -->
    
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .password-toggle {
        position: absolute;
        right: 10px;
        top: calc(50% - 10px); /* Adjust based on your design */
        cursor: pointer;
    }
</style>
<body>


  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <style type="text/css">
    /* Default styles */
.app-brand {
    text-align: center; /* Center align the image */
}

.responsive-img {
    max-width: 170px; /* Ensures the image never exceeds its original size */
    height: auto; /* Maintains aspect ratio */
}
#password-text{
  display: none;
}
#sign-in{
  display: none;
}
#verify-otp{
  display: none;
}
#resendOTP{
  display: none;
}
#resend-otp{
  display: none;
}
/* Media query for small screens */
@media (max-width: 768px) {
    .responsive-img {
        max-width: 100%; /* Adjust as needed */
    }
}

  </style>
  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
      <div class="w-100 d-flex justify-content-center">
        <img src="assets/img/illustrations/boy-with-rocket-light.png" class="img-fluid" alt="Login image" width="700" data-app-dark-img="illustrations/boy-with-rocket-dark.png" data-app-light-img="illustrations/boy-with-rocket-light.html">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4" style="background-color: #f9ffff;">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-5">
            <img src="../assets/images/logo/logo.png" class="responsive-img">
        </div>

        <!-- /Logo -->
        <h4 class="mb-2" style="font-weight: 700">ADMIN LOGIN</h4>
        <!-- <p class="mb-4">Please sign-in to your account and start the adventure</p> -->
          <p class="admin-warning" style="color: red"><?php if (isset($_SESSION['errorLogin'])) {
              echo $_SESSION['errorLogin'];
              unset($_SESSION['errorLogin']);

            } 
                
            ?>
              
          </p>
        <form class="mb-3" method="post">
                <div class="form-floating">
                    <select class="form-select" id="userType" name="userType" aria-label="User Type">
                        <option selected disabled>User Type</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="EO">Chairman/E.O</option>
                        <!-- <option value="CP">CONTENT PROVIDER</option> -->
                    </select>
                    <label for="userType">Select User Type</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="MB" name="MB" aria-label="Municipality Board">
                        <option selected disabled>Select Municipality Board</option>
                        <!--<option value="basugaon_mb">Basugaon MB</option>-->
                        <!--<option value="bijni_mb">Bijni MB</option>-->
                        <!--<option value="fakiragram_mb">Fakiragram MB</option>-->
                        <!--<option value="goreswar_mb">Goreswar MB</option>-->
                        <!--<option value="gossaigaon_mb">Gossaigaon MB</option>-->
                        <!--<option value="kajalgaon_mb">Kajalgaon MB</option>-->
                        <option value="kokrajhar_mb">Kokrajhar MB</option>
                        <!--<option value="tangla_mb">Tangla MB</option>-->
                        <!--<option value="udalguri_mb">Udalguri MB</option>-->
                        <option value="UDD">UDD</option>
                    </select>
                    <label for="MB">Select MB</label>
                </div>
                 <div class="form-floating">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email"  />
                     <p id="emailErrorMessage" style="color:red"></p>
                    <label for="floatingInput">Email</label>
                 </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                    <label for="password">Password</label>
                    <i class="bi bi-eye-slash password-toggle" id="password-toggle"></i>
                </div>
                
                
                <!-- <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me" name="remember-me">
                        <label class="form-check-label" for="remember-me">
                            Remember Me
                        </label>
                    </div>
                </div> -->
                 <p id="formErrorMessage" style="color:red"></p>
                <input class="btn btn-info" id="submit" value="SUBMIT" type="button">
                <input class="btn btn-primary " id="resendOTP" value="RESEND" type="button">
                <input class="btn btn-primary " id="sign-in" value="SIGN IN" type="button">
                  

                
            </form>


        <!-- <p class="text-center">
          <span>New on our platform?</span>
          <a href="auth-register-cover.html">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-4">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div> -->
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->
<!-- otp modal -->
<!-- Button trigger modal -->


<!-- OTP Verification Modal -->
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-5">Two Factor Authentication</h3>
        </div>
        <!-- <h6>Verify Your Mobile Number for SMS</h6>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p> -->
        <form id="enableOTPForm" class="row g-3" method="POST">
            <div class="col-12">
                <div class="form-floating">
                    <input type="hidden" class="form-control" id="otpEmail" name="otpEmail" placeholder="Email">
                    <label for="email">Email</label>
                    <!-- <p id="modalFormErrorMessage" style="color:red"></p> -->
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="OTP" id="OTP" placeholder="OTP">
                    <label for="OTP">Enter OTP</label>
                    <p id="modalFormErrorMessage" style="color:red"></p>
                    <p id="otpErrorMessage" style="color:red"></p>
                </div>
                <div id="otpActions">
                    <button type="button" id="verify-otp" class="btn btn-primary me-sm-3 me-1">VERIFY</button>
                    <div id="timer" style="color: red; font-size: 12px; font-weight: 700;"></div>
                    <button type="button" id="resend-otp" class="btn btn-info">RESEND OTP</button>
                </div>
            </div>
        </form>

        

      </div>
    </div>
  </div>
</div>


<!-- otp modal ends -->

  

  <!-- Core JS -->
  <!-- build:js assetsvendor/js/core.js -->
  
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assetsvendor/libs/%40form-validation/popular.js"></script>
<script src="assetsvendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="assetsvendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="assetsjs/main.js"></script>
  <!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
  <!-- Page JS -->
  <script src="assetsjs/pages-auth.js"></script>
  <script type="text/javascript">
        $(function () {
        $('#submit').on('click', function () {
             // var name = $("#name").val();
            var userType = $("#userType").val();
            console.log(userType);
            var MB = $("#MB").val();
            var email = $("#email").val();
            console.log(email);
            var password = $("#password").val();
           
            var formData = new FormData();
            // formData.append('image', file);
            // formData.append('fname', fname);
            // formData.append('lname', lname);
           
            formData.append('userType', userType);
            formData.append('MB', MB);
            formData.append('email', email);
            formData.append('password', password);
           

            if (userType===""||userType===null || MB===""||MB===null || email===""||email===null || password===""||password===null) {
                $("#formErrorMessage").html("Fill all the details to continue...");
                $('#submit').preventDefault();

            } else {
              $("#formErrorMessage").html("");
                function validateEmail($email) {
                  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  return emailReg.test($email);
                }
                // function validateMobile($mobile) {
                //   var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                //   return mobileReg.test($mobile);
                // }
                if (!validateEmail(email)) {
                    $("#emailErrorMessage").html("Please Enter a valid email address.");
                    $("#email").focus();
                    $('#submit').preventDefault();
                } 
                // if (!validateMobile(Phone)) {
                //     $("#phoneErrorMessage").html("Please Enter a valid phone number.");
                //     $("#phone").focus();
                //     $('#submit').preventDefault();
                // } 
                else {
                    $("#formErrorMessage").html("");
                    $("#emailErrorMessage").html("");
                    $("#phoneErrorMessage").html("");

                    // $("#password-text").css("display","inline-block");
                    // $("#add-user-dummy").css("display","inline-block");

                    $.ajax({

                        type: "POST", 
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json", 
                        url: "xhr/sent-otp-sms",
                        mimeType: 'multipart/form-data',
                        data: formData,
                        success: function(response) {
                            if (response.successMessage) {
                                $("#submit").css("display", "none");
                                swal("Success!", response.successMessage, "success");
                                $('#enableOTP').modal('show');
                                $('#otpEmail').val(email);   
                                $("#password-text").css("display", "inline-block");
                                $("#verify-otp").css("display", "inline-block");
                            } else if (response.errorMessage) {
                                swal("Error!", response.errorMessage, "error");
                                $("#verify-otp").css("display", "none");
                                $("#sent-otp").css("display", "inline-block");
                            }

                            $('#enableOTP').on('hidden.bs.modal', function () {
                                $("#submit").css("display", "inline-block");
                            });
                        },
                        error: function(error) {
                            swal("Error!", "Something went wrong", "error");
                            
                        }

                    });
                }
                
            }
            
        });
    });
            // otp verification with timer
     
            $(document).ready(function() {
              var timerDuration = 10 * 60; //10 mins
              // var timerDuration = 1 * 60; // 1 minute in seconds
              // var timerDuration = 10; // 10 seconds



              var timerInterval;

              function startTimer() {
                  $('#verify-otp').show(); 
                  $('#timer').show();
                  $('#resend-otp').hide(); 

                  updateTimerDisplay(timerDuration);

                  timerInterval = setInterval(function() {
                      timerDuration--;
                      updateTimerDisplay(timerDuration);
                      if (timerDuration <= 0) {
                          clearInterval(timerInterval);
                          $('#timer').hide();
                          $('#verify-otp').hide(); 
                          $('#resend-otp').show(); 
                           
                      }
                  }, 1000);
              }

              function updateTimerDisplay(duration) {
                  var minutes = Math.floor(duration / 60);
                  var seconds = duration % 60;
                  $('#timer').text('Resend OTP in ' + minutes + 'm ' + seconds + 's');
              }

              // function hideOTPInput() {
              //     $('#OTP').closest('.form-floating').hide(); 
              // }

              // function showOTPInput() {
              //     $('#OTP').closest('.form-floating').show();
              //     timerDuration = 2 * 60;
              //     startTimer();
              // }

              $('#enableOTP').on('shown.bs.modal', function() {
                  startTimer();
              });

              $('#resend-otp').on('click', function() {
                  $("#modalFormErrorMessage").html("");
                  $('#verify-otp').show(); 
                  $('#resend-otp').hide();
                  var email = $("#otpEmail").val();
                  var formData = new FormData();
                  formData.append('email', email); 
                  $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "xhr/resend-otp-sms",
                        data: formData,
                        success: function(response) {
                            if (response.successMessage) {
                              
                                swal("Success!", response.successMessage + " Reloading", "success");
                                // window.location.href = response.redirectPage; 
                            } else if (response.errorMessage) {
                                swal("Error!", response.errorMessage, "error");
                                // $("#add-user-dummy").css("display", "none");
                                // $("#add-user").css("display", "inline-block");
                            }
                        },
                        error: function(error) {
                            swal("Error!", "Something went wrong", "error");
                            console.log(error);
                            $("#verify-otp").css("display", "none");
                            $('#resend-otp').show();
                            $('#timer').hide();
                        }
                    });
                   
              });

            
          });

           // otp verification with timer ends


       $(function () {
            $('#verify-otp').on('click', function() {
                var email = $("#otpEmail").val();
                // console.log(email);
                var OTP = $("#OTP").val();
                // console.log(OTP);

                var formData = new FormData();
                formData.append('email', email);
                formData.append('OTP', OTP);

                if (email === "" || email === null || OTP === "" || OTP === null) {
                    $("#modalFormErrorMessage").html("Enter OTP");
                    $('#verify-otp').preventDefault();
                } else {
                    $("#modalFormErrorMessage").html("");

                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "login-process/user-login-process",
                        data: formData,
                        success: function(response) {
                            if (response.successMessage) {
                                $("#verify-otp").css("display", "none");
                                swal("Success!", response.successMessage + " Reloading", "success");
                                window.location.href = response.redirectPage; 
                            } else if (response.errorMessage) {
                                swal("Error!", response.errorMessage, "error");
                                $("#add-user-dummy").css("display", "none");
                                $("#add-user").css("display", "inline-block");
                            }
                        },
                        error: function(error) {
                            swal("Error!", "Something went wrong", "error");
                            console.log(error);
                            $("#verify-otp").css("display", "none");
                            $('#resend-otp').show();
                            $('#timer').hide();
                        }
                    });
                }
            });
        });


</script>
 
<script>
    $(document).ready(function() {
        $('#password-toggle').click(function(){
            // Toggle password visibility
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');
            if (passwordFieldType == 'password') {
                passwordField.attr('type', 'text');
                $(this).removeClass('bi-eye-slash').addClass('bi-eye');
            } else {
                passwordField.attr('type', 'password');
                $(this).removeClass('bi-eye').addClass('bi-eye-slash');
            }
        });
    });
</script>

</body>

</html>

<!-- beautify ignore:end -->

