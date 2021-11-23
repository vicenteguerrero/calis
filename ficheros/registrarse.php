<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Registro usuario</title>

<link href="artes.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>



<div class="container">

	<h1>Boleto de registro</h1>
<p>Rellene los campos para poder acceder al sistema</p>
<p>Una vez que el formlario sea aprobado podra ingresar al sistema con su numero de empleado y su contraseña</p>
  <h2>Formulario</h2>
<!--poner todo bien-->
  <form action="aplicarMovimiento.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="idEmpleado">Id empleado:</label>
      <input type="text" class="form-control" id="idEmpleado" placeholder="Introduzca su numero de empleado" name="idEmpleado" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Favor de llenar este campo.</div>
    </div>

    <div class="form-group">
      <label for="idArea">Id area:</label>
      <input type="text" class="form-control" id="idArea" placeholder="Introduzca el id de su area" name="idArea" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Favor de llenar este campo.</div>
    </div>
    
    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" class="form-control" id="contrasena" placeholder="Introduzca su nueva contraseña" name="contrasena" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Esta sera su contraseña que utilizara una vez registrado.</div>
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Tache para continuar.</div>
      </label>
    </div>
      <button type="submit" class="btn btn-primary" name="registrarse">Submit</button>
       <a href="index.php" class="btn btn-default">Salir</a>
  </form>
</div>

</body>
</html>

