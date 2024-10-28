<?php
include '../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid";
    } else {
       
            echo "exists";
        
    }
} else {
    echo "invalid";
}
?>