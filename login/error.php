<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "incorrecto") {
        echo "</br><script> alert('Usuario o contrseña incorrecto'); </script>";
    }
    if ($error == "vacio") {
        echo "<script> alert('No has llenado ningun campo'); </script>";
    }
}
