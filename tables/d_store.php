<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE d_store (
store_id numeric (20,2),
transaction_id numeric (12,2),
order_no numeric(12,2),
primary key (order_no))";

if ($conn->query($sql) === TRUE) {
    echo "Table d_store created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>