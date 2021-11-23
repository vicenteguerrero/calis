<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fichero</title>
  <link href="artes.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 
</head>
<!--modificar para el administrador-->
<div class="container">
  <form class="form-inline" action="aplicarMovimiento.php" method="post" >
    <div class="form-group">
    
      <input " class="form-control" id="Nombre" max="100" placeholder="Nombre" name="Nombre" autofocus="true" required="">
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" id="Idempleado" max="100" placeholder="Id administrador" name="Idempleado" required="">
    </div>
   <button type="submit" class="btn btn-default" name="index">Ingresar</button>
  </form>
</div>


<div class="jumbotron text-center">

 <h1>Fichero de Material prestado</h1>
  <p>Sistema intermunicipal</p> 
 <?php
 echo "string";
 ?>
</div>

  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>¿Que puedo hacer?</h3>
      <p>En este sitio los trabajadores podran revisar tanto su historial como las fichas de prestamo aplicadas</p>
    </div>
    <div class="col-sm-4">
      <h3>¿Como?</h3>
      <p>Con su numero de empleado y Nombre podra revisar su historial</p>
   
    </div>
    <div class="col-sm-4">
      <h3>Administradores</h3>        
      <p>Los administradores podran capturar las fichas empleadas</p>
      
    </div>
  </div>
</div>

<div class="container">
  <h2>¿Como ingreso?</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/como3.png" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/como2.png" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/como1.png" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<footer>


<div class="container">

  <div class="row">

  <div>
          <h1>¿Aun no te registras?</h1>
  <p>ingresa aqui para registrarte.</p> 
  <p>Solo  se necesitan unos pocos datos </p>
  <p>Y podras tener aceso a los datos de tus prestamos de herramienta</p>
  <form action = "registrarse.php">
   <button type="submit" class="btn btn-dark" >Registrarte</button>
   </form>
  </div>
 

    <div>
      <h1>¿Ya te registraste?</h1>
     <p>Ingresa aqui</p>
<div >
  
  <form action="/action_page.php">
   
    <div >
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" id="email" >
    </div>

    <div >
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd"  placeholder="Enter password" name="pswd" >
          <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
      
  </form>
</div>

    </div>
    </div>
  
</div>


  

</footer>



</body>
</html>