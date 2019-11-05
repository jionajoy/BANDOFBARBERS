<?php 
 $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
$data3 = $connection->query("SELECT * FROM slot WHERE slot.user_id='' AND slot.salon_id = 19" );
 

if ($data3 ->num_rows >0){
	
	$row = $data3->fetch_assoc();
	echo $row['avail'];
}