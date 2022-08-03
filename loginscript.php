<?php
ob_start();
require 'connection.php'; 
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 

$myusername = mysqli_real_escape_string($con,$_POST['uname']);
$mypassword = mysqli_real_escape_string($con,$_POST['pswd']);

$sql = "SELECT * FROM account WHERE uname = '$myusername' AND pswd = '$mypassword'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
$_SESSION['login_admin'] = $myusername;

header("location:admin_pan.php");
}else {
$error = "Your Login Name or Password is invalid";
}
}
ob_end_flush();
?>




