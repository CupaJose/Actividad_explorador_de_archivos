<?php
    session_start();
    $_SESSION["nombre_n"]=(isset($_POST["nombre_n"])&&$_POST!="")? $_POST["nombre_n"]:"Error";
    $_SESSION["nombre_v"]=(isset($_POST["nombre_v"])&&$_POST!="")? $_POST["nombre_v"]:"Error";

    if(!file_exists("./registro.txt")){
       $registro = fopen("./registro.txt", "x+");
    }else{
       $registro = fopen("./registro.txt", "a+");
    }

    fwrite($registro, $_SESSION["user"]." de la casa de los ".$_SESSION["casa"]);

    if($_SESSION["accion"]=="Crear_a")
    {
        fwrite($registro, ' a creado el archivo con el nombre "'.$_SESSION["nombre_n"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        fopen($_SESSION["nombre_n"], "x+");
    }
    if($_SESSION["accion"]=="renombrar_a")
    {
        fwrite($registro, ' a renombrado el archivo con el nombre "'.$_SESSION["nombre_v"].'" a "'.$_SESSION["nombre_n"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        rename($_SESSION["nombre_v"],$_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="eliminar_a")
    {
        fwrite($registro, ' a eliminado el archivo con el nombre "'.$_SESSION["nombre_v"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        unlink($_SESSION["nombre_v"]);
    }
    if($_SESSION["accion"]=="Crear_c")
    {
        fwrite($registro, ' a creado el directorio con el nombre "'.$_SESSION["nombre_n"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        mkdir($_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="renombrar_c")
    {
        fwrite($registro, ' a renombrado el directorio con el nombre "'.$_SESSION["nombre_v"].'" a "'.$_SESSION["nombre_n"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        rename($_SESSION["nombre_v"],$_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="eliminar_c")
    {
        fwrite($registro, ' a eliminado el directorio con el nombre "'.$_SESSION["nombre_v"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
        rmdir($_SESSION["nombre_v"]);
    }
    rewind($registro);
    while(!feof($registro)){
    echo fgets($registro);
    echo "<br>";
    }
?>