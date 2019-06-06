<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'anastasia_ch_16');
	mysqli_query($con, "DELETE FROM tweet WHERE id ='" . $_POST['id'] . "' ");
	header('Location: http://aa/aaa/index.php');
 ?>