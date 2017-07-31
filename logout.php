<?php 
	session_start(); 
	$_SESSION = array(); 
	session_destroy(); 
	echo "<script>alert ('¡Ah salido satisfactoriamente del sistema!')</script>";
	echo "<script>alert ('¡Vuelva pronto!')</script>";
    echo "<script>window.location.assign('index.php')</script>";

?>