<?php
    session_start();
    $_SESSION["nombre"]=(isset($_POST["nombre"])&&$_POST!="")? $_POST["nombre"]:"Error";
    if($_SESSION["accion"]=="Crear_a")
    {
        
    }
?>