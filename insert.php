<?php
	include 'config.php';
	$email=$_POST['email'];
	$sql = "INSERT INTO `get_in_touch`(`Email`, `date_posted`) 
	VALUES ('$email', '".date("Y-m-d H:i:s")."')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>