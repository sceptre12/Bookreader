<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1"/>
		<title>App</title>

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
		<link rel="stylesheet" type="text/css" href="css/Blue.min.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
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
				<a href="index.php" data-icon="back" data-iconpos="notext" class="ui-nodisc-icon">Back</a>
			</header>
			<div data-role="main" class="ui-content">
				<form>
					<label for="su_usrname">Username:</label>
					<input type="text" data-clear-btn="true" name="username" id="su_usrname" placeholder="Username">
					<label for="su_psrwd">Password:</label>
					<input type="password" data-clear-btn="true" name="pwd" id="lp_pswrd" placeholder="Password" >
					<label for="su_psrwd">Confirm Password:</label>
					<input type="password" data-clear-btn="true" name="pwd" id="su_pswrd" placeholder="Password" >
					<label for="su_email">Email:</label>
					<input type="text" data-clear-btn="true" name="email" id="su_email" placeholder="Email">
					<!-- <div data-role="fieldcontain"> -->
						<select name="school_list" class="select" value="Select School">
						<option value="1">Random School</option>
						<option value="2">Random School2</option>
						<option value="3">Random School3</option>
						<option value="4">Random School4</option>
						<option value="5">Random School5</option>
						<option value="6">Random School6</option>
						<option value="7">Random School7</option>
					</select>
					<!-- </div>		 -->			
				</form>
			</div>
			<footer data-role="footer" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="index.php" data-icon="check" >Submit</a></li>
					</ul>
					
				</nav>
				<!-- <a href="index.html" data-transition="slide" data-direction="reversed" id="sp_submit"><button data-role="button">Submit</button></a> -->
			</footer>				
			
		</div>
		
		
	</body>
</html>
