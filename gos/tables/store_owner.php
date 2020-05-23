<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE store_owner (
store_name varchar (20),
owner varchar (30),
store_id numeric(12,2),
primary key (store_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table store_owner created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>