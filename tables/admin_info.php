<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE admin_info (
admin_name varchar (20),
admin_email varchar (30),
admin_id numeric(12,2),
primary key (admin_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table admin_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>