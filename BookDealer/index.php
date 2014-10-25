<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>App</title>

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
		<link rel="stylesheet" type="text/css" href="css/purple.min.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<script src="js/main.js"></script>
	</head>
	<body>
		<div data-role="page" id="loginPage">
			<header data-role="header">
				<h1>Welcome</h1>
			</header>
			
			<!-- Logo added here  -->
			<div data-role="main" class="ui-content">
				<div id="indx_head">
					<h3>Sign In!</h3>
				</div>
				<form class="login1" action="" method="post">
					<input type="text" data-clear-btn="true" name="username" id="lp_username" placeholder="Username" required="">
					<input type="password" data-clear-btn="true" name="pwd" id="lp_pswrd" placeholder="Password" required="">
					<div id="frgt_psw">
						<a href="forgotpassword.php">Forgot Password?</a>
					</div>
				</form> 
				<div class="ui-grid-a front1">
					<!-- When linking the rel="external" should be used when linking to an external site or domain 
					Use the data-ajax="false" when linking to a page within the same domain -->
					<div data-role="popup" id="i_fail">
						<p>Please fill out the form to continue</p>
					</div>
					<div class="ui-block-b "><!--data-rel="popup"  data-transition="pop" href="#i_fail" -->
						<a href="mainScreen.php" data-ajax="false" >
							<div class="button-wrap">
								<button class="ui-btn ui-corner-all">Sign in</button>
							</div>
						</a>
					</div>
				
					<div class="index_Text">
						<h4>Not a Member?</h4>
					</div>
					<div class="ui-block-a"><div class="button-wrap"><a href="signup.php" data-transition="flip"  ><button class=" ui-btn ui-corner-all">Get Started!</button></a></div></div>
					
				</div>

			</div>
		</div>
		
	</body>
</html>