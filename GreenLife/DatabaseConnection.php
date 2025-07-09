<?php

$hostname="localhost";
$username="root";
$password="";
$database="greenlife";

$conn= new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
{
die("Connection Failed:".$conn->connect_error);
}
//echo"connection success"
?>