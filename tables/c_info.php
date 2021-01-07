<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE c_info (
c_name varchar (20),
location varchar (15),
c_id numeric(12,2),
primary key (c_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table c_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
