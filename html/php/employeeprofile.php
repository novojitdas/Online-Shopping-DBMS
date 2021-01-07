<?php
$servername = "localhost";
$username = "gos";
$password = "1234";
$dbname = "gos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$e_name = mysqli_real_escape_string($conn, $_REQUEST['e_name']);
$salary = mysqli_real_escape_string($conn, $_REQUEST['salary']);
$e_id = mysqli_real_escape_string($conn, $_REQUEST['e_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee_profile (e_name, salary, e_id) VALUES ('$e_name', '$salary', '$e_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>