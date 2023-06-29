<?php
echo 'Current PHP version: ' . phpversion();
// echo "hehe";
// $servername = "meowtech-web.mysql.database.azure.com"; // Replace with your database server name
// $username = "meowtechadmin"; // Replace with your database username
// $password = "b171ff9a14344d80a530af278dc704b0@"; // Replace with your database password
// $dbname = "meowtechweb"; // Replace with your database name

$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "meowtechweb"; // Replace with your database name

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// // Close the connection
// $conn->close();


// $conn = mysqli_init();
// mysqli_ssl_set($conn,NULL,NULL, "db/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
// mysqli_real_connect($conn, 'meowtech-web.mysql.database.azure.com', 'meowtechadmin', 'b171ff9a14344d80a530af278dc704b0@', 'meowtechweb', 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>