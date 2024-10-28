	<?php
session_start();

include '../../classes/Crud.php';
include 'deviceInfo.php'; 

$crud = new Crud();

// $appNameLower = strtolower($appName);

$connection = new DbConfig();
$con = $connection->connect();

// $username = $_POST['username'];
// $password = $_POST['password'];
// $userType = $_POST['userType'];
// $MB = $_POST['MB'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$userType = $_SESSION['userType'];
$MB = $_SESSION['MB'];

echo "Received POST data:<br>";
echo "Username: " .$username. "<br>";
echo "Password: " .$password . "<br>";
echo "User Type: " .$userType . "<br>";
echo "MB: " .$MB  . "<br>";
// Generate hash for password validation
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // Random string
$hash = hash('sha512', $password . $salt);

// Prepare SQL query
$stmt = $con->prepare("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' AND `MB` = '$MB'  AND `userType` = '$userType'");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hash);
    $stmt->bindParam(':MB', $MB);
    $stmt->bindParam(':userType', $userType);
$stmt->execute();

// Check if user exists
if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check user status
    if ($row['status'] == 0) {
        header("location: ../account-not-approved");
        exit();
    } elseif ($row['status'] == 2) {
        header("location: ../banned");
        exit();
    } else {
        // Set session variables
        $_SESSION[$appNameLower . '_email'] = $email;
        $_SESSION['this_user_id'] = $row['id'];
        $_SESSION['this_user_username'] = $row['username'];
        $_SESSION['this_user_MB'] = $row['MB'];
        $_SESSION['userType'] = $row['userType'];

        // Logging login details
        $user_id = $row['id'];
        $os = getOs();
        $browser = getBrowser();
        $ip = $_SERVER['REMOTE_ADDR'];
        $login_date = date('Y-m-d');
        $login_time = date('H:i:s');

        $sql2 = $con->prepare("INSERT INTO `login_details` (`user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES ('$user_id', '$os', '$browser', '$ip', '$login_date', '$login_time')");
        $sql2->execute();

        // Redirect based on MB
        header("location: ../../index.php");
        exit();
    }
} else {
    $_SESSION['errorLogin'] = "Username or Password is incorrect. Please try again.";
    header("location: ../login.php");
    exit();
}
?>
