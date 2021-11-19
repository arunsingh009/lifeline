<?php
// add File DatBase :
include('./Connection.php');
// Sinup Function
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$name = $mydata['name']; 
$mobile = $mydata['mobile'];
$email = $mydata['email'];
$password = $mydata['password'];

if (!empty($name) && !empty($email) && !empty($password)) {
    // 
    //    $pass = password_hash($password, PASSWORD_BCRYPT);
    //    
    $sql = "SELECT `mobile`, `email` FROM `sinup` WHERE `mobile`='" . $mobile . "' OR `email`='" . $email . "'";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        echo "Email or Username already exist";
    } else {
        // system date & Time
        $mydate = date('m/d/Y');
        $mytime = date('H:i:s');
        $sql = "INSERT INTO sinup(name,mobile,email,password,date,time) VALUES('$name','$mobile','$email','$password','$mydate','$mytime' )";

        if ($conn->query($sql) == TRUE) {
            echo "Successful Signup";
        } else {
            echo "Unsuccessful Signup";
        }
    }
} else {
    echo "Please Fill All Information";
}
