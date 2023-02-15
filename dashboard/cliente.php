<?php
    session_start();
    if(isset($_SESSION['nickname']) != "cliente"){
        header("Location: ../login/index.php");
    }
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   
    <main>
      <div class="album py-5 bg-light">   
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png"  width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png" width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png" width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png" width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png" width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../imagenes/leche.png" width="100%" height="225"> 
                    <div class="card-body">
                      <h5 class="card-title">Leche</h5>
                      <p class="card-text">$ 22.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-primary">Detalles</a>  
                        </div>
                        <a href="" class="btn btn-success">Agregar</a> 
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>
    </main>
  </body>
</html>
