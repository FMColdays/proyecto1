<?php
session_start();
if (isset($_SESSION['nickname']) != "administrador") {
  header("Location: ../login/index.php");
}
$productos = ["Crassula Perforata", "Arreglo de Suculentas", "Echinocereus Rigidissimus", "Astrophytum Capricorne", "Mammillaria Melaleuca", "Astrophytum Miryostigma"];
$datosVentas = [42, 78, 51, 30, 62, 38];

?>

<!doctype html>
<html lang="en">

<head>
  <title>Administrador</title>
  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</head>


<body>
  <?php include("../navbar.php"); ?>S
  </br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <div class="card">
          <div class="card-header">
            Insertar productos
          </div>
          <div class="card-body">
            <form action="cliente.php" method="POST">
              producto: <input class="form-control" type="text" name="nombre" id=""> </br>
              precio: <input class="form-control" type="text" name="precio" id=""> </br>
              imagen: <input class="form-control" type="file" name="imagen" id=""> </br>
              <input class="btn btn-success" type="submit" value="Agregar">
            </form>
          </div>
        </div>

      </div>

      <div class="col-md-6">

        <div class="card">
          <div class="card-header">
            Productos
          </div>
          <div class="card-body">
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Imagen</th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td scope="row">Leche</td>
                  <td>$20</td>
                  <td><img src="../imagenes/leche.png" width="100" height="75"></td>
                </tr>
                <tr class="">
                  <td scope="row">Papel</td>
                  <td>$10</td>
                  <td><img src="../imagenes/papelB.png" width="100" height="75"></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <canvas id="grafica"></canvas>
    </div>

  </div>
  </div>

  <script>
    let miCanvas = document.getElementById("grafica");

    var chart = new Chart(miCanvas, {
      type: "pie",
      data: {
        labels: ["Leche", "Papel", "Mayonesa", "Jabón"],
        datasets: [{
          label: "Mi grafica de abarrotes",
          backgroundColor: [
            'rgba(163,221,203,0.2)',
            'rgba(232,233,161,0.2)',
            'rgba(230,181,102,0.2)',
            'rgba(229,112,126,0.2)',
          ],
          borderColor: [
            'rgba(163,221,203,1)',
            'rgba(232,233,161,1)',
            'rgba(230,181,102,1)',
            'rgba(229,112,126,1)',
          ],
          borderWidth: 2,
          data: [42, 78, 51, 30]
        }]
      }
    })
  </script>
</body>

</html>