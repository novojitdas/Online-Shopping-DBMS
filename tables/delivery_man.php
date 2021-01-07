<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE delivery_man (
dman_name varchar (20),
dman_mobile numeric (20,2),
dman_id numeric(12,2),
primary key (dman_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table delivery_man created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>