<?php
// error_reporting(0);

  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<!-- <body style="background-color:grey;"> -->
<body>
<br>
<br>
<br>
    <h1 class="text-center alert"><h1>
    
    
    
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
            <li>
                <a href="imprimir.php"><h4><i class="glyphicon glyphicon-minus
"></i> Mostrar Todos</h4></a>
            </li>    

			
        </ul>
        
    </nav>


    <form  method="POST">
<table class="table table-condensed table-hover table-bordered" >
<tr class="text-center" >
<td class="success" colspan=7>
<h4><strong>Resultados de la busqueda</strong></h4>
</td>
</tr>
<tr class="text-center">
<td class="success"><strong>Cedula</strong></td>
<td class="success"><strong>Nombre</strong></td>
<td class="success"><strong>Apellido</strong></td>
<td class="success"><strong>Correo</strong></td>
<td class="success"><strong>Celular</strong></td>
<td class="success"><strong>comentario</strong></td>
<td class="success"><strong>Archivo</strong></td>
</tr>
<?php
include 'Login/conexion.php';
$categoria = addslashes($_POST['categoria']);
$objConexion=new Conexion();
$conexion=$objConexion->conectar();
$log = mysqli_query($conexion,"SELECT * FROM datos where categoria = '$categoria'");
				if (mysqli_num_rows($log)>0) {
					while ($row=mysqli_fetch_array($log)){
					?>						
<tr class="text-center">
<td class="success"><?php echo $row['cedula'];?></td>
<td class="success"><?php echo $row['nombre'];?></td>
<td class="success"><?php echo $row['apellido'];?></td>
<td class="success"><?php echo $row['correo'];?></td>
<td class="success"><?php echo $row['cedular'];?></td>
<td class="success"><?php echo $row['comentario'];?></td>
<td class="success"><img src="Login/<?php echo $row['rutafoto'];?>" height="42" width="42"></td>
</tr>
<?php
					} 
}else{?>
<tr class="text-center">
<td class="success" colspan="6">NO EXISTEN REGISTROS</td>
</tr>	
<?php
}
?>
				
</table>
</form>





</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/js/opciones_matriz.js"></script>


</html>
<?php
/* } else {
    echo '<script> window.location="index.php"; </script>';
} */
?>
 	