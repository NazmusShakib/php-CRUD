<?php
include('db-connect.php');

$get_data =  $_POST['id'];


$jsonData = json_decode($get_data,true);

/*print_r($jsonData);
exit();*/

$length = count($jsonData);

echo "<hr/>";

for ($i=0; $i<$length; $i++) {

/*echo $jsonData[$i]['value'];*/

/*exit();*/

$j=0;
	$upQuery = "UPDATE menus
				SET name = '{$jsonData[$i]['value']}', parent_id=0, position = 0, menu_order = {$i}
				WHERE menu_id = {$jsonData[$i]['id']}";

	//echo "Parent Query: ".$upQuery."<br/>";

		$per = mysqli_query($link, $upQuery);
		if(!$per){
			//mysqli_close($link);
			echo $upQuery;
			die("\nqqInsert Failed");	
		}else{
			//mysqli_close($link);
			echo ("qqInsert Successfully.");
		}

  	if(isset($jsonData[$i]['children'])){
  		foreach ($jsonData[$i]['children'] as $child) {
  			$k=0;
/*  			$upQuery = "INSERT INTO menus (menu_id, name, parent_id, position) VALUES ({$child['id']},'Child of-{$jsonData[$i]['id']}', {$jsonData[$i]['id']}, {$j})";*/

	$upQuery = "UPDATE menus
				SET name = '{$child['value']}', parent_id= {$jsonData[$i]['id']}, position= 1
				, menu_order = {$j} WHERE menu_id = {$child['id']}";

				$per = mysqli_query($link, $upQuery);
				if(!$per){
					//mysqli_close($link);
					//echo $upQuery;
					die("\nInsert Failed+");	
				}else{
					//mysqli_close($link);
					echo ("Insert Successfully.+");
				}

  			//echo "&nbsp;&nbsp;&nbsp;&nbsp; Child Query: ".$upQuery."<br/>";
  			$j++;

		  	if(isset($child['children'])){
		  		foreach ($child['children'] as $baccha) {

/*		  			$upQuery = "INSERT INTO menus (menu_id, name, parent_id, position) VALUES ({$baccha['id']},'Child of-{$child['id']}', {$child['id']}, {$k})";*/

		  			$upQuery = "UPDATE menus
				SET name = '{$baccha['value']}', parent_id= {$child['id']}, position= 2
				, menu_order = {$k} WHERE menu_id = {$baccha['id']}";

					$per = mysqli_query($link, $upQuery);
					if(!$per){
						//mysqli_close($link);
						//echo $upQuery;
						die("\nInsert Failed++");	
					}else{
						//mysqli_close($link);
						echo ("Insert Successfully.++");
					}

		  			//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Child Query: ".$upQuery."<br/>";
		  			$k++;
		  		}
			}

  		}
  }

}

/*$query = "INSERT INTO menus (name, parent_id, order_no) VALUES ('menu_name','{$phone}','{$jsonData[$i]}')";
		// Perform queries 
		$per = mysqli_query($link, $query);
		if(!$per){
			mysqli_close($link);
			echo $query;
			die("\nInsert Failed");	
		}else{
			mysqli_close($link);
			echo ("Insert Successfully.");
		}
*/