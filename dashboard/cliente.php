<?php
    session_start();
    if(isset($_SESSION['nickname']) != "cliente"){
        header("Location: ../login/index.php");
    }
    include("../cabecera.php");
    include("../navbar.php");
?>

<!--Carrito 1-->
<div class="container mt-5">
  <div class="row justify-content-center">

      <div class="card m-4" style="width: 18rem">
        <form id= "formulario" name= "formulario1" method="POST" action="../compras/carrito.php">
            <input name="precio" type="hidden" id="precio" value="22"/>
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
