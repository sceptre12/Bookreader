<!DOCTYPE html>
<?php
		mysql_connect("localhost", "root", "blackbox0");
		mysql_select_db("BookDealer");
		$result = mysql_query("select * from Schools order by name");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1"/>
		<title>App</title>

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
		<link rel="stylesheet" type="text/css" href="css/purple.min.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<script type="text/javascript">
		// Attach the external college list file
		// $( document ).on( "pageinit", "#sp_Main", function() {
		// 	$( "#autocomplete" ).on( "listviewbeforefilter", function ( e, data ) {
		// 		var $ul = $( this ),
		// 			$input = $( data.input ),
		// 			value = $input.val(),
		// 			html = "";
		// 		$ul.html( "" );
		// 		if ( value && value.length > 2 ) {
		// 			$ul.html( "<li><div class='ui-loader'><span class='ui-icon ui-icon-loading'></span></div></li>" );
		// 			$ul.listview( "refresh" );
		// 			$.ajax({
		// 				url: "http://gd.geobytes.com/AutoCompleteCity",
		// 				dataType: "jsonp",
		// 				crossDomain: true,
		// 				data: {
		// 					q: $input.val()
		// 				}
		// 			})
		// 			.then( function ( response ) {
		// 				$.each( response, function ( i, val ) {
		// 					html += "<li>" + val + "</li>";
		// 				});
		// 				$ul.html( html );
		// 				$ul.listview( "refresh" );
		// 				$ul.trigger( "updatelayout");
		// 			});
		// 		}
		// 	});
		// });
		</script>
	</head>
	<body>
		<div data-role="page" id="sp_Main">
			<header data-role="header">
				<h1>Sign Up</h1>
				<a href="index.php" data-icon="back" data-iconpos="notext" class="ui-nodisc-icon transparentIcon">Back</a>
			</header>
			<div data-role="main" class="ui-content">
				<form name="signupform" method="post" action="classes/add-user.php" role="form" target="_self">
					<label for="username">Username:</label>
					<input type="text" data-clear-btn="true" name="username" id="username" placeholder="Username" required="">
					<label for="password">Password:</label>
					<input type="password" data-clear-btn="true" name="password" id="password" placeholder="Password" required="">
					<label for="pwd">Confirm Password:</label>
					<input type="password" data-clear-btn="true" name="pwd" id="pwd" placeholder="Password" required="">
					<label for="email">Email:</label>

					<input type="text" data-clear-btn="true" name="email" id="email" placeholder="Email" required="email">
					
						<select name="school_list" class="select" value="Select School" >
							<option value="1">Select a School</option>
						<?php
								$count=1;
								while ($row = mysql_fetch_object($result)) {
									$count++;			
									print "<option value='$count'>".$row->name."</option>>".PHP_EOL;
								}
						?>
					</select>
					<div class="sell_btnpos">
						<button type="submit" data-mini="false">Submit</button>
					</div>
				</form>
			</div>
			<!-- I'm taking this part out please add what needs to be added to the button in the form -->
			<!-- <footer data-role="footer" data-position="fixed">
				<nav data-role="navbar">
					<ul id="vlap">
						<div data-role="popup" id="i_fail">
						<p>Please fill out the form to continue</p>
						</div>
						<li><a href="javascript: submitform()" data-icon="check" >Submit</a></li>
					</ul>
					
				</nav>
				
			</footer>	 -->			
			
		</div>
	</body>

<script type="text/javascript">
// this js might not be needed 
	// function submitform(){
	// 	document.signupform.submit();
	// }
</script>


</html>
