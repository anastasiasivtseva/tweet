<?php
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'anastasia_ch_16');
	mysqli_query($conn, "INSERT INTO tweet(logo, title, text, img) VALUES ('avatar.jpg', 'wertyuidf cvbnml', '". $_POST['text'] . "', 'habr.jpg ') ");
	header('Location: http://aa/aaa/index.php');
?>