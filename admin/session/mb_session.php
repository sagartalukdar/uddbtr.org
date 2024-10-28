<?php
session_start();

include '../../classes/Crud.php';
include 'deviceInfo.php';

$crud = new Crud();

$connection = new DbConfig();
$con = $connection->connect();

$Phone = $_SESSION['phone'];
$OTP = $_SESSION['otp'];
$userType = $_SESSION['userType'];
$MB = $_SESSION['MB'];
    // echo "Received POST data:<br>";
    // echo "Username: " .$Phone. "<br>";
    // echo "Password: " .$OTP. "<br>";
    // echo "User Type: " .$userType. "<br>";
    // echo "MB: " . $MB. "<br>";
// $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; 
// $hash = hash('sha512', $password . $salt);

try {
   
    $stmt = $con->prepare("SELECT * FROM `users` WHERE `phone` = '$Phone' AND `otp` = '$OTP' AND `MB` = '$MB' AND `userType` = '$userType'");
    // $stmt->bindParam(':username', $username);
    // $stmt->bindParam(':OTP', $OTP);  
    // $stmt->bindParam(':MB', $MB);
    // $stmt->bindParam(':userType', $userType);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['status'] == 0) {
            $_SESSION['errorLogin'] = "User account not yet approved";
            header("location: ../login-test");
            exit();
        } elseif ($row['status'] == 2) {
            $_SESSION['errorLogin'] = "User account is banned";
            header("location: ../login-test");
            exit();
        } else {
      
            $_SESSION[$appNameLower . '_email'] = $row['email'];
            $_SESSION['this_user_id'] = $row['id'];
            $_SESSION['this_user_username'] = $row['username'];
            $_SESSION['this_user_MB'] = $row['MB'];
            $_SESSION['userType'] = $row['userType'];

            $user_id = $row['id'];
            $os = getOs();
            $browser = getBrowser();
            $ip = $_SERVER['REMOTE_ADDR'];
            $login_date = date('Y-m-d');
            $login_time = date('H:i:s');

            $sql2 = $con->prepare("INSERT INTO `login_details` (`user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES (:user_id, :os, :browser, :ip, :login_date, :login_time)");
            $sql2->bindParam(':user_id', $user_id);
            $sql2->bindParam(':os', $os);
            $sql2->bindParam(':browser', $browser);
            $sql2->bindParam(':ip', $ip);
            $sql2->bindParam(':login_date', $login_date);
            $sql2->bindParam(':login_time', $login_time);
            $sql2->execute();

            $_SESSION['errorLogin'] = "";

            if ($userType == "EO" || $userType == "CP") {
                // header("location: ../../bijni_mb/admin/index.php");
                 header("location: ../../ulb/{$row['MB']}/admin/index");
                
            } else {
                $_SESSION['errorLogin'] = "User Role Could Not Match.";
                header('location: ../login');
            }
            exit();
        }
    } else {
        $_SESSION['errorLogin'] = "Invalid Credential !";
        header("location: ../login");
        exit();
    }
} catch (PDOException $e) {
   
    $_SESSION['errorLogin'] = "Database Error: " . $e->getMessage();
    header("location: ../login");
    exit();
}
?>
