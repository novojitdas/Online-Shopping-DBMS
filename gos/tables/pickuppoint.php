<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE pickuppoint (
dateandtime varchar (20),
area varchar (30),
pickup_id numeric(12,2),
primary key (pickup_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table pickuppoint created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>