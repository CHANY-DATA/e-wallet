               <div class="col-md-6">
               <form id="request" class="main_form" method="post" action="" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="New Password" type="text" name="new_pswd" required/> 
                     </div>
					 <div class="col-sm-12">
                        <input type="submit" class="send_btn" name="update" value="UPDATE">
                     </div>
                  </div>
               </form>
            </div>
			   <?php
								include_once "connection.php";

					if(isset($_POST['update']))
					{
						$pswd = mysqli_real_escape_string($con,$_POST['new_pswd']);
						

						if (empty($pswd))
						{
							echo'<br><font style="color:red;font-size:18px">Please fill in the Balance!<br></font>';
							echo "<a href='admin_pan.php'><br><font size='4px' face='Batang' color='#66cc66'><strong><center>Back to the Admin Panel!</center></strong></font></a>";
						}
							else
						{

						$query="UPDATE account SET  pswd=$new_pswd";
						mysqli_query($con,$query) or die(mysqli_error($con));

							echo'<font style="color:green;font-size:18px"><center><br>Thank you!</center><br></font>';
							echo "<a href='admin_pan.php'><br><font size='4px' face='Batang' color='#66cc66'><strong><center>Back to the Admin Panel!</center></strong></font></a>";

		
						}	
					}
					
					?>
