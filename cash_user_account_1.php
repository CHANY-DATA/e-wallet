<?php
ob_start();
//require 'session.php';
?>

               <?php
								include_once "connection.php";

								$nid = mysqli_real_escape_string($con, $_POST['nid']);
								$acc_number = mysqli_real_escape_string($con, $_POST['acc_number']);

								$sql = "SELECT * FROM users WHERE nid='$nid' AND acc_number='$acc_number'";
								if ($result = mysqli_query($con, $sql))
								{
     
								

                                    while ($row = mysqli_fetch_row($result))
                                    	
								{
										?>
			<form id="request" class="main_form" method="post" action="admin_pan.php?cash_user_account_2" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" readonly="readonly" type="text" name="nid" value="<?php printf("%s", $row[3]); ?>"> 
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" readonly="readonly" type="text" name="acc_number" value="<?php printf("%s", $row[6]); ?>">
						<input class="contactus" readonly="readonly" type="hidden" name="acc_balance" value="<?php printf("%s", $row[7]); ?>">
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="Account Balance" type="text" name="term"> 
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
