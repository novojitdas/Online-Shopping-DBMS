<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE home_delivery (
name varchar (20),
orderno numeric (30,2),
product_id numeric(12,2),
primary key (product_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table home_delivery created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>