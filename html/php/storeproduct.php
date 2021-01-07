<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$product_name = mysqli_real_escape_string($conn, $_REQUEST['product_name']);
$brand = mysqli_real_escape_string($conn, $_REQUEST['brand']);
$product_id = mysqli_real_escape_string($conn, $_REQUEST['product_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO store_products (product_name, brand, product_id) VALUES ('$product_name', '$brand', '$product_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>