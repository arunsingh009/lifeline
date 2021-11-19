<?php
include('./Connection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];

$sql = "SELECT *FROM address WHERE addressid={$id}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo json_encode($row);
