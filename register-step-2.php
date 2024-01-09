<?php
session_start();
$server_name="localhost";
$username="root";
$password="";
$database_name="new-app";


$conn = new mysqli($server_name,$username,$password,$database_name);
if ($conn-> connect_error)
{
    die("connection failed:");
}
    $email = $_SESSION["email"];
    $name = $_SESSION["name"];
    $password = $_POST["password"];

    $qry = "insert into user(name,email,password) values('$name','$email','$password')";

    $result = $conn->query($qry);

    if ($result ==FALSE){
        die("Query failed".$conn->error);
    }
    else{
        echo "<h3>Registration successfull ,<a href='/application/'>Go back and login.</a></h3> ";
    }
?>