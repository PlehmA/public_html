<?php 
session_start();
if (isset($_POST['enviar']))
 {
 $nombre = $_POST['nombre'];
 $mail = $_POST['mail'];
 $motivo = $_POST['motivo'];
 $header = "From: " . $mail . " \r\n"; $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; $header .= "Mime-Version: 1.0 \r\n"; $header .= "Content-Type: text/plain";
 $mensaje = "Este mensaje fue enviado por " . $nombre . ", de la motivo " . $motivo . " \r\n";
 $mensaje .= "Su e-mail es: " . $mail . " \r\n";
 $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
 $mensaje .= "Enviado el " . date('d/m/Y', time());
 $para = "polachgg@gmail.com";
 $asunto = "Pedido de Informacion de:" . $nombre;
 if (($nombre=="") or ($mail=="") or ($_POST['mensaje']=="")) 
 { 
 echo "Error en el envio del correo"; 
 } 
 else 
 { 
 	mail($para, $asunto, utf8_decode($mensaje), $header);
  	header('Location:correo_enviado.html');
 } // Trabajo con la base de datos. 
if (isset($_POST['novedades']))
	{ 
		header('Content-Type: text/html;charset=UTF-8'); 
		include_once ('includes/bdd.php');
		 $con = crearConexion();
		 $con->set_charset("utf8");
		 $sql="insert into contactos (nombre,motivo,email) values (?,?,?)";
		 $stmt = $con->prepare($sql);
		 /* Bind parameters. Tipos: s = string, i = integer, d = double, b = blob */ 
		$stmt->bind_param('sss', $nombre,$motivo,$mail);
		$stmt->execute();
		$stmt->close();
		$con->close();
		} // if checkbox novedades 
	}
?>