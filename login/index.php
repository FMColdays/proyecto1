<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">

            <div class="row">
                <div class="col-md-4">
            </div>
                <div class="col-md-4">
                </br></br></br>
                <div class="card">
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">

                    <form action="procesar.php" method="POST">

                    <label for="nickname">Usuario</label>
                    <input class= "form-control" type="text" name="nickname"><br/>

                    <label for="password">Contraseña</label>
                    <input class= "form-control" type="password" name="password"><br/>

                    <input class= "btn btn-success" type="submit" value="Acceder"><br/>

                    </form>

                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>           
        </div>
                <div class="col-md-4">
        </div>
    </div>
</div>

<?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == "incorrecto"){
                echo "</br><script> alert('Usuario o contrseña incorrecto'); </script>";
            }
            if($error == "vacio"){
                echo "<script> alert('No has llenado ningun campo'); </script>";
            }
        }
?>

</body>
</html>