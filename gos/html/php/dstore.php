<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$store_id = mysqli_real_escape_string($conn, $_REQUEST['store_id']);
$transaction_id = mysqli_real_escape_string($conn, $_REQUEST['transaction_id']);
$order_no = mysqli_real_escape_string($conn, $_REQUEST['order_no']);
 
// Attempt insert query execution
$sql = "INSERT INTO d_store (store_id, transaction_id, order_no) VALUES ('$store_id', '$transaction_id', '$order_no')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>