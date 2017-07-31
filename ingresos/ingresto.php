<?php 
session_start();
if ($_SESSION['logeado']) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Clasificados-SM</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Pagina en la que todos podran encontrar un servicio" content="Compra, Ventas, Canjes, Etc.">
    <meta name="Andres Plehm" content="Clasificados">
    <link rel="icon" href="../images\escudo_sm.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rambla:400i,700i" rel="stylesheet">
</head>
<body>
<div class="container">
	<form class="form-horizontal" action="restoadd.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Formulario Restaurantes</legend>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Direccion</label>  
  <div class="col-md-4">
  <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
  <div class="col-md-4">
  <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">Foto</label>  
  <div class="col-md-4">
  <input id="foto" name="foto" type="text" placeholder="images-row" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mapa">Mapa</label>  
  <div class="col-md-4">
  <input id="mapa" name="mapa" type="text" placeholder="Mapa" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success center-block">Enviar</button>
  </div>
</div>

</fieldset>
</form>

<a href="../welcome.php" title="" class="btn btn-primary pull-right">A inicio</a>
</div>
	

	<script src="./js/navbar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}else{
	echo "hola";
}
?>