<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>App</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<div data-role="page">
			<div data-role="main" class="ui-content">
				<form>
					<label for="fgP_email" class="p_lbl">RECOVER PASSWORD</label>
					<input type="text" data-clear-btn="true" name="email" id="fgP_email" placeholder="Email">
				</form>
				<p>
					Enter Your email address and we'll send you a link that'll allow you to change your password. Problem? Contact Support.
				</p>				
				
			</div>
			<footer data-role="footer" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li>
							<a href="index.php">Submit</a>
						</li>
					</ul>
				</nav>			
			</footer>
		</div>
	</body>
</html>	