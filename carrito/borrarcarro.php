<?php 
session_start(); 
unset($_SESSION['carrito']);
header("Location: ../dashboard/cliente.php?p=no");
?>