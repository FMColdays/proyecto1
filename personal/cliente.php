<?php
    session_start();
    if(isset($_SESSION['nickname']) != "cliente"){
        header("Location: ../login/index.php");
    }
?>

<?php include("../cabecera.php");?>

<h1>Catálogo de Productos</h1>

    
<table>
  <tr>
    <th>Imagen</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Existencias</th>
  <tr>
    <td><img src="../imagenes/leche.jpg" width="100" height="75"></td>
    <td>Producto 1</td>
    <td>$10.00</td>
    <td>dsadjsadjasjdajsdjsadjsadjsadsjada</td>
    <td>⬆️</td>
</tr>
</table>
    
</body>
</html>
