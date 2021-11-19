<?php
session_start();
$Userid = $_SESSION["userid"];

// add File DatBase :
include('./Connection.php');
// Sinup Function
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
// 
$country = $mydata['country'];
$state = $mydata['state'];
$city = $mydata['city'];
$address = $mydata['address'];
$pincode = $mydata['pincode'];
$homeno = $mydata['homeno'];

if (!empty($country) && !empty($state) && !empty($city) && !empty($address) && !empty($pincode) && !empty($homeno)) {
    //
    $sql = "INSERT INTO address(Userid,country,state,city,address,pincode,homeno) VALUES('$Userid','$country','$state','$city','$address','$pincode','$homeno' )";

    if ($conn->query($sql) == TRUE) {
        echo "Successful Save Address";
    } else {
        echo "Unsuccessful Address";
    }
} else {
    echo "Please Fill All Information";
}
