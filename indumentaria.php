<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<?php require_once('resources/header.php'); ?>
<body>
<div class="container">
  <?php require_once('resources/navigation.php'); ?>
  
  <?php
		include_once ('includes/bdd.php');
		$con = crearConexion();
		$con -> set_charset("utf-8");
    #$sql  = "SELECT * FROM hospitales";
    #$stmt = $con -> query($sql);
    #$results = $stmt -> fetch_all();
    $per_page = 5;

    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    }else{
      $page = 1;
    }
    
    $start = ($page - 1) * $per_page;

    $sql = "SELECT * FROM indumentaria LIMIT $start, $per_page";

    $results = mysqli_query($con, $sql);




    //var_dump($results);

  ?>
  <h1 class="jumbotron text-center animated fadeInLeft">Indumentarias  <i class="ion-tshirt-outline"></i></h1>
  <div class="row table-responsive text-center">
  <table class="table text-center" id="table">
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
  <div>
    <?php 
    $sql = "SELECT * FROM indumentaria";

    $results = mysqli_query($con, $sql);

    $total_regs = mysqli_num_rows($results);

    $total_pages = ceil($total_regs / $per_page);

    echo "<ul class='pager'>";
    echo "<li><a href='indumentaria.php?page=1'>".'Primera'."</a></li>";
    echo "<li><a href='indumentaria.php?page=$total_pages'>".'Ultima'."</a></li>";
    echo "</ul>";
    echo "<nav aria-label='Page navigation' id='div1'>";
    echo "<ul class='pager'>";

    for ($i = 1; $i<=$total_pages; $i++) {
      echo "<li><a href='indumentaria.php?page=".$i."'>".$i."</a></li>";
    }

    echo "</ul>";
    echo "</nav>";
    ?>
    
  </div>
  </div>
</div>

<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
</body>
</html>