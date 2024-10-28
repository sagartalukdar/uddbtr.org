<?php
session_start();

include '../../classes/Crud.php';

ini_set('display_errors', 1);

include 'deviceInfo.php';

$crud = new Crud();



// $appNameLower = strtolower($appName);


date_default_timezone_set('Asia/Kolkata');
	$connection = new DbConfig();
	$con = $connection -> connect();
	$Phone = $_SESSION['phone'];
	$OTP = $_SESSION['otp'];
	$userType = $_SESSION['userType'];
	$MB = $_SESSION['MB'];
	
	// echo "Received POST data:<br>";
	// echo "Username: " .$Phone. "<br>";
	// echo "Password: " .$OTP. "<br>";
	// echo "User Type: " .$userType. "<br>";
	// echo "MB: " . $MB. "<br>";

	
	$stmt=$con->prepare("SELECT * FROM `users` WHERE  `phone` = '$Phone' AND `otp`='$OTP' AND `userType`='$userType' AND `MB`='$MB'");

	$stmt->execute();
	$row = $stmt -> fetch(PDO:: FETCH_ASSOC);
	if($stmt->rowCount()==1)
	{	
		if ($row['status'] == 0) {
			header("location: ../login-test");
		} else if ($row['status'] == 2) {

			header("location: ../login-test");

		} else {
			$_SESSION[$appNameLower . '_email'] = $email;
			$_SESSION['this_user_id'] = $row['id'];
			// $_SESSION['this_user_name'] = $row['name'];
			$_SESSION['this_user_username'] = $row['username'];
			$_SESSION['this_user_MB'] = $row['MB'];
			$_SESSION['userType'] = $row['userType'];

			$user_id = $row['id'];

			$os = getOs();

			$browser = getBrowser();

			$ip = $_SERVER['REMOTE_ADDR'];

			$login_date = date('Y-m-d');

			$login_time = date('H:i:s');

			$sql2 = $con -> prepare("INSERT INTO `login_details` (`user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES ('$user_id', '$os', '$browser', '$ip', '$login_date', '$login_time')");

			$sql2 -> execute();

			$_SESSION['errorLogin'] = "";

			header("location: ../index");
		}
	}
	else
	{
		$_SESSION['errorLogin'] = "Username or Password is incorrect. <br>Please try again.";
		header("location: ../login");

	}

?>
