<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$total_order = mysqli_real_escape_string($conn, $_REQUEST['total_order']);
 
// Attempt insert query execution
$sql = "INSERT INTO c_profile (name, age, total_order) VALUES ('$name', '$age', '$total_order')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>