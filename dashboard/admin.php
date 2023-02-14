<?php
session_start();
if(isset($_SESSION['nickname']) != "administrador"){
    header("Location: ../login/index.php");
}
include("../cabecera.php");
include("../navbar.php");
?>

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