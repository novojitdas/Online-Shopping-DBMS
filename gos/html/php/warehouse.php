<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$area = mysqli_real_escape_string($conn, $_REQUEST['area']);
$warehouse_number = mysqli_real_escape_string($conn, $_REQUEST['warehouse_number']);
 
// Attempt insert query execution
$sql = "INSERT INTO warehouse (area, warehouse_number) VALUES ('$area', '$warehouse_number')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>