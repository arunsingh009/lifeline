<?php

$host="localhost";
$user="root";
$pass="";
$dbname="lifeproject";

$conn=new mysqli($host,$user,$pass,$dbname);
if($conn->connect_error){
    die ("Connection Failed");
}
?>