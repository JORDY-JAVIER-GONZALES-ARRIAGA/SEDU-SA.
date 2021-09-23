<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEDU S.A.</title>
   
    <link rel="stylesheet" href="res/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="res/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="res/js/jquery.min.js">

	<link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/mi-slider.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><b>SEDU S.A.</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>
        <li><a href="./?view=blog">PUBLICACIONES</a></li>



      </ul>


    </div>
  </div>
</nav>
	<div class="slider-wrapper theme-mi-slider">
		<div id="slider" class="nivoSlider">     
		    <img src="img/6.jpg" alt=""  width="1920" height="520"/>

			<img src="img/4.jpg" alt=""  width="1920" height="520"/>
			<a title="Registrar Pedido" href="http://localhost:8585/jordygon/registrar.php "><img src="img/7.jpg" alt="Formulario" width="1920" height="520" /></a> 			
			<a title="Consultar Pedidos" href="http://localhost:8585/sedu/buscar.php " target="_blank"><img src="img/8.jpg" alt="Consulta" width="1920" height="520" /></a> 			


		</div> 
		<div id="htmlcaption1" class="nivo-html-caption">     
		    <h1></h1>
		    <p></p>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">     
		    <h1></h1>
		</div>
		<div id="htmlcaption3" class="nivo-html-caption">     
		    <h1></h1>
        </div>
      
	</div>
    </body>
</html>