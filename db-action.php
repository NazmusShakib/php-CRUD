<?php

include('db_connection.php');

$get_data =  $_POST['id'];


$jsonData = json_decode($get_data,true);

$length = count($jsonData);

for ($i=0; $i<$length; $i++) {
  print $jsonData[$i].'<br>';
}


/*exit();
for ($i=0; $i<$arr; $i++) { 
	echo $jsonData[$i]['id'].;
}*/

/*print_r ($jsonData) ;*/




/*for($i=1; $i<=4; $i++){
	echo "<pre>";
	print_r(json_decode($get_data[$i]['id']));
	echo "</pre>";
}*/