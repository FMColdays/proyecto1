<?php
session_start();
if(isset($_SESSION['nickname']) != "administrador"){
    header("Location: ../login/index.php");
}
?>

<?php include("../cabecera.php");?>

<!--Cabecera-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">Administrador</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">

            <a class="nav-link active" href="../login/cerrar.php" aria-current="page">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</br>
<!--FinCabecera-->



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
                    <input class="btn btn-success" type = "submit" value="Agregar">
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
                      <td><img src="../imagenes/lala.png" width="100" height="75"></td>
                    </tr>
                    <tr class="">
                      <td scope="row">Papel</td>
                      <td>$10</td>
                      <td><img src="../imagenes/papel.png" width="100" height="75"></td>
                    </tr>
                  </tbody>
                </table>

              </div>
            
          </div>
      </div>
    </div>
    
  </div>
</div>
</body>
</html>