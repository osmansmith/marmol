<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Serena Mármol</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="dist/semantic.min.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/conf.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="fancy/source/jquery.fancybox.css">
	<script src="dist/jquery-1.11.3.min.js"></script>
	<script src="fancy/source/jquery.fancybox.pack.js"></script>
	<script>
    $(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
    </script>
	<script src="dist/slider.js"></script>	
	<script type="text/javascript" src="dist/jssor.slider.min.js"></script>  	 
	<script src="js/jquery.collagePlus.min.js"></script>
  <script src="js/jquery.collageCaption.min.js"></script>
  <script src="js/jquery.removeWhitespace.min.js"></script>	 
	 <script type="text/javascript" src="dist/jssor.slider.min.js"></script>  	 
</head>
<body>
<div class="ui container">
  <div class="ui stackable two column grid">    
    <div style=" min-height: 50px; padding-top:1%;" class="seven wide column">
      <img src="/logo.png"/>
    </div>                                  
    <div style=" min-height: 10px; padding:1% 0 0 1%;" class="eight wide column">
<!--menu principal-->
      <header>
        <div style="margin-bottom: 5px; padding-top: 20px;" class="ui secondary pointing menu">
          <a id="index" href="index.php" class="item ">Home</a>         
            <div id="catalogo" class="ui dropdown item">Catalogo<i class="dropdown icon"></i>
              <div class="menu">
                <a id="marmol" href="marmol.php" class="item">Mármol</a>
                <a id="granito" href="granito.php" class="item">Granito</a>
                <a id="cuarzo" href="cuarzo.php" class="item">Cuarzo</a>
              </div>
            </div>
          <a id="trabajos" href="trabajos.php" class="item">Trabajos</a>
          <a id="clientes" href="clientes.php" class="item">Clientes</a>
          <a id="contactos" href="contactos.php" class="item">Contactos</a>
        </div>
      </header>
    </div>         
  </div>