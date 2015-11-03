<?php

$is_login_form = 1;
require_once '../includes/session_check.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Frontdesk Editorial Planeta</title>
    <?php require '../includes/head.html.php'; ?>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <img src="<?=R?>img/logo.png" alt="Inicio de sesión">
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                            	<?php if($_GET['error'] || $_GET['logged_out']): ?>
                            		<div class="alert alert-danger alert-dismissable text-center">
                            			<?php
                            			if($_GET['error'] == 3)
                            				echo 'Tu sesión ha finalizado.<br>Vuelve a loggearte.';
                                        elseif($_GET['logged_out'])
                                            echo 'Has finalizado tu sesión exitosamente.';
                            			else
                            				echo 'Usuario o contraseña incorrectos.<br>Vuelve a intentarlo.';
                            			?>
                            		</div>
                            	<?php endif; ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre de usuario" name="usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                    <input class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.html.php'; ?>

</body>

</html>
