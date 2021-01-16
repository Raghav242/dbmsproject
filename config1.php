<?php
	$conn = new mysqli("localhost","root","","dbmsproject");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>