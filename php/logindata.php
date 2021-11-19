<?php
session_start();
$_SESSION["username"] = "";
$_SESSION["userid"] = "";
?>
<?php

// add File DatBase :
include('./Connection.php');
// Sinup Function
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$email = $mydata['lemail'];
$password = $mydata['lpassword'];
//  echo $email;
//  echo $password;
if (!empty($email) && !empty($password)) {
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select *from sinup where email = '$email' ";
    $query = mysqli_query($conn, $sql);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $email_count = mysqli_num_rows($query);
    if ($email_count) {
        $email_pass = mysqli_fetch_array($query);
        $user_Pass = $email_pass['password'];
        $_SESSION['userid'] = $email_pass['id'];
        $_SESSION['username'] = $email_pass['name'];
        $_SESSION['useremail'] = $email_pass['email'];
        $_SESSION['usermobile'] = $email_pass['mobile'];
        // $pass_decode=password_verify($password,$user_Pass);
        if ($password == $user_Pass) {
            //echo "Loginv now";
?>
            <script>
                location.replace("./UserPage/userpage.php");
            </script>
<?php
        } else {
            echo "Enter Password Incorrect ";
        }
    } else {
        echo "Enter Email ID Not Match :";
    }
} else {
    echo "Enter Email ID & Password";
}
