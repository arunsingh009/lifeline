<?php
session_start();
$_SESSION["userid"] = " ";
$_SESSION["username"] = " ";
$_SESSION['useremail'] = "";
$_SESSION['usermobile'] = "";
session_destroy();
// header('location:index.php');
?>
<script>
    location.replace("../index.php");
</script>
<?php
