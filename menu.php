<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php include('db-connect.php'); ?>

<?php
  $query = "SELECT * FROM menus ORDER BY position ASC";
  $exe = mysqli_query($link, $query);

	while($menu = mysqli_fetch_array($exe)){

	  	foreach ($menu as $item){

		    if ($item->parent_id == $parentid) {
		      $result = ; 
		    }
		$result;
 	}
 	}
 	echo $result;
?>

	
</body>
</html>