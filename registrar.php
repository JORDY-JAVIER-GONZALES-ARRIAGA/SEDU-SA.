
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


<div class="login-form">    
<form action="Login/guardar.php" enctype="multipart/form-data"  method="post">
		<div class="avatar"><i class="glyphicon glyphicon-folder-open"></i></div>
    	<h4 class="modal-title">Registrar pedido de su problema</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="cedula" placeholder="Cedula" required="required">
        </div><div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="correo" placeholder="Correo" required="required">
        </div>
<div class="form-group">
        <input type="text" class="form-control" name="cedular" placeholder="Celular" required="required">
        </div>	
        <div class="form-group">

        <select class="form-control" name="categoria">

<?php 

include 'Login/conexion.php';

$objConexion=new Conexion();
$conexion=$objConexion->conectar();
$log = 'SELECT * FROM categoria';
					?>						
<option value="">Seleccionar Categoria</option>

<?php foreach ($conexion->query($log) as $row): ?>
<option value="<?php echo $row['category']?>"><?php echo $row['category']?></option>

<?php endforeach ?>

</select>	
    </div>      
      de que se trata el trabajo
      <textarea class="form-control" name="comentario" placeholder="Descripcion " ></textarea>
    
    
      para que fecha lo desea
		 <div class="form-group"> 
            <input type="date" class="form-control" name="apellido" placeholder="Apellido" required="required">
        </div>
 
<input type="file" name="foto" class="btn btn-primary btn-block btn-flat"  required/>		
 
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Registrar" name="guardar">              
    </form>			
    
</div>


</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</html>

