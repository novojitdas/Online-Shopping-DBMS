<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$orderno = mysqli_real_escape_string($conn, $_REQUEST['orderno']);
$product_id = mysqli_real_escape_string($conn, $_REQUEST['product_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO home_delivery (name, orderno, product_id) VALUES ('$name', '$orderno', '$product_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>