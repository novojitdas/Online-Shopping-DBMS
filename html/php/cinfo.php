<?php
error_reporting(0);
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$c_name = mysqli_real_escape_string($conn, $_REQUEST['c_name']);
$location = mysqli_real_escape_string($conn, $_REQUEST['location']);
$c_id = mysqli_real_escape_string($conn, $_REQUEST['c_id']);


 
// Attempt insert query execution
$sql = "INSERT INTO c_info (c_name, location, c_id) VALUES ('$c_name', '$location', '$c_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>