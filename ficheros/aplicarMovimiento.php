<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>BPEJ. Sistema Integral de Gestion</title>
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="equipo de desarrollo">
        <!--bootstrap-->
        <link rel="stylesheet" href="vistas/css/bootstrap.css"><!-- Editado para el menu -->
        <!--jquery-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--bootstrap-js-->
        <script src="js/bootstrap.min.js"></script>
<!--        PDF Make
        <script src='js/pdfmake.min.js'></script>
        <script src='js/vfs_fonts.js'></script>-->
    </head>
    <body>

   <?php
        
     //  print_r($_POST);

        if (isset($_POST['index']))//Valida si se envÃ­a el formulario
        {
            //print_r($_POST);

            include 'empleado.php';
            
            $obj = new empleado();
            $obj ->setNombreEmpleado($_POST['Nombre']);
            $obj ->setIdEmpleado($_POST['Idempleado']);
            $obj ->empleadoBuscar(); 
            
            ?>
            <div class="container">
                <br><br><center><img class="img-responsive" src="images/check.png" style="width:15%">
                <br><p class="text-success text-center text-uppercase">La informacion se guardo correctamente</p></center>
            </div>
            <div class="container">
                <br>
                <center>
                    <a href="index.php" class="btn btn-default">Salir</a></center>
            </div>   
            <?php
        }

        elseif (isset($_POST['Donaciones']))//Valida si se envÃ­a el formulario
        {
           // print_r($_POST);
            include 'Donacion.php';
            $obj = new Donacion();
            $obj ->setNombreDonador($_POST['Nombre']);
            $obj ->setDatosDonador($_POST['Datos']);
            $obj->setActivo('SI');//al dar de alta la editorial esta siempre empieza en activo
            $obj ->DonacionAlta();
        
        ?>
           <div class="container">
                <br><br><center><img class="img-responsive" src="images/check.png" style="width:15%">
                <br><p class="text-success text-center text-uppercase">La informacion se guardo correctamente</p></center>
            </div>
            <div class="container">
                <br>
                <center>
                    <a href="index.php" class="btn btn-default">Salir</a></center>
            </div>
       
        <?php
       
    }
    elseif (isset($_POST['registrarse'])) {
//print_r($_POST);
        include 'registroContraUsuario.php';

        $obj = new registrarse();
        $obj->setIdEmpleado($_POST['idEmpleado']);
        $obj->setArea($_POST['idArea']);
        $obj->setContrasena($_POST['contrasena']);
        $ojb->buscar();
        ?>
 <div class="container">
                <br><br><center><img class="img-responsive" src="images/check.png" style="width:15%">
                <br><p class="text-success text-center text-uppercase">La informacion se guardo correctamente</p></center>
            </div>
            <div class="container">
                <br>
                <center>
                    <a href="index.php" class="btn btn-default">Salir</a></center>
            </div>
       
        <?php

       
    }

