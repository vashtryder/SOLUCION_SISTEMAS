<?php
	include_once('../../conf.ini.php');
	$return_arr         = array();
	$row                = $historial->get_datos_historial();
	$row_array['id']    = $row[0];
	$row_array['value'] = utf8_encode($row[1]." - ".$row[2]." ".$row[3]." ".$row[4]);
	array_push($return_arr,$row_array);
	print(json_encode($return_arr));
?>