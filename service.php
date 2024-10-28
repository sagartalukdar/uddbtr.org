<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Development Department</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row g-4 mt-10" style="background-image: linear-gradient(to left, rgb(202, 169, 169), rgba(255,0,0,1)); padding: 11px; border-radius: 10px;">
            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="d-flex gap-16 align-items-center justify-content-center">
                    <h5 class="name text-center font-700 text-white">We are committed to providing excellent service and want to hear from you. If you have any concerns or complaints about your <span style="color: rgb(23, 79, 182); text-decoration: underline;">Urban Local Bodies (ULB)</span>, please click on the button to file a grievance.</h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <a href="#" class="clickService" id="clickService" data-cs="Grievance">
                    SUBMIT GRIEVANCE
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="citizenServiceModal" tabindex="-1" role="dialog" aria-labelledby="citizenServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="citizenServiceModalLabel">Service Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="serviceTitle"></p>
                    <input type="text" id="inputName" name="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary" id="submitForm">Close</button>
                    <!-- Additional modal buttons -->
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for AJAX and Modal Trigger -->
    <script>
        $(document).ready(function() {
            $('#clickService').on('click', function(e) {
                e.preventDefault();
                
                var serviceTitle = $(this).data('cs');
                console.log('Clicked Service: ' + serviceTitle);
                
                // Show the modal
                $('#citizenServiceModal').modal('show');
                
                // Update modal content with serviceTitle
                $('#serviceTitle').text(serviceTitle);
            });

            $('#submitForm').on('click', function() {
                var name = $('#inputName').val();
                console.log(name);
                // Further actions with the name value
            });
        });
    </script>

</body>
</html>
