<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<?php require_once('resources/header.php'); ?>
<body>
<div class="container">
  <?php require_once('resources/navigation.php');
  
		include_once ('includes/bdd.php');
		$con = crearConexion();
		$con -> set_charset("utf-8");
    #$sql  = "SELECT * FROM farmacias";
    #$stmt = $con -> query($sql);
    #$results = $stmt -> fetch_all();

    $sql = "SELECT * FROM comrap";

    $results = mysqli_query($con, $sql);

    //var_dump($results);

  ?>
  <h1 class="jumbotron text-center animated fadeInLeft">Comidas Rápidas  <i class="fa fa-cutlery" aria-hidden="true" style="color: #9F3A3A;"></i></h1>
  <div class="row table-responsive text-center">
  <table class="table text-center" id="tablita">
  <thead>
    <tr class="animated rotateInDownRight">
      <th>Nombre <i class="fa fa-users pull-right" aria-hidden="true"></i></th>
      <th>Dirección <i class="fa fa-map-marker pull-right" aria-hidden="true"></i></th>
      <th>Teléfono <i class="fa fa-phone pull-right" aria-hidden="true"></i></th>
      <th>Imagen <i class="fa fa-camera pull-right" aria-hidden="true"></i></th>
      <th>¿Donde se encuentra? <i class="fa fa-street-view pull-right" aria-hidden="true"></i></th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_assoc($results)) { ?>
    <tr>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['direccion']; ?></td>
      <td><?php echo $row['telefono']; ?></td>
      <td><img src="<?php echo $row['foto']; ?>" alt="" style="width: 100px; height: 100px; " class="img-rounded img-responsive animated zoomIn center-block"></td>
      <td><a href="<?php echo $row['mapa']; ?>" title="" style="text-decoration: none; color: #fff"><button type="button" class="btn btn-info btn-sm center-block animated fadeInRight" >Mapa</button></a></td>
    </tr>
    <?php }; ?>
  </tbody>
  </table>
  
  </div>
</div>

<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function(){
    $('#tablita').DataTable({
    language: {
        "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(Total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    }
} );
});
</script>

</body>
</html>