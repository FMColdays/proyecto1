<?php
    session_start();
    if(isset($_SESSION['nickname']) != "cliente"){
        header("Location: ../login/index.php");
    }
?>

<?php include("../cabecera.php");?>

<?php 
    $carrito=$_SESSION['carrito'];
    $_SESSION['carrito'] = $carrito;

    if(isset($_SESSION['carrito'])){
      for($i=0;$i<=count($carrito)-1;$i ++){
        if($carrito[$i]!=NULL){
          $total_cantidad = $carrito['cantidad'];
          $total_cantidad ++;
          $totalcantidad += $total_cantidad;
        }
      }
    }
?>



<!--Cabecera-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Cliente</a>

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

    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red"><?php $total_cantidad; ?></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</br>
<!--FinCabecera-->

<!-- Modal trigger button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal_cart">
  Carrito
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modal_cart" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <!--empieza-->
          <div class="modal-body">
            <div>
              <div class="p-2">
                <ul class="list-group mb-3">
                  <?php
                  if(isset($_SESSION['carrito'])){
                  $total=0;
                  for($i=0;$i<=count($carrito)-1;$i ++){
                  if($carrito[$i]!=NULL){
                
                ?>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div class="row col-12" >
                      <div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito[$i]['cantidad'] ?> : <?php echo $carrito[$i]['titulo']; // echo substr($carrito[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
                      </div>
                      <div class="col-6 p-0"  style="text-align: right; color: #000000;" >
                      <span   style="text-align: right; color: #000000;"><?php echo $carrito[$i]['precio'] * $carrito[$i]['cantidad'];    ?> €</span>
                      </div>
                    </div>
                  </li>
                  <?php
                  $total=$total + ($carrito[$i]['precio'] * $carrito[$i]['cantidad']);
                  }
                  }
                  }
                  ?>
                  <li class="list-group-item d-flex justify-content-between">
                  <span  style="text-align: left; color: #000000;">Total (EUR)</span>
                  <strong  style="text-align: left; color: #000000;"><?php
                  global $total;
                  if(isset($_SESSION['carrito'])){
                  $total=0;
                  for($i=0;$i<=count($carrito)-1;$i ++){
                  if($carrito[$i]!=NULL){ 
                  $total=$total + ($carrito[$i]['precio'] * $carrito[$i]['cantidad']);
                  }}}
                  echo $total; ?> €</strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      <!--termina-->

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <a type="button" class="btn btn-primary" href="../compras/borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
  const myModal = new bootstrap.Modal(document.getElementById('modal_cart'), options)

</script>l


<!--Carrito 1-->
<div class="container mt-5">
  <div class="row justify-content-center">

      <div class="card m-4" style="width: 18rem">
        <form id= "formulario" name= "formulario" method="POST" action="../compras/carrito.php">
            <input name="precio" type="hidden" id="precio" value="10"/>
            <input name="titulo" type="hidden" id="titulo" value="articulo 1"/>
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <img src = "../imagenes/lala.png" class= "card-img-top" alt="...">
              <div class= "card-body">
                <h5 class="card-title">Leche</h5>
                <p class="card-text">Precio: $22</p>
                <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir carrito</button>
              </div>

        </form>
      </div >
<!--Carrito 2-->
      <div class="card m-4" style="width: 18rem">
        <form id= "formulario" name= "formulario" method="POST" action="../compras/carrito.php">
            <input name="precio" type="hidden" id="precio" value="10"/>
            <input name="titulo" type="hidden" id="titulo" value="articulo 1"/>
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <img src = "../imagenes/papelB.png" class= "card-img-top" alt="...">
              <div class= "card-body">
                <h5 class="card-title">Papel</h5>
                <p class="card-text">Precio: $10</p>
                <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir carrito</button>
              </div>

        </form>
      </div >
<!--Carrito 3-->
      <div class="card m-4" style="width: 18rem">
        <form id= "formulario" name= "formulario" method="POST" action="../compras/carrito.php">
            <input name="precio" type="hidden" id="precio" value="10"/>
            <input name="titulo" type="hidden" id="titulo" value="articulo 1"/>
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <img src = "../imagenes/yogur.png" class= "card-img-top" alt="...">
              <div class= "card-body">
                <h5 class="card-title">Leche</h5>
                <p class="card-text">Precio $22</p>
                <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir carrito</button>
              </div>

        </form>
      </div >
  </div>
</div>
</body>
</html>
