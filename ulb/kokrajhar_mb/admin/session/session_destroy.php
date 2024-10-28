<?php
session_start();
unset ($_COOKIE['pop']);
setcookie('pop', null, -1);
unset($_SESSION['this_registration_id']);
// session_destroy();
header('location: ../index.php');
exit();
?>