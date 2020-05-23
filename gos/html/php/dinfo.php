<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$dateandtime = mysqli_real_escape_string($conn, $_REQUEST['dateandtime']);
$c_id = mysqli_real_escape_string($conn, $_REQUEST['c_id']);
$dman_id = mysqli_real_escape_string($conn, $_REQUEST['dman_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO d_info (dateandtime, c_id, dman_id) VALUES ('$dateandtime', '$c_id', '$dman_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>