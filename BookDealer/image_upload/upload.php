<?php
 include ('db_config.php');

 // $uploaddir = getcwd();

 // $uploadfile = $uploaddir . basename($_FILE['userfile']['name']);

 // $filename = $_files['userfile']['name'];

 // if(move_uploaded_file($_FILE['userfile']['tmp_name'], $uploadfile)){

 	
 // }


  $file = $_FILES['userfile']['tmp_name'];

  if(!isset($file))
  	echo "Please Select an image."
?> 