<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: inicio.php');
    }else{
        header('location: login.php');
    }


?>