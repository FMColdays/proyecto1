
<header>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">
        <strong><?php echo $_SESSION['nickname'] ?></strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarHeader">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            
          </li>
        </ul>
        
          <a href="../compras/carrito.php" class="btn btn-primary  me-1">Carrito</a>
          <a href="../login/cerrar.php" class="btn btn-secondary" style = "background-color:red; border-color:red">Salir</a>
      </div>

    </div>
  </div>
</header>