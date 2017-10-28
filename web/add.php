<?php
   	include("connect.php");
   	
	@$temp1=$_GET["temp1"];
	@$hum1=$_GET["hum1"];

	$query = "INSERT INTO `tempLog` (`temperature`, `humidity`) 
		VALUES ('".$temp1."','".$hum1."')"; 
   
	 
		$handler->exec($query);
?>
