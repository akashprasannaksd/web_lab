<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="new-app";


$conn = new mysqli($server_name,$username,$password,$database_name);
if ($conn-> connect_error)
{
    die("connection failed:");
}
    $email = $_POST["email"];
    $password = $_POST["password"];
    $qry = "select * from user where email='$email' AND password='$password'";

    $result = $conn->query($qry);

    if ($result ==FALSE){
        die("Query failed".$conn->error);
    }
    if($result->num_rows>0){
        $user_data=$result->fetch_assoc();
        echo ("Welcome , ".$user_data['name']."<br>");
        echo ("Email :".$user_data['email']."<br>");
        setcookie("name",$user_data['name'],time()+3600,"/application");
        setcookie("id",$user_data['id'],time()+3600,"/application");
        setcookie("email",$user_data['email'],time()+3600,"/application");
    }
    else{
        echo "invalid username or password";
    }
?>