
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login to Control Panel</title>
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cmxform.css">
	<link rel="stylesheet" href="js/lib/validationEngine.jquery.css">
	
	<!-- Scripts -->
	<script src="js/lib/jquery.min.js" type="text/javascript"></script>
	<script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>	
	<script src="js/login_validator.js"></script>	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>
<!--    Only Index Page for Analytics   -->
<?php include_once("analyticstracking.php") ?>
	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width"> </div> <!-- end full-width -->	
	
	</div> 
	<!-- end top-bar -->
		
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">

				<h1>Alexandra Keen </h1>
				<h5>inspired By nature Driven by Passion </h5>
			
			</div> <!-- login-intro -->
    		<a href="#" id="company-branding" class="fr"  target="blank"><img src="#" alt="Point of Sale" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
        <h1 style="margin-left: 440px; font-family: Georgia;     font-weight: bold; font-size:20px; color: #0060BF">Login Here&nbsp;&nbsp;&nbsp;</h1>
	
	<!-- MAIN CONTENT -->

	<div id="content">

		<form action="checklogin.php" method="POST" id="login-form" class="cmxform" autocomplete="off">
		
			<fieldset>
				<p> <?php 
				
				if(isset($_REQUEST['msg']) && isset($_REQUEST['type']) ) {
					
					if($_REQUEST['type'] == "error")
						$msg = "<div class='error-box round'>".$_REQUEST['msg']."</div>";
					else if($_REQUEST['type'] == "warning")
						$msg = "<div class='warning-box round'>".$_REQUEST['msg']."</div>"; 
					else if($_REQUEST['type'] == "confirmation")
						$msg = "<div class='confirmation-box round'>".$_REQUEST['msg']."</div>"; 
					else if($_REQUEST['type'] == "information")
						$msg = "<div class='information-box round'>".$_REQUEST['msg']."</div>"; 	
						
					echo $msg;						
				}
				?>
				
				</p>
				<p>
                    <label>Username</label>
                    <input type="text" id="login-username" class="round full-width-input" placeholder="Enter Username" name="username" autofocus  />
				</p>

				<p>
                    <label>Password</label>
                    <input type="password" id="login-password" name="password" placeholder="Enter Password" class="round full-width-input"  />
				</p>
				    <a href="forget_pass.php" class="button ">Forgot your password?</a>
				
				<input type="submit" class="button round blue image-right ic-right-arrow" name="submit" value="LOG IN" />
			</fieldset>

			<br/>
                        
        </form>

    </div> <!-- end content -->

	<!-- FOOTER -->
	<div id="footer">
		<p> &copy;Copyright 2017</p>

	</div> <!-- end footer -->       
       
</body>
</html>