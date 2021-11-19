<?php
include('./Connection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$name = $mydata['sfname'];
$email = $mydata['semail'];

$sql = "INSERT INTO subscriber(name,email) VALUES('$name','$email')";
if ($conn->query($sql) == TRUE) {
        echo json_encode(array("message"=>"Thank You ! ".$name.""));
    } else {
        echo json_encode(array("message"=>"You can give feedback after some time ! "));
    }
mysqli_close($conn);
?>