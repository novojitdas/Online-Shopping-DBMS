<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE category (
cat_title varchar (20),
cat_id numeric(12,2),
primary key (cat_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table category created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>