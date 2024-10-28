<?php

if (isset($_POST['category'])) {
    include '../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");
    
    extract($_POST);
    
        $data = [
            'email' => $email,
            'mb' => $mb,
            'subject' => $category, // Assuming 'category' is mapped to 'subject' in your database
            'message' => $message,
            'message_date' => $today,
            // 'added_time' => $time // You commented this out, so it's not included
        ];

        // Perform database insertion
        $create = $crud->Create($data, "citizen_grievance");

        if ($create) {
            $data['successMessage'] = "Message submitted successfully.";
        } else {
            $data['errorMessage'] = "Error submitting message. Please try again later.";
        }
    

    // Return JSON response
    echo json_encode($data);
}
?>
