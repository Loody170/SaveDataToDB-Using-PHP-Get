<?php
error_reporting(0); 
//this commented line here is the same result using post method, in case you want to try it
//$number = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);

$number = $_GET["number"];
$int = (int)$number;


$host = "localhost";
$dbname = "Numbers_DB";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
    die("connection eror: " . mysqli_connect_error());
}

$sql = "INSERT INTO integers (Number) VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "i", $int);

mysqli_stmt_execute($stmt);

echo "Record has been saved.";
?>
