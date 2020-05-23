<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$admin_name = mysqli_real_escape_string($conn, $_REQUEST['admin_name']);
$admin_email = mysqli_real_escape_string($conn, $_REQUEST['admin_email']);
$admin_id = mysqli_real_escape_string($conn, $_REQUEST['admin_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO admin_info (admin_name, admin_email, admin_id) VALUES ('$admin_name', '$admin_email', '$admin_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>