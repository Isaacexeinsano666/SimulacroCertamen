<?php
require('conexion.php');
$consulta = "SELECT * FROM peliculas";
$resultado = mysqli_query($conexion,$consulta);
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<nav class="navbar bg-dark p-4" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">📹 Videoclub</span>
  </div>
</nav>
  <body>
<div class="container-fluid p-4 d-flex justify-content-between align-items-center">
    <h1 class="m-0">Listado de películas</h1>
    <a href="formulario_agregar.php" class="btn btn-success">+ Agregar más</a>
</div>
<div class="container-fluid">
    <table class="table p-4">
  <thead>
    <tr>
      <th scope="col" class="table-dark">ID</th>
      <th scope="col" class="table-dark">Titulo</th>
      <th scope="col" class="table-dark">Director</th>
      <th scope="col" class="table-dark">Ano</th>
      <th scope="col" class="table-dark">Genero</th>
      <th scope="col" class="table-dark">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["titulo"]; ?></td>
        <td><?php echo $row["director"]; ?></td>
        <td><?php echo $row["anio"]; ?></td>
        <td><?php echo $row["genero"]; ?></td>
        <td>
        <a  class="btn btn-danger btn-sm" href="eliminar.php?id_enviado=<?php echo $row["id"]; ?>">Eliminar</a>
        </td>
        </tr>
        <?php
    } ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>