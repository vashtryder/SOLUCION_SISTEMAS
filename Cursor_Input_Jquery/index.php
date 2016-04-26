<!DOCTYPE html>
<html>
<head>
	<title>MOVER EL CURSO CON JQUERY</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	


</head>
<body>

	<table>
		<thead>
			<th>LISTA NOMBRES </th>
			<th><center> Campo 1</center></th>
			<th><center> Campo 2</center></th>
			<th><center> Campo 3</center></th>
			<th><center> Campo 4</center></th>	
		</thead>
		<tbody>

		<?php  
			$i=1;
				while ( $i <= 50) { 
					$i++; ?>
			<tr>
				<td> APEMATERNO APEPATERNO, NOMBRES</td>
				<td><input type="text" tabindex="<?php echo $i+pow(10, 2); ?>" data-id="<?php echo $i; ?>"/></td>
				<td><input type="text" tabindex="<?php echo $i+pow(10, 3); ?>" data-id="<?php echo $i; ?>"/></td>
				<td><input type="text" tabindex="<?php echo $i+pow(10, 4); ?>" data-id="<?php echo $i; ?>"/></td>
				<td><input type="text" tabindex="<?php echo $i+pow(10, 5); ?>" data-id="<?php echo $i; ?>"/></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>



	<script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
	<script src="js/funcion.script.js" type="text/javascript"></script>

</html>