<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenidos a Movie Theater - El cine como nunca lo imaginaste</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/carousel.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/estilos.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/icomoon/style.css">
	<link href='http://fonts.googleapis.com/css?family=Nunito|Hammersmith+One' rel='stylesheet' type='text/css'>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jscod.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top navbar_mod" >
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a href="#" class="navbar-brand"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo/logo_rec.png" alt=""></a>
	                <span class="navbar-brand nombre_cine">MOVIE THEATER</span>
	            </div>
	            <!--<div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <select class="form-control">
                                <option>Culiacán</option>
                                <option>Próximamente más ciudades</option>
                            </select>
                        </li>
                        <li>
                            <select class="form-control">
                                <option>Las Quintas</option>
                                <option>Las Torres</option>
                            </select>
                        </li>
                    </ul>
	            </div>-->
	        </div>
    	</nav>
    </header>
    <?php echo $content;?>
	<footer>
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo/logo.png" alt="">
			</div>
			<div class="col-md-4" id="RedesSociales">
				Síguenos en: 
				<a href="http://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a> 
				<a href="http://www.twitter.com/" target="_blank"><span class="icon-twitter"></span></a><br>
				<div id="integrantes">
					Desarrolladores: 
					<ul>
						<li>Villela Zavala, Luis Eduardo</li>
						<li>Delgado Aguirre, Javier Iván</li>
						<li>Cárdenas López, Edgar Armando</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4" id="RedesSociales">
				<div id="integrantes">
					<ul>
						<li>Tecnológico Nacional de México Campus Culiacán</li>
						<li>Ingeniería Web</li>
						<li>Proyecto Integrador de Ing. de SW</li>
						<li>Dr. Clemente García Gerardo</li>
						<li>M.C. Martha Estela Valenzuela Tirado</li>
						<li>Proyecto final</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>