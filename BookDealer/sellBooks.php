<?php
							// include('image_upload/upload.php')
?>
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
		<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<div data-role="page" id="sellBooks">
			<header data-role="header">
				<h1>Add Books</h1>
				<a href="mainScreen.php" data-icon="bars" data-iconpos="notext" class="ui-nodisc-icon transparentIcon">Back</a>
			</header>
			<div data-role="main" class="ui-content">
				<form > 
				<!-- these are bits and peices for the upload image code.. still learning -->
					<!-- enctype="multipart/form-data" action="sellBooks.php" id="uploadForm" data-ajax="false" method="POST" -->

				<!-- 	<input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
					<label for="file">Select Picture To Upload</label>

					<input type="file" id="file" name="userfile" onchange="getFileName(this.files)"/> -->
					
						<script >
							// function getFileName(fileName){
							// 	alert(fileName[0].name);
							// 	alert(fileName[0].size);
							// }

						</script>
					<input type="text" data-clear-btn="true" name="bookT" id="sb_bookT" placeholder="Title" required=""/>					
					<input type="text" data-clear-btn="true" name="price" id="sb_price" placeholder="Price" required=""/>
					<input type="text" data-clear-btn="true" name="isbn" id="sb_isbnNum" placeholder="isbnNumber" required=""/>
					<label for="sb_quality">Book Quality:</label>
					<select name="quality" id="sb_quality" class="select " value="Condition">
						<option value="1">New</option>
						<option value="2">Good</option>
						<option value="3">Fair</option>
						<option value="4">Poor</option>
					</select>
					<div class="sell_btnpos">
						<button type="submit" data-mini="false">Submit</button>
					</div>
				
				</form>

			</div>
		</div>
		
	</body>
</html>

