<?php
	include_once('../../conf.ini.php');
	$rows = $historial->set_info_historial($_POST['id']);
	list($ID, $HC, $NOMSENORA, $APELLIDOPATERNOSENORA, $APELLIDOMATERNOSENORA, $FECHA_NACIMIENTOSENORA, $ESTADOCIVILSENORA, $NOMBRESENOR, $APELLIDOPATERNOSENOR, $APELLIDOMATERNOSENOR, $FECHA_NACIMIENTOSENOR, $ESTADOCIVILSENOR) = $rows;
?>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<!-- AGREGAR HISTORIAL CLINICO -->
		<div class="portlet light ">
			<div class="portlet-title">
				 <div class="caption caption-md">
					<span class="caption-subject theme-font-color bold uppercase">HISTORIAL CLINICO: &nbsp; &nbsp; <?php $funcion->imprimir($HC);  ?></span>
				</div>
				<!-- <div class="actions">
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
					</a>
				</div> -->
			</div>
			<div class="portlet-body">

				<!-- INICIO DATOS DEL FORMULARIO-->
<!-- 				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<label class="control-label col-md-6">HITORIAL CLINICO: </label>
					  		<div class="col-md-6">
					  			<input type="text" placeholder="AGREGAR HISTORIAL CLINICO" class="form-control input-md" value="<?php echo $HC;  ?>" readonly>

					  		</div>
					  </div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="form-group">
						  <div class="col-md-4">

						  </div>
						</div>
					</div>
				</div> -->

				<div class="portlet-body">
					<div class="panel-group accordion" id="accordion3">

						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1">
								DATOS DE LA SEÑORA </a>
								</h4>
							</div>
							<div id="collapse_3_1" class="panel-collapse in">
								<div class="panel-body form-horizontal">
											<fieldset >
												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">NOMBRES</label>

												  <div class="col-md-6">
												  <input type="hidden" name="id" value="<?php $funcion->imprimir($ID); ?>">
												  <input id="textinput" type="text" placeholder="" class="form-control input-md" name="nombre1" value="<?php $funcion->imprimir($NOMSENORA) ?>">
												  </div>
												</div>

												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">APELLIDO PATERNO</label>
												  <div class="col-md-6">
												  <input id="textinput"  type="text" placeholder="PATERNO" class="form-control input-md" name="paterno1" value="<?php $funcion->imprimir($APELLIDOPATERNOSENORA); ?>">
												  </div>
												</div>

												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">APELLIDO MATERNO</label>
												  <div class="col-md-6">
												  <input id="textinput"  type="text" placeholder="MATERNO" class="form-control input-md" name="materno1" value="<?php $funcion->imprimir($APELLIDOMATERNOSENORA); ?>">
												  </div>
												</div>


												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">FECHA DE NACIMIENTO</label>
												  <div class="col-md-6">
												  <input id="textinput"  type="date" placeholder="MATERNO" class="form-control input-md" name="fecha1" value="<?php $funcion->imprimir($FECHA_NACIMIENTOSENORA); ?>">
												  </div>
												</div>


												<div class="form-group">
												  <label class="col-md-4 control-label" for="selectbasic">ESTADO CIVIL</label>
												  <div class="col-md-6">
												    <select class="form-control" name="estado1">
												      <option value="SOLTERA" <?php if($ESTADOCIVILSENORA == 'SOLTERA') $funcion->imprimir('selected') ?>>SOLTERA</option>
												      <option value="CASADA" <?php if($ESTADOCIVILSENORA == 'CASADA') $funcion->imprimir('selected') ?>>CASADA</option>
												      <option value="VIUDA" <?php if($ESTADOCIVILSENORA == 'VIUDA') e$funcion->imprimir('selected') ?>>VIUDA</option>
												    </select>
												  </div>
												</div>

											</fieldset>
								</div>
							</div>
						</div>

						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
								DATOS DEL SEÑOR </a>
								</h4>
							</div>
							<div id="collapse_3_2" class="panel-collapse collapse">
								<div class="panel-body form-horizontal">
											<fieldset>
												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">NOMBRES</label>
												  <div class="col-md-6">
												  <input  type="text" placeholder="" class="form-control input-md" name="nombre2" value="<?php echo $NOMBRESENOR; ?>">
												  </div>
												</div>

												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">APELLIDO PATERNO</label>
												  <div class="col-md-6">
												  <input type="text" placeholder="PATERNO" class="form-control input-md" name="paterno2" value="<?php echo $APELLIDOPATERNOSENOR; ?>">
												  </div>
												</div>

												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">APELLIDO MATERNO</label>
												  <div class="col-md-6">
												  <input type="text" placeholder="MATERNO" class="form-control input-md" name="materno2" value="<?php echo $APELLIDOMATERNOSENOR; ?>">
												  </div>
												</div>


												<div class="form-group">
												  <label class="col-md-4 control-label" for="textinput">FECHA DE NACIMIENTO</label>
												  <div class="col-md-6">
												  <input type="date" placeholder="MATERNO" class="form-control input-md" name="fecha2" value="<?php echo $FECHA_NACIMIENTOSENOR ?>">
												  </div>
												</div>


												<div class="form-group">
												  <label class="col-md-4 control-label" for="selectbasic">ESTADO CIVIL</label>
												  <div class="col-md-6">
												    <select class="form-control" name="estado2">
												    	<option value="SOLTERO" <?php if($ESTADOCIVILSENORA == 'SOLTERO') echo 'selected' ?>>SOLTERO</option>
												      	<option value="CASADO" <?php if($ESTADOCIVILSENORA == 'CASADO') echo 'selected' ?>>CASADO</option>
												      	<option value="VIUDO" <?php if($ESTADOCIVILSENORA == 'VIUDO') echo 'selected' ?>>VIUDO</option>
												    </select>
												  </div>
												</div>

											</fieldset>
								</div>
							</div>
						</div>
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3">
								DATOS DE OTROS HIJOS </a>
								</h4>
							</div>
							<div id="collapse_3_3" class="panel-collapse collapse">
								<div class="panel-body">



								</div>
							</div>
						</div>
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4">
								OTROS DATOS </a>
								</h4>
							</div>
							<div id="collapse_3_4" class="panel-collapse collapse">
								<div class="panel-body">



								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- FIN DATOS DEL FORMULARIO-->
			</div>
		</div>
		<!-- FIN HISTORIAL CLINICO -->
	</div>
</div>
<script type="text/javascript">plugins_sistema.init()</script>
