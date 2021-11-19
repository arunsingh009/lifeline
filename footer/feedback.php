<?php
include('../php/Connection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$name = $mydata['fname'];
$email = $mydata['email'];
$age = $mydata['age'];
$mobile = $mydata['phone'];
$mes = $mydata['mes'];
//$react= $mydata['react'];
$sql = "INSERT INTO feedback(name,email,age,phone,message) VALUES('$name','$email',$age,$mobile,'$mes')";
if ($conn->query($sql) == TRUE) {
        echo json_encode(array("message"=>"Thank You ! ".$name.""));
    } else {
        echo json_encode(array("message"=>"You can give feedback after some time ! "));
    }
mysqli_close($conn);
?>