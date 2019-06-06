<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'anastasia_ch_16');
	mysqli_query($con, "UPDATE tweet SET text='" .$_POST['text']. "' WHERE id='". $_POST['id'] ."' ");
	header('Location: http://aa/aaa/index.php');
?>