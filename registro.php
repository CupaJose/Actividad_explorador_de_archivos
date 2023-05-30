<?php
    session_start();
    $_SESSION["nombre_n"]=(isset($_POST["nombre_n"])&&$_POST!="")? $_POST["nombre_n"]:"Error";
    $_SESSION["nombre_v"]=(isset($_POST["nombre_v"])&&$_POST!="")? $_POST["nombre_v"]:"Error";

    if($_SESSION["accion"]=="Crear_a")
    {
        if(!file_exists("./".$_SESSION["nombre_n"])){
            $bandera = true;
        }else{
            echo "<h1>El archivo que desea crear, ya existe</h1>";
            $bandera = false;
        }
    }
    if($_SESSION["accion"]=="renombrar_a")
    {
     
        if(file_exists("./".$_SESSION["nombre_v"])){
            $bandera = true;
        }else{
            echo "<h1>El archivo que desea renombrar, no existe</h1>";
            $bandera = false;
        }

    }
    if($_SESSION["accion"]=="eliminar_a")
    {

        if(file_exists("./".$_SESSION["nombre_v"])){
            $bandera = true;
        }else{
            echo "<h1>El archivo que desea borrar, no existe</h1>";
            $bandera = false;
        }
        
    }
    if($_SESSION["accion"]=="Crear_c")
    {

        if(!file_exists("./".$_SESSION["nombre_n"])){
            $bandera = true;
        }else{
            echo "<h1>La carpeta que desea crear, ya existe</h1>";
            $bandera = false;
        }
       
    }
    if($_SESSION["accion"]=="renombrar_c")
    {
        if(file_exists("./".$_SESSION["nombre_n"])){
            $bandera = true;
        }else{
            echo "<h1>La carpeta que desea renombrar, no existe</h1>";
            $bandera = false;
        }
    }
    if($_SESSION["accion"]=="eliminar_c")
    {

        if(file_exists("./".$_SESSION["nombre_n"])){
            $bandera = true;
        }else{
            echo "<h1>La carpeta que desea borrar, no existe</h1>";
            $bandera = false;
        }
        
    }

if($bandera){
        if(!file_exists("./registro.txt")){
       $registro = fopen("./registro.txt", "x+");
    }else{
       $registro = fopen("./registro.txt", "a+");
    }

    fwrite($registro, $_SESSION["user"]." de la casa de los ".$_SESSION["casa"]);



    if($_SESSION["accion"]=="Crear_a")
    {
        fwrite($registro, ' a creado el archivo con el nombre "'.$_SESSION["nombre_n"].'" a las '.date("G:i:s")." el dia ".date("d/n/Y")."\r\n");
<<<<<<< HEAD
        fopen($_SESSION["nombre_n"], "x+");   
=======

        fopen($_SESSION["nombre_n"], "x+");
>>>>>>> e11e5507234272f55e970275c182914a4a42b15b
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
    echo "<h4>";
    while(!feof($registro)){
    echo fgets($registro);
    echo "<br>";

    }
    echo "</h4>";
    fclose($registro);
}
    echo "<a href = './recibir_info_inicio_sesion.php'><button>Regresar a realizar otra accion</button></a><br><br>";
    echo "<a href = './formulario_provisional.html'><button>Abandonar sesion</button></a>";
    

?>