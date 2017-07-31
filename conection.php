<?php
include_once ('includes/bdd.php');
header('Content-Type: text/html;charset-UTF-8');
$username=$_POST['username'];
$password=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="SELECT username, password FROM usuarios WHERE username= '$username' AND password='$password'";
$result=$con->query("SELECT id_usuario FROM usuarios");
$row=$result->fetch_assoc();
if ($row['id_usuario']==0)
{
   echo "<script>alert ('¡Ingreso invalido al sistema!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
}
   else
         {
            session_start();
            $_SESSION['time']=date('H:i:s');
            $_SESSION['username']=$username;
            $_SESSION['logeado']=true;
            header("location:welcome.php");
         };   
?>