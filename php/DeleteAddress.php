<?php
include('./Connection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];

if (!empty($id)) {

    $sql = "DELETE FROM address WHERE addressid={$id}";
    if ($conn->query($sql) == TRUE) {
        echo "Address Delete Scuuessfully!!";
    } else {
        echo "Address UnScuuessfully";
    }
} else {
    echo "Fill All Fields";
}
