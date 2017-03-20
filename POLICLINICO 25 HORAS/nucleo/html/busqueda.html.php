<!-- INICIO DEL CONTENIDO -->
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BUSCAR HISTORIAL CLINICO -->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<span class="caption-subject theme-font-color bold uppercase">BUSCAR HISTORIAL CLINICO</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
								</a>
							</div>
						</div>
						<!-- <div class="portlet-body">
									<div class="form-group">
										<div class="input-icon input-icon-lg right">
											<i class="icon-magnifier"></i>
											<input id="busqueda" type="text" class="form-control input-lg" placeholder="Busca lo que quieras...">
											<input id="state_id" type="hidden">
										</div>
									</div> -->


<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box ">
						<div class="portlet-body">
							<div id="tablaHistorial"></div>
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

<div class="modal fade draggable-modal" id="actualizarHistorial" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	            <h4 class="modal-title">ACTUALIZAR HISTORIAL CLINICO</h4>
	        </div>
	        <form class="update-form" id="update-form">
		        <div class="modal-body"> 
		        	<div class="scroller" style="height:500px" data-always-visible="1" data-rail-visible="1" data-rail-color="red" data-handle-color="blue">
		        		<div id="modalActualizarHistorial"></div>
		        	</div>
		        </div>
		        <div class="modal-footer">
		            <input type="submit" class="btn blue btn-outline" value="ACTUALIZAR">
		        </div>
	        </form>
	    </div>
	    <!-- /.modal-content -->
	</div>