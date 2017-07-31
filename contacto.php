<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('resources/header.php'); ?>
<body>
<div class="container">
  <?php require_once('resources/navigation.php'); ?>
  <section id="principal">
            <h1 class="text-center animated fadeInRightBig">Solicitud de Información</h1>
            <form method="POST" action="send.php" accept-charset="utf-8" class="form-horizontal">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label class="animated fadeInLeft">Nombre : (*) </label></td>
                            <td><input type="text" name="nombre" id="nombre" size="40" required class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label class="animated fadeInLeft">Motivo : </label></td>
                            <td><input type="text" name="empresa" id="empresa" size="30" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label class="animated fadeInLeft">E-Mail : (*)</label></td>
                            <td><input type="text" name="mail" id="mail" size="50" required class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label class="animated fadeInLeft">Consulta : (*)</label></td>
                            <td><textarea rows="20" c ols="60" id="mensaje" name="mensaje" required class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td><input style="float: right" type="checkbox" name="novedades" class="checkbox"></td>
                            <td>¿Desea recibir información como novedades y promociones en su correo electrónico?
                            </td>
                        </tr>
                        <tr>
                            <td><label class="animated fadeInLeft">Ingrese el codigo: (*)</label></td>
                            <?php include_once ('includes/recaptcha.php'); ?>
                            <td><div class="g-recaptcha" data-sitekey="6LczdxQUAAAAAEEprNOhg8rDX3gTPhjX0vq9x3Vj"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="enviar" id="enviar" value="Enviar Solicitud" class="btn btn-info btn-1a:hover animated rotateInDownRight"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>