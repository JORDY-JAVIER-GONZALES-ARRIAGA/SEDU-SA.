
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <title>Registro</title>
  <link rel="stylesheet" href="bower_components/css/estilo_login.css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
 
        <ul class="nav navbar-nav">
            
            <li>
                <a type="button" href="buscar.php"><h4><i class="glyphicon glyphicon-plus
"></i> Buscar</h4> </a>
            </li>
            <li>
                <a href="registrar.php"><h4><i class="glyphicon glyphicon-minus
"></i> Registrar</h4></a>
            </li>
			
        </ul>
    </nav>
    
<br><br><br><br>
<div class="login-form">    
<form action="mostrar.php" method="post">
		<div class="avatar"><i class="glyphicon glyphicon-user"></i></div>
    	<h4 class="modal-title">Buscar Datos Personales</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="cedula" placeholder="Celular" required="required">
        </div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Guardar" name="guardar">              
    </form>			
    
</div>


</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</html>

