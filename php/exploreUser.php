<?php

include('../php/Connection.php');
       
 if(isset($_POST['serv']) && $_POST['serv']!==""){
     $serv=$_POST['serv'];
     $sql="select *from serviceproviders where service='$serv'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
     echo json_encode($row);
     mysqli_free_result($result);
 }else if(isset($_POST['city']) && $_POST['city']!==""){
    $city=$_POST['city'];
    $sql="select *from serviceproviders where city like '$city%'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($row);
    mysqli_free_result($result);
 }else if(isset($_POST['money']) && $_POST['money']!==""){
     $mn=$_POST['money'];
     $sql="select *from serviceproviders where price<='$mn'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($row);
    mysqli_free_result($result);
 }
else{

    $sql="select *from serviceproviders";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($row);
    mysqli_free_result($result);
}

mysqli_close($conn);

?>


