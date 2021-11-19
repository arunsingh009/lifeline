<?php




include('./Connection.php');

$query="SELECT *FROM serviceproviders";
$result=mysqli_query($conn,$query);
if($result){
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);
mysqli_free_result($result);
}else{
    echo json_encode(array("message"=>"Record not found"));
}

mysqli_close($conn);


?>