<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php
	$usuarios = $servidor->get_info_user();
?>
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<h3 class="text-success"><center><b>POLICLINICO 25 HORAS</b></center></h3>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->

		<!-- BEGIN PAGE TOP -->
		<div class="page-top">

			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile"><label id="nombre-usuario"></label></span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
						<img alt="" class="img-circle" src="<?php print_r(ROOT_FRAMEWORK) ?>/assetssssssssss/layouts/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a data-toggle="modal" data-target="#actualizarDatos">
								<i class="icon-user"></i>DATOS</a>
							</li>
							<!-- <li>
								<a data-toggle="modal" data-target="#cambioPassword">
								<i class="icon-lock"></i>CONTRASEÑA</a>
							</li> -->
							<li class="divider">
							</li>
							<li>
								<a href="?s=Salir" >
								<i class="icon-key"></i> CERRAR SESION</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- INICIO DEL CONTENIDO-->
<div class="page-container">
		<!-- INICIO DEL MENU -->
		<div class="page-sidebar-wrapper">

			<div class="page-sidebar navbar-collapse">

				<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

					<li class="start <?php if($var_sesion == 'BusquedaHistoria' || $var_sesion == 'AgregarHistoria') echo 'active'; ?>">
						<a href="javascript:;">
						<i class="icon-home"></i>
						<span class="title">MENU PRINCIPAL</span>
						<span class="arrow <?php if($var_sesion == 'BusquedaHistoria' || $var_sesion == 'AgregarHistoria') echo 'open'; ?>"></span>
						</a>
						<ul class="sub-menu">
							<li class="<?php if($var_sesion == 'BusquedaHistoria') echo 'active'; ?>">
								<a href="?s=BusquedaHistoria">
								<i class="icon-magnifier"></i>BUSCAR</a>
							</li>
							<li class="<?php if($var_sesion == 'AgregarHistoria') echo 'active'; ?>">
								<a href="?s=AgregarHistoria">
									<i class="icon-plus"></i>AGREGAR <span id="cantidad" class="badge badge-success"> 0 </span></a>
							</li>
						</ul>
					</li>

					</li>
					<li class="last <?php if($var_sesion == 'UsuarioClinica') echo 'active'; ?>">
						<a href="javascript:;">
						<i class="icon-wrench"></i>
						<span class="title">CONFIGURACION</span>
						<span class="arrow <?php if($var_sesion == 'UsuarioClinica') echo 'open'; ?>"></span>
						</a>
						<ul class="sub-menu">
							<li class="<?php if($var_sesion == 'UsuarioClinica') echo 'active'; ?>">
								<a href="?s=UsuarioClinica"><i class="icon-user"></i> USUARIOS
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>
		</div>
		<!-- FIN DEL MENU-->
