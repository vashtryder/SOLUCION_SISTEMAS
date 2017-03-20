<?php
	include_once('../../conf.ini.php');
 	$rs_historial = $historial->get_info_historial();
?>
<table style="font-size:19px;" class="tabla table ">
	<thead>
	<tr>
		<th>
			<center>Nro.</center>
		</th>
		<th>
			<center>HC</center>
		</th>
		<th>
			 <center>NOMBRES SEÑORA</center>
		</th>
		<th>
			 <center>NOMBRE SEÑOR</center>
		</th>
		<th>
			 <center><span class="label label-sm label-success">OPCIONES</span></center>
		</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rs_historial as $rows) { ?>
		<?php list($ID, $HC, $NOMSENORA, $APELLIDOPATERNOSENORA, $APELLIDOMATERNOSENORA, $NOMBRESENOR, $APELLIDOPATERNOSENOR, $APELLIDOMATERNOSENOR) = $rows; ?>
		<tr class="odd gradeX">
			<td>
				<center><?php $funcion->imprimir($ID) ?></center>
			</td>
			<td>
				<center><?php $funcion->imprimir($HC) ?></center>
			</td>
			<td>
				 <center><?php $funcion->imprimir($APELLIDOPATERNOSENORA." ".$APELLIDOMATERNOSENORA.", ".$NOMSENORA); ?></center>
			</td>
			<td>
				<center><?php $funcion->imprimir($APELLIDOPATERNOSENOR.", ".$APELLIDOMATERNOSENOR.", ".$NOMBRESENOR);  ?></center>
			</td>
			<td>
				<center>
					<a onclick="historial_script.verModalHistorial(<?php $funcion->imprimir($ID) ?>)" class="btn btn-outline btn-circle yellow btn-sm">ACTUALIZAR </a> &nbsp; &nbsp;
					<a onclic="historial_script.delete(<?php $funcion->imprimir($ID) ?>)" class="btn btn-outline btn-circle red btn-sm" >ELIMINAR </a>
				</center>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<script type="text/javascript">plugins_sistema.init();</script>

