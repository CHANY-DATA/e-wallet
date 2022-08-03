<?php
ob_start();
//require 'session.php';
?>

               <?php
								$get_id = (int) $_GET['transfer'];
								$sql = "SELECT * FROM users WHERE id = '".$load['id']."'";
								if ($result = mysqli_query($con, $sql))
								{
     
								?>
									<?php

                                    while ($row = mysqli_fetch_row($result))
								{
										$id=$row['0'];
										
										?>
			<form id="request" class="main_form" method="post" action="user_pan.php?transfer_1" enctype="multipart/form-data">
                  <div class="row">
						<input class="contactus" readonly="readonly" type="hidden" name="acc_balance" value="<?php printf("%s", $row[7]); ?>">
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="Enter Balance to transfer" type="text" name="term" required/> 
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="Enter Receiver account" type="text" name="acc_number" required/> 
                     </div>
                     <div class="col-sm-12">
                        <input type="submit" class="send_btn" name="cash" value="SUBMIT">
                     </div>
                  </div>
               </form>

			<?php	

									}	
							
							 mysqli_free_result($result);
								}
								
							mysqli_close($con);
							
	
							?>
