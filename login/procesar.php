<?php
$error;
session_start();
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    if($nickname == "cliente" && $password == "entrar"){
        $error = "OK"; 
        $_SESSION['nickname'] = $nickname;
        header("Location: ../dashboard/cliente.php");

    }else if($nickname == "administrador" && $password == "admin"){
        $error = "OK";
        $_SESSION['nickname'] = $nickname;
        header("Location: ../dashboard/admin.php");

    }else{
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }

}else{
    $error = "vacio";
    header("Location: index.php?error=$error");
}
?>