<?php

	include("connect.php"); 	
	

	$query = $handler->query("SELECT * FROM `tempLog` ORDER BY `timeStamp` DESC");
?>

<html>
   <head>
      <title>Sensor Data</title>
   </head>
<body>
   <h1>Temperature / Humidity sensor readings</h1>

   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;Temperature 1&nbsp;</td>
			<td>&nbsp;Humidity 1&nbsp;</td>
		</tr>

      <?php 
		     while($data=$query->fetch(PDO::FETCH_OBJ)) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $data->timeStamp, $data->temperature, $data->humidity);
		     }

      ?>

   </table>
</body>
</html>
