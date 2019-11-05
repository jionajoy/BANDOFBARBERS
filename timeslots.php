<?php
$start = "08:00";
$time_end = "17:00";
$time_start = strtotime($start);
$time_end = strtotime($time_end);

while($time_start <= $time_end){
  $someArr[] = date("H:i",$time_start)."\n";
  $time_start = strtotime('+60 minutes',$time_start);
  $length = count($someArr);
	
}
for ($i = 0; $i < $length; $i++) {
		echo "<table>";
	echo "<input type='checkbox' name='time[]' value='$someArr[$i]'>$someArr[$i]<br>";
	echo "</table>";
}



?>
	  <br>
	  <input type="submit" name="submit" class="btn btn-info" style="align-content: center" ></input>