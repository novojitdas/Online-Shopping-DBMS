<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$dman_name = mysqli_real_escape_string($conn, $_REQUEST['dman_name']);
$dman_mobile = mysqli_real_escape_string($conn, $_REQUEST['dman_mobile']);
$dman_id = mysqli_real_escape_string($conn, $_REQUEST['dman_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO delivery_man (dman_name, dman_mobile, dman_id) VALUES ('$dman_name', '$dman_mobile', '$dman_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>