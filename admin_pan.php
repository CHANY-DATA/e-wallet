<?php
ob_start();
require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>e-Wallet</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php">Welcome</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
						<ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="admin_pan.php?create_user_account">Create Account</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" href="admin_pan.php?cash_user_account">Cashing Account</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" href="admin_pan.php?admin_account">My Account</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="acc_setting.php">Account Setting</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" href="logout.php">Logout</a>
                              </li>
                           </ul>
                           <div class="Call"><span class="yellow"><?php echo $load['uname']; ?></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg" valign="top">
                  <h1>e-Wallet</h1>
                  <p>You are welcome, here you can manage your account.</p>
               </div>
            </div>
            <div class="col-md-6">
			 <?php			 
		if(isset($_GET['create_user_account']))
		{
			include("create_user_account.php");
		}
		elseif(isset($_GET['cash_user_account']))
		{
			include("cash_user_account.php");
		}
		elseif(isset($_GET['admin_account']))
		{
			include("admin_account.php");
		}
		elseif(isset($_GET['cash_user_account_1']))
		{
			include("cash_user_account_1.php");
		}
		elseif(isset($_GET['cash_user_account_2']))
		{
			include("cash_user_account_2.php");
		}
		elseif(isset($_GET['insert']))
		{
			include("insert.php");
		}
		else
		{
			include("pages/home.php");
		}
		?>
            </div>
         </div>
      </section>
      <!-- end banner -->
      
	  
	  
	  
	  
	  
	  
      
	  <!--  footer -->
      <footer>
         <div class="footer">
            <div class="copyright">
                     <div class="col-md-12">
                        <p>&copy 2022 - e-Wallet</a></p>
                     </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

