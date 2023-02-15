<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <?php include('error.php'); ?>

  <section class="vh-100" style="background-image: url(https://img.freepik.com/fotos-premium/mano-que-sostiene-telefono-inteligente-sobre-fondo-tienda-supermercado-desenfoque_7190-459.jpg?w=1060);">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://img.freepik.com/vector-gratis/mujer-comestibles-supermercado_24877-49907.jpg?w=740&t=st=1676334606~exp=1676335206~hmac=6c51a3a9a3d877a37ed47e5a5f2952e6154e5cff437750cdae377c9a6d66c347" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="procesar.php" method="POST">

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h5>

                    <div class="form-outline mb-4">
                      <input type="text" name="nickname" class="form-control form-control-lg" placeholder="Usuario" />
                      <label class="form-label" for="form2Example17"></label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" />
                      <label class="form-label" for="form2Example27"></label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" style="background-color:blue; border-color:black; color:white">Acceder</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>