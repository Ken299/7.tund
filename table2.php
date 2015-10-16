<?php
	
	require_once("functions.php");
	
	//kas kasutaja tahab taastada, kas aadressireal on undo
	if(isset($_GET["undo"])){
		
		deleteCar2($_GET["undo"]);
			
	}
	
	$car_list = getCarData2();
	//var_dump($car_list);

?>
<table border=1 >
	<tr>
		<th>id</th>
		<th>User ID</th>
		<th>Auto nr märk</th>
		<th>Värvus</th>
		<th>Taasta</th>
	</tr>

	<?php
	
		//iga massiivis oleva elemendi kohta
		//count($car_list) - massiivi pikkus
		for($i = 0; $i < count($car_list); $i++)
		{
			echo "<tr>";
			
			echo "<td>".$car_list[$i]->id."</td>";
			echo "<td>".$car_list[$i]->user_id."</td>";
			echo "<td>".$car_list[$i]->number_plate."</td>";
			echo "<td>".$car_list[$i]->color."</td>";
			echo "<td><a href='?undo=".$car_list[$i]->id."'>Taasta</a></td>";
			
			echo "</tr>";
		}
	
	
	?>
	<a href="table.php"> <button>Pealeht  </button> </a>
</table	>