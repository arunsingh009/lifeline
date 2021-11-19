<?php
session_start();
 $id = $_SESSION['userid'];
?>
<?php
include('./Connection.php');
// retrieve 
$sql = "SELECT sinup where id=$id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
?>
            <script>
                console( <?php  echo $id ;?>);
                console( <?php  echo $row ;?>);
            </script>
<?php
echo  json_encode($data);
