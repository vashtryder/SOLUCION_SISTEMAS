<?php
	list($ID, $NOMBRES, $USER, $PASS) = $usuarios;
?>
<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BUSCAR HISTORIAL CLINICO -->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<span class="caption-subject theme-font-color bold uppercase">USUARIO ADMINISTRADOR DEL SOFTWARE</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
								</a>
							</div>
						</div>
						<div class="portlet-body">

<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box ">
						<div class="portlet-body">

							<table style="font-size:19px;" class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr>
									<th>
										<center>USER</center>
									</th>
									<th>
										 <center>NOMBRES</center>
									</th>
									<th>
										 <center>CONTRASEÑA</center>
									</th>
									<th>
										 <center><span class="label label-sm label-success">OPCIONES</span></center>
									</th>
								</tr>
								</thead>
								<tbody>
									<form class="user-form">
										<tr class="odd gradeX">
											<td>
												<center><?php echo $USER ?></center>
											</td>
											<td>
												 <center>
												 <input id="textinput" name="nombres" type="text" placeholder="NOMBRES COMPLETOS" class="form-control input-md" value="<?php echo $NOMBRES ?>"> 
												 <input name="id" type="hidden" value="<?php echo $ID ?>">
												 </center>
											</td>
											<td>
												<center><input id="textinput" name="password" type="password" placeholder="PASSWORD" class="form-control input-md" value="<?php echo $PASS ?>"></center>
											</td>
											<td>
												<center>
												<table>
													<tr>
														<td><input type="submit" class="btn btn-sm btn-circle btn-outline yellow" value="ACTUALIZAR"></td>
													</tr>
												</table>
												</center>			
											</td>
										</tr>
									</form>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>


						</div>
					</div>
					<!-- BUSCAR HISTOTIAL CLINICO-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- FIN DEL CONTENIDO -->