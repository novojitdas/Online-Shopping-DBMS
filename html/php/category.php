<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$cat_title = mysqli_real_escape_string($conn, $_REQUEST['cat_title']);
$cat_id = mysqli_real_escape_string($conn, $_REQUEST['cat_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO category (cat_title, cat_id) VALUES ('$cat_title', '$cat_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>