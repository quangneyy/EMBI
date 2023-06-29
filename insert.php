<?php
   // Create a database connection
$mysqli = new mysqli('localhost', 'root', '', 'meowtechweb');

// Check connection
if ($mysqli->connect_errno) {
    die('Connection failed: ' . $mysqli->connect_error);
}


// Retrieve form data
$email = $_POST['email'];

// Prepare the query
$query = "INSERT INTO `get_in_touch`(`Email`, `date_posted`) 
	VALUES ('$email', '".date("Y-m-d H:i:s")."')";;

// Execute the query
if ($mysqli->query($query)) {
    echo 'Data inserted successfully';
} else {
    echo 'Error: ' . $mysqli->error;
}

// Close the connectilocon
$mysqli->close();
?>