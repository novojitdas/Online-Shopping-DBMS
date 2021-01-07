<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE c_address (
name varchar (20),
area varchar (30),
home_number numeric(12,2),
primary key (name))";

if ($conn->query($sql) === TRUE) {
    echo "Table c_address created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>