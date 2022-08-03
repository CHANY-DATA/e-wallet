<?php
ob_start();
//require 'session.php';
?>

               <form id="request" class="main_form" method="post" action="admin_pan.php?cash_user_account_1" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="National ID" type="text" name="nid" required/> 
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="User Account" type="text" name="acc_number" required/> 
                     </div>
					 
                     <div class="col-sm-12">
                        <input type="submit" class="send_btn" name="check" value="SUBMIT">
                     </div>
                  </div>
               </form>
