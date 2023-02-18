<?php
session_start();
if (isset($_SESSION['nickname']) != "cliente") {
  header("Location: ../login/index.php");
}
include("../type.php");
if (!isset($_GET['p'])) {
  $carrito_mio = $_SESSION['carrito'];
  $_SESSION['carrito'] = $carrito_mio;

  // contamos nuestro carrito
  if (isset($_SESSION['carrito']) == "") {
    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
      if ($carrito_mio[$i] != NULL) {
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad++;
        $totalcantidad += $total_cantidad;
      }
    }
  }
}
include("../navbar.php");
?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" data-interval="10000">
    <div class="carousel-item active">
      <img src="https://surtitienda.vteximg.com.br/arquivos/banner_ST_marzo2023.png?v=638117303690470000" class="d-block w-100" alt="banner 1">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="https://surtitienda.vteximg.com.br/arquivos/banner_Web_ST_institucionales.png?v=638040448859630000" class="d-block w-100" alt="banner 2">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="https://surtitienda.vteximg.com.br/arquivos/Banner-Afiliate-surtitienda.jpg?v=637580786423130000" class="d-block w-100" alt="banner 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Parte supeiror del carrito-->
<div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Hacemos la suma del carrito-->
        <div class="modal-body">
          <div>
            <div class="p-2">
              <ul class="list-group mb-3">
                <?php
                if (isset($_SESSION['carrito'])) {
                  $total = 0;
                  for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                    if ($carrito_mio[$i] != NULL) {
                ?>
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="row col-12">
                          <div class="col-6 p-0" style="text-align: left; color: #000000;">
                            <h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
                          </div>
                          <div class="col-6 p-0" style="text-align: right; color: #000000;">
                            <span style="text-align: right; color: #000000;">$<?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?></span>
                          </div>
                        </div>
                      </li>
                <?php $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                    }
                  }
                } ?>
                <li class="list-group-item d-flex justify-content-between">
                  <span style="text-align: left; color: #000000;">Total (MXN)</span>
                  <strong style="text-align: left; color: #000000;">
                    <?php
                    if (isset($_SESSION['carrito'])) {
                      $total = 0;
                      for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                        if ($carrito_mio[$i] != NULL) {
                          $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                        }
                      }
                    } else {
                      $total = 0;
                    }
                    echo "$$total" ?>
                  </strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--Botones del carrito-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="../carrito/borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>

<!--Productos-->
<div class="container mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="justify-content: center;">

    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="150.12" />
        <input name="titulo" type="hidden" id="titulo" value="Chocolate" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00075677408137L.jpg" class="card-img-top">
        <div class=" card-body">
          <h5 class="card-title" style="color:red">$150.12</h5>
          <p class="card-text">Chocolate semiamargo Turin Carajillo con relleno 200 g</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="66.00" />
        <input name="titulo" type="hidden" id="titulo" value="Mayonesa" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00750630631756L.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title" style="color:red">$66.00</h5>
          <p class="card-text">Mayonesa Hellmann's ligera con jugo de limón 730 g</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="31.00" />
        <input name="titulo" type="hidden" id="titulo" value="Galletas Principe" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00750303467211L.jpg" class="card-img-top" width="auto">
        <div class="card-body">
          <h5 class="card-title" style="color:red">$31.00</h5>
          <p class="card-text">Galletas Príncipe Marinela con relleno sabor a chocolate 252 g</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="60.00" />
        <input name="titulo" type="hidden" id="titulo" value="Lavatrastes Axion" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00750954607364L.jpg" class="card-img-top" width="auto">
        <div class="card-body">
          <h5 class="card-title" style="color:red">$60.00</h5>
          <p class="card-text">Lavatrastes líquido Axion limón 1.1 l</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="16.00" />
        <input name="titulo" type="hidden" id="titulo" value="Jabón Zote" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00750102600567L.jpg" class="card-img-top" width="auto">
        <div class="card-body">
          <h5 class="card-title" style="color:red">$16.00</h5>
          <p class="card-text">Jabón Zote en barra rosa para lavar 400 g</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
    <div class="card m-4" style="width: 18rem; height: fit-content;">
      <form id="formulario" name="formulario" method="post" action="../carrito/cart.php">
        <input name="precio" type="hidden" id="precio" value="19.00" />
        <input name="titulo" type="hidden" id="titulo" value="Powerade" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="https://res.cloudinary.com/walmart-labs/image/upload/h_259,w_259/v1591796520/gr/images/product-images/img_large/00750105532926L.jpg" class="card-img-top" width="auto">
        <div class="card-body">
          <h5 class="card-title" style="color:red">$19.00</h5>
          <p class="card-text">Bebida para deportistas Powerade sabor moras 500 ml</p>
          <button class="btn btn-success" type="submit" style="background-color:red; border-color:red"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>

</html>