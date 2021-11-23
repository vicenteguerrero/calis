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

<div class="container">
 
  <form class="form-inline" action="aplicarMovimiento.php" method="post" >
    <div class="form-group">
    
      <input " class="form-control" id="Nombre" placeholder="Nombre" name="Nombre">
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" id="IDempleado" placeholder="IDempleado" name="IDempleado">
    </div>
   <button type="submit" class="btn btn-default">Submit</button>
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
  <h2>Carousel Example</h2>  
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
        <img src="img/blame.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/ka.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
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


</body>
</html>