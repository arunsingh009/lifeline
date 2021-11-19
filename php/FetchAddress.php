<?php
//
session_start();
$Userid = $_SESSION["userid"];

include('./Connection.php');
// retrieve 
$sql = "SELECT *FROM address where Userid='$Userid'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

//... php to json

echo  json_encode($data);
