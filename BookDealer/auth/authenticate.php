<?php
	session_start();
	$_SESSION['username'] = $_POST['username'];

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		mysql_connect("107.170.131.108", "root", "blackbox0");
		mysql_select_db("BookDealer");

		$username = mysql_real_escape_string($_POST['username']);
    	$password = mysql_real_escape_string($_POST['password']);

    	$result = ("SELECT * FROM users WHERE username = '$username' AND password = sha1('$password')");

    	if(mysql_num_rows($result) > 0) {
      	$_SESSION['is_logged_in'] = 1;
    }
    if(!isset($_SESSION['is_logged_in'])) {
    header("location:login-failed.php");
  	} 
  	else {
    header("location:../index.php");
  	}
}
?>