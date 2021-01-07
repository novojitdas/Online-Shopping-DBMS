<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE c_order (
date_time varchar (20),
transaction_id numeric (12,2),
order_no numeric(12,2),
primary key (order_no))";

if ($conn->query($sql) === TRUE) {
    echo "Table c_order created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>