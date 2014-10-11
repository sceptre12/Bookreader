<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>App</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
		<link rel="stylesheet" type="text/css" href="css/Blue.min.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<div data-role="page" id="MainScreen">
			<header data-role="header">
				<h1>Home Screen</h1>
				
				<a href="#info" data-icon="gear" data-iconpos="notext" class="ui-btn-right ui-nodisc-icon ui-icon-delete">Contact Us</a>
			</header>
			<div data-role="main" class="ui-content pos_main">
					<div class="ui-grid-solo">
    					<div class="ui-block-a"><a href="userProfile.php"  class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-user ui-nodisc-icon">Profile</a></div>
					</div>
					<div class="ui-grid-solo">
    					<div class="ui-block-a">
    						<a href="sellBooks.php" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-shop ui-nodisc-icon">Sell
    						</a>
    					</div>
					</div>
					<div class="ui-grid-solo">
    					<div class="ui-block-a">
    						<a href="browseLib.php" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-tag ui-nodisc-icon">Buy</a></div>
					</div>
			</div>
		</div>
		<div data-role="page" id="info">
			<div data-role="panel" id="i_contact" data-position="right" data-display="overlay">
				<header data-role="header">
					<h1>Logo</h1>
				</header>
				<div data-role="main" class="ui-content">
					<h4>How can we help?</h4>					
					<h5>Number</h5>
					<p>555-555-5555</p>
					<h5>Email</h5>
					<p>yolo@yolo.com</p>
					<h5>Address</h5>
					<address>1930 nw 99av apt999 Miami, Fl 33087</address>

				</div>
			 		<a href="#info" data-rel="close"><button class="ui-btn" >Close</button></a> 	
			</div>
			<div data-role="panel" id="i_About" data-position="right" data-display="overlay">
				<header data-role="header">
					<h1>Logo</h1>
				</header>
				<div data-role="main" class="ui-content">
					

				</div>
			 		<a href="#info" data-rel="close"><button class="ui-btn" >Close</button></a> 	
			</div>
			<header data-role="header" >
				<h1>Help</h1>
				<a href="#MainScreen" data-icon="back" data-iconpos="notext" class="ui-nodisc-icon">Back</a>
			</header>
			<div data-role="main" class="ui-content">
				<ul data-role="listview">
					<li><a href="#i_About">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#i_contact">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>