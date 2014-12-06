<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenidos a Movie Theater - El cine como nunca lo imaginaste</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/carousel.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/estilos.css">
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
	            </div>
	            <div class="navbar-collapse collapse navbar-right">
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
	            </div>
	        </div>
    	</nav>
    </header>
    <?php echo $content;?>
	<footer>
		
	</footer>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jscod.js"></script>
</body>
</html>