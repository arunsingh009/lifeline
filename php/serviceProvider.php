<?php
include('./Connection.php');
// $data = stripslashes(file_get_contents("php://input"));
// $mydata = json_decode($data, true);
$name = $_POST['fname'];
$exp = $_POST['company'];
$email = $_POST['email'];
$mobile = $_POST['phone_number'];
$gvt = $_FILES['govtid']['name'];
$service = $_POST['service'];
$city=$_POST['city'];
$doc = $_FILES['expdoc']['name'];
$image=$_FILES['image']['name'];
$price=$_POST['pr'];
// $filename = $_FILES['video_file']['name'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
// // if ($ext !== 'gif' || $ext !== 'png' || $ext !== 'jpg') {
// //     echo 'error';
// // }


if (!empty($name) && !empty($email) && !empty($mobile) && !empty($exp) && !empty($gvt) && !empty($service) && !empty($doc) && !empty($image) && !empty($city) && !empty($price)) {

  $target_dir = "upload/";
  $target_file1 = $target_dir . basename($gvt);
  $target_file2 = $target_dir . basename($doc);
  $target_file3 = $target_dir . basename($image);

  // Select file type
  $FileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
  $FileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
  $FileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("pdf");
  $extensions_arr2 = array('jpg','png');

  $sql = "select email from serviceproviders where email='$email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($result);
  if ($row == 1) {
    echo json_encode(array("message" => "User Already Exist", "code" => 0));
  } else {

    // Check extension
    if (in_array($FileType1, $extensions_arr) && in_array($FileType2, $extensions_arr) && in_array($FileType3,$extensions_arr2)) {
      
  $gid=rand().".".$FileType1;
  $eid=rand().".".$FileType2;
  $img= rand().".".$FileType3;

      // Upload file
      if (move_uploaded_file($_FILES['govtid']['tmp_name'], $target_dir . $gid) && move_uploaded_file($_FILES['expdoc']['tmp_name'], $target_dir . $eid) && move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $img)) {

        // Insert record
        $sql2 = "INSERT INTO serviceproviders(fname,image,experience,email,mobile,govtid,service,city,expdocument,price) VALUES('$name','$img','$exp','$email',$mobile,'$gid','$service','$city','$eid','$price' )";
        if ($conn->query($sql2) == TRUE) {
          echo json_encode(array("message" => "User Register", "code" => 1));
        } else {
          echo json_encode(array("message" => "User not register", "code" => 2));
        }
      } else {
        echo json_encode(array("message" => "File not upload.."));
      }
    } else {
      echo json_encode(array("message" => "File formate should be pdf or doc"));
    }
  }
} else {
  echo json_encode(array("message" => "All field requires"));
}



mysqli_close($conn);
