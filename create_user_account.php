<?php
ob_start();
//require 'session.php';
?>



               <form id="request" class="main_form" method="post" action="admin_pan.php?insert" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Agent Full Names" type="text" name="names" required/> 
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Telephone" type="text" name="phone" required/> 
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="National ID" type="text" name="nid" maxlength="16" required/> 
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Username" type="text" name="uname" required/> 
                     </div>
					  <div class="col-md-12">
                        <input class="contactus" readonly="true" placeholder="Password" type="password" name="pswd" value="0000"> 
                     </div>
					 <div class="col-md-12 ">
                        <input class="contactus" placeholder="Agent Account" type="text" name="acc_number" required/> 
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Account Balance" type="text" name="acc_balance" min="1000"> 
                     </div>
                     <div class="col-sm-12">
                        <input type="submit" class="send_btn" name="send" value="SUBMIT">
                     </div>
                  </div>
               </form>
 
