<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$area = mysqli_real_escape_string($conn, $_REQUEST['area']);
$home_number = mysqli_real_escape_string($conn, $_REQUEST['home_number']);
 
// Attempt insert query execution
$sql = "INSERT INTO c_address (name, area, home_number) VALUES ('$name', '$area', '$home_number')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>