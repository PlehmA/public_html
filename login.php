<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('resources/header.php'); ?>
<body style="background-image: url('images/monumento-san-martin.jpg');min-height: 100%;background-position: center;background-size: cover;">
<div class="container">
  <?php require_once('resources/navigation.php'); ?>
	  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="conection.php">
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuario">               
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" class="btn active" style="margin-left: 230px; background-color: #610E7C; color: white;">
                                    </div>
                                </div>  
                            </form>     



                        </div>                     
                    </div>  
        </div>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
</body>
</html>