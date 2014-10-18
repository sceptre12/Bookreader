<?php
    include('authenticate.php');

    if(!isset($_SESSION['is_logged_in'])) {
        header("location:../index.php?status=failed");
    } 
    elseif(isset($_SESSION['is_logged_in'])) {
        header("location:../index.php?status=success");
    }
    else{
    	header("location:index.php");
    }
?>