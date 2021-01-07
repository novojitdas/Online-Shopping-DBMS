<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$store_name = mysqli_real_escape_string($conn, $_REQUEST['store_name']);
$owner = mysqli_real_escape_string($conn, $_REQUEST['owner']);
$store_id = mysqli_real_escape_string($conn, $_REQUEST['store_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO store_info (store_name, owner, store_id) VALUES ('$store_name', '$owner', '$store_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>