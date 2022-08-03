<?php
ob_start();
//require 'session.php';
?>

               <?php
                        include_once "connection.php";

               if(isset($_POST['cash']))
               {
                  $nid = mysqli_real_escape_string($con,$_POST['nid']);
                  $acc_number = mysqli_real_escape_string($con,$_POST['acc_number']);
                  $acc_balance1 = mysqli_real_escape_string($con,$_POST['term']);
                  $acc_balance2 = mysqli_real_escape_string($con,$_POST['acc_balance']);
                  
                  if (empty($acc_balance))
                  {
                     echo'<br><font style="color:red;font-size:18px">Please fill in the Balance!<br></font>';
                     echo "<a href='user_pan.php'><br><font size='4px' face='Batang' color='#66cc66'><strong><center>Back to the user Panel!</center></strong></font></a>";
                  }
                     else
                  {
                  $x=$acc_balance2 - $acc_balance1;

                  $query="UPDATE users SET  acc_balance=$x WHERE nid='$nid' AND acc_number='$acc_number'";
                  mysqli_query($con,$query) or die(mysqli_error($con));

               
                     echo'<font style="color:green;font-size:18px"><center><br>Thank you!</center><br></font>';
                     echo "<a href='user_pan.php'><br><font size='4px' face='Batang' color='#66cc66'><strong><center>Back to the user Panel!</center></strong></font></a>";


      
                  }  
               }
               
               ?>
