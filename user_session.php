<?php
   require 'connection.php';
   session_start();
   
   $user_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($con,"select uname from users where uname = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['uname'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:index.php");
      die();
   }

   $ses_sql_load = mysqli_query($con,"select * from users where uname = '$login_session'");
   $load = mysqli_fetch_array($ses_sql_load,MYSQLI_ASSOC);
   // replace this with yours
   $id=$load['id'];
   $names=$load['names'];
   $phone=$load['phone'];
   $nid=$load['nid'];
   $uname=$load['uname'];
   $pswd=$load['pswd'];
   $acc_number=$load['acc_number'];
   $acc_balance=$load['acc_balance'];
?>