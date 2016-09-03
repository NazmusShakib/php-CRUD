<?php
	$link = mysqli_connect("127.0.0.1", "root", "1", "recipe");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
?>
