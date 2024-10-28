<?php
session_start();

if (isset($_POST['userType']) && isset($_POST['MB']) && isset($_POST['Phone'])) {
    $userType = $_POST['userType'];
    $MB = $_POST['MB'];
    $Phone = $_POST['Phone'];

    function validateMobile($mobile) {
        
        $mobileReg = '/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/';
        return preg_match($mobileReg, $mobile);
    }

    if (!validateMobile($Phone)) {
        $_SESSION['errorPhone'] = "Enter valid phone number";
        header('location: ../login');
    } else {
        $_SESSION['phone'] = $_POST['Phone'];
       
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['userType'] = $_POST['userType'];
        $_SESSION['MB'] = $_POST['MB'];

        if ($userType == "ADMIN") {
            $redirectPage = "../session/session";
        } elseif ($userType == "EO" || $userType == "CP") {
            $redirectPage = "../session/mb_session";
        } else {
            $_SESSION['errorLogin'] = "User Role Could Not Match.";
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('location: ../login');
            exit();
        }

        header("location: $redirectPage");
        exit();
    }

} else {
    $_SESSION['errorLogin'] = "You must select a role to login.";
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location: ../login');
    exit();
}
?>
