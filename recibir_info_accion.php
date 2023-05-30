<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["accion"]=(isset($_POST["accion"])&&$_POST!="")? $_POST["accion"]:"Error";

        echo "<form action='http://localhost/php/registro.php' method='POST' target='_self'>";
        if($_SESSION["accion"]=="Crear_a")
        {
            echo 
            "
                <label>Nombre del nuevo archivo
                <input type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="Crear_c")
        {
            echo "
                <label>Nombre de la nueva carpeta
                <input type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="renombrar_a")
        {
            echo

            "
                <label>Nombre del archivo a renombrar
                <input type='text' name='nombre_v' required>
                </label>
                <label>Nuevo nombre
                <input type='text' name='nombre_n' required>

                </label>";
        }
        if($_SESSION["accion"]=="renombrar_c")
        {
            echo "

                <label>Nombre de la carpeta a renombrar
                <input type='text' name='nombre_v' required>
                </label>
                <label>Nuevo nombre
                <input type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="eliminar_a")
        {
            echo "
                <label>Nombre del archivo a eliminar
                <input type='text' name='nombre_v' required>
                </label>
                ";

        }
        if($_SESSION["accion"]=="eliminar_c")
        {
            echo "
                <label>Nombre de la carpeta a eliminar
                <input type='text' name='nombre_v' required>
                </label>
                ";
        }
        echo "<button type='submit'>Enviar</button>
        <button type='reset'>Borrar</button>
    </form>";
    ?>
</body>
</html>