	<?php
session_start();


// Generate hash for password validation
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // Random string
$password='123';
$hash = hash('sha512', $password . $salt);
echo $hash;


?>
