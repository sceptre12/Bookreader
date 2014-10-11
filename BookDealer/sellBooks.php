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
		<div data-role="page" id="sellBooks">
			<header data-role="header">
				<h1>Add Books</h1>
				<a href="mainScreen.php" data-icon="bars" data-iconpos="notext" class="ui-nodisc-icon">Back</a>
			</header>
			<div data-role="main" class="ui-content">
				<form>
					
					<input type="text" data-clear-btn="true" name="bookT" id="sb_bookT" placeholder="Title">
					
					<input type="text" data-clear-btn="true" name="price" id="sb_price" placeholder="Price">
					<input type="text" data-clear-btn="true" name="isbn" id="sb_isbnNum" placeholder="isbnNumber">
					<label for="sb_quality">Book Quality:</label>
					<select name="quality" id="sb_quality" class="select " value="Condition">
						<option value="1">New</option>
						<option value="2">Good</option>
						<option value="3">Fair</option>
						<option value="4">Poor</option>
					</select>

				</form>

			</div>
			<footer data-role="footer" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="mainScreen.php" data-icon="check" >Submit</a></li>
					</ul>
					
				</nav>
			</footer>
		</div>
	</body>
</html>

