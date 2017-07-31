<?php 
if (isset($_POST)) {
	header('Content-Type: text/html;charset=utf-8');
	include_once ('../includes/bdd.php');
	$con = crearConexion();
	$con -> set_charset("utf-8");
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$foto=$_POST['foto'];
	$mapa=$_POST['mapa'];
	$sql = 'INSERT INTO comrap(nombre,direccion,telefono,foto,mapa) VALUES (?,?,?,?,?)';
	$stmt=$con->prepare($sql);
  	$stmt->bind_param('sssss', $nombre, $direccion, $telefono, $foto, $mapa);
  	$stmt->execute();
  	$con->close();
  	echo "<script>alert('Ingreso correcto');</script>";
  	header('Location:ingcomrap.php');
  	

}
else{
echo "¡No se conecto correctamente!";
header('Location:login.php');
}
?>
