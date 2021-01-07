<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE coupon (
coupon_code varchar (20),
coupon_id numeric(12,2),
primary key (coupon_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table coupon created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>