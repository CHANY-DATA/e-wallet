
	<?php 
							require_once("connection.php");
							?>

<?php
					if(isset($_POST['send']))
					{
						$names = mysqli_real_escape_string($con, $_POST['names']);
						$phone = mysqli_real_escape_string($con, $_POST['phone']);
						$nid = mysqli_real_escape_string($con, $_POST['nid']);
						$uname = mysqli_real_escape_string($con, $_POST['uname']);
						$pswd = mysqli_real_escape_string($con, $_POST['pswd']);
						$acc_number = mysqli_real_escape_string($con, $_POST['acc_number']);
						$acc_balance = mysqli_real_escape_string($con, $_POST['acc_balance']);
						

						if (empty($names) || empty($phone))
						{
							echo'<br><font style="color:red;font-size:18px">Back to fill all fields!<br></font>';
							
						}
						else
						{
						
							$query="insert IGNORE into `users` (`id`,`names`,`phone`,`nid`,`uname`,`pswd`,`acc_number`,`acc_balance`) values ('','$names','$phone','$nid','$uname','$pswd','$acc_number','$acc_balance')";
							mysqli_query($con,$query) or die(mysqli_error($con));
							echo'<font style="color:green;font-size:18px"><center><br>Thank you for Registering a New User!</center><br></font>';
							echo "<a href='admin_pan.php'><br><font size='4px' face='Batang' color='#66cc66'><strong><center>Back to the Admin Panel!</center></strong></font></a>";
						}	
					}
				?>
