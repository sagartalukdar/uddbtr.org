<?php
session_start();
include '../classes/Crud.php';

$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the POST request contains data
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        extract($_POST);

        // Data to be inserted
        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ];

        $create = $crud->Create($data, "contact_mail");

        if ($create) {
            $response = ['successMessage' => "Message submitted successfully."];
        } else {
            $response = ['errorMessage' => "Error submitting message. Please try again later."];
        }
    } else {
        $response = ['errorMessage' => "Required fields are missing."];
    }

    echo json_encode($response);
} else {
    $response = ['errorMessage' => "Invalid request method."];
    echo json_encode($response);
}
?>
