<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">OTP Verification Example</div>
                <div class="card-body">
                    <form id="verificationForm">
                        <div class="form-group">
                            <label for="userType">User Type:</label>
                            <input type="text" class="form-control" id="userType" name="userType" placeholder="Enter User Type">
                        </div>
                        <div class="form-group">
                            <label for="MB">MB:</label>
                            <input type="text" class="form-control" id="MB" name="MB" placeholder="Enter MB">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone:</label>
                            <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Enter Phone">
                            <small id="phoneErrorMessage" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div id="formErrorMessage" class="text-danger"></div>
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OTP Verification Modal -->
<!-- Example Modal Structure -->
<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel">OTP Verification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="otpForm">
                    <div class="form-group">
                        <label for="otpInput">Enter OTP:</label>
                        <input type="text" class="form-control" id="otpInput" name="otpInput" placeholder="Enter OTP" required>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="verifyOTP">Verify OTP</button>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Custom JavaScript -->
<script>
$(document).ready(function() {
    $('#submit').on('click', function(e) {
        e.preventDefault();
        
        // Simulate AJAX success
        var response = {
            successMessage: "OTP sent successfully."
        };
        
        if (response.successMessage) {
            // Show success message using SweetAlert
            swal("Success!", response.successMessage, "success").then((value) => {
                // After SweetAlert is closed, open OTP modal
                $("#otpModal").modal("show");
            });
        } else {
            // Handle error case
            swal("Error!", "Failed to send OTP.", "error");
        }
    });

    $('#verifyOTP').on('click', function() {
        var otp = $('#otpInput').val();

        // Simulate OTP verification success
        swal("Success!", "OTP verified successfully!", "success");

        // Hide the modal after OTP verification
        $("#otpModal").modal("hide");
    });

    // Reset form fields or take necessary action upon OTP modal close
    $('#otpModal').on('hidden.bs.modal', function () {
        $("#otpForm")[0].reset(); // Reset the OTP input field
    });
});


</script>

</body>
</html>
