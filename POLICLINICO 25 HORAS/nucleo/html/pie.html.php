<div class="modal fade" id="cambioPassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">ACTUALIZAR CONTRASE&Ntilde;A</h4>
			</div>
			<div class="modal-body">
                <form class="password-form">
						<div class="input-icon">
                        	<input type="hidden" class="form-control" name="iddocente" value="">
							<i class="icon-lock"></i><input type="password" name="password1" class="form-control" placeholder="PASSWORD">
						</div>
						<br>
						<div class="input-icon">
							<i class="icon-lock"></i><input type="password" name="password2" class="form-control" placeholder="REPITA PASSWORD">
						</div>
          				</div>
						<div class="modal-footer">
							<input type="button" class="btn purple btn-sm" id="btncambiar" value="CAMBIAR">
						</div>
                </form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="actualizarDatos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="text-primary" align="center">ACTUALIZAR DATOS PERSONALES </h4>
			</div>
			<?php list($ID, $NOMBRES, $USER, $PASS) = $usuarios; ?>
			<form class="data-form">
				<div class="modal-body">
					<div class="form-body">
						<div class="form-group">
							<label class="control-label">Usuario: </label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-lock"></i>
								</span>
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="hidden" name="id" value="<?php echo $ID ?>">
									<input class="form-control" name="nombres" value="<?php echo $USER ?>"  readonly>
									<input type="hidden" name="password" value="">
								</div>
							</div>
						</div>

	                    <div class="form-group">
							<label class="control-label">Nombre Usuario: </label><span class="required">* </span>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-user"></i>
								</span>
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" id="nombrex" class="form-control" name="nombres" value="<?php echo $NOMBRES; ?>"  />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
				  	<input type="submit" class="btn purple btn-sm" value="ACTUALIZAR">
				</div>
            </form>
		</div>
	</div>
</div>

<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 <?php echo date('Y') ?> &copy; Solución Sistemas
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<!-- BEGIN CORE PLUGINS -->
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>

<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_FRAMEWORK) ?>/assets/layouts/global/scripts/jquery-ui.min.js" type="text/javascript" ></script>
<!-- END THEME LAYOUT SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php print_r(ROOT_JS) ?>/sistema.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_JS) ?>/login.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_JS) ?>/historia.js" type="text/javascript"></script>
<script src="<?php print_r(ROOT_JS) ?>/user.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->

