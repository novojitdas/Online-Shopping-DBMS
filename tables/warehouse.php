<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE warehouse (
area varchar (20),
warehouse_number numeric(12,2),
primary key (warehouse_number))";

if ($conn->query($sql) === TRUE) {
    echo "Table warehouse created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>