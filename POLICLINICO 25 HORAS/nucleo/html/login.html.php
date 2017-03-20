<!-- BEGIN LOGIN -->
 <body class=" login">
        <div class="logo">

        </div>
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" id="frmlogin">
                <h3 class="form-title"><center>POLICLINICO 25 HORAS</center></h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Ingrese su Usuario y Contraseña. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Usuario</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username" value=""/> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value=""/> </div>
                </div>
                <div class="form-actions">
                    <label></label>
                    <button type="submit" class="btn green pull-right btn-outline"> Acceder </button>
                </div>
            </form>
            <!-- END LOGIN FORM -->