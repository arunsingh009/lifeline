<?php
session_start();
$sid = $_SESSION["userid"];
$semail = $_SESSION["useremail"];
$smobile = $_SESSION["usermobile"];

?>
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
$DOB = $mydata['DOB'];
$gender = $mydata['gender'];

// check function 
function CheckSame($conn, $sid,  $semail, $smobile, $name, $mobile, $email, $password, $DOB, $gender)
{
    // 
    if (!empty($name) && !empty($email) && !empty($password) && !empty($DOB) && !empty($gender)) {
        //    
        if ($smobile == $mobile && $email = $semail) {
            //    $pass = password_hash($password, PASSWORD_BCRYPT);  
            $sql = " UPDATE  sinup SET name='$name', gender='$gender',DOB='$DOB', password='$password' WHERE id='$sid'  ";
            if ($conn->query($sql) == TRUE) {
                echo "Successful UpDate";
            } else {
                echo "Unsuccessful UpDate";
            }
        } else {

            $sql = "SELECT `mobile`, `email` FROM `sinup` WHERE `mobile`='" . $mobile . "' OR `email`='" . $email . "'";
            $result = $conn->query($sql);
            if ($result->num_rows) {
                echo "Email or Username already exist";
            } else {
                //    $pass = password_hash($password, PASSWORD_BCRYPT);
                $sql = " UPDATE  sinup SET name='$name', mobile='$mobile', email='$email', gender='$gender',DOB='$DOB', password='$password' WHERE id='$sid'  ";
                if ($conn->query($sql) == TRUE) {
                    echo "Successful UpDate";
                } else {
                    echo "Unsuccessful UpDate";
                }
            }
        }
    } else {
        echo "Please Fill All Information";
    }
}

CheckSame($conn, $sid,  $semail, $smobile, $name, $mobile, $email, $password, $DOB, $gender);
