<?php
/* @var $this PeliculasController */
/* @var $model Peliculas 

$this->breadcrumbs=array(
	'Peliculases'=>array('index'),
	$model->IDPelicula,
);

$this->menu=array(
	array('label'=>'List Peliculas', 'url'=>array('index')),
	array('label'=>'Create Peliculas', 'url'=>array('create')),
	array('label'=>'Update Peliculas', 'url'=>array('update', 'id'=>$model->IDPelicula)),
	array('label'=>'Delete Peliculas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPelicula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peliculas', 'url'=>array('admin')),
);*/
?>

<section id="botonera">
    <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>array(
            array('label'=>'Inicio', 'url'=>array('/site/index')),
            array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'nosotros')),
            array('label'=>'Cartelera', 'url'=>array('/peliculas/index')),
            array('label'=>'Nuestras salas', 'url'=>array('/site/page', 'view'=>'nuestras_salas')),
            array('label'=>'Promociones', 'url'=>array('/site/page', 'view'=>'promociones')),
            array('label'=>'Servicios', 'url'=>array('/site/page', 'view'=>'servicios')),
            array('label'=>'Contacto', 'url'=>array('/site/page', 'view'=>'contacto')),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    )); ?>

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
</section>

<section id="cartelera">
	<h2><?php echo $model->NombrePelicula; ?></h2>
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/<?php echo $model->PosterPelicula; ?>" alt=""><br>
			<div class="miniaturas">
				<span class="clasificacionPelicula">Clasif: <?php echo $model->ClasificacionPelicula; ?></span>
				<span class="DuracionPelicula"><?php echo $model->DuracionPelicula; ?> min.</span>
				<span class="GeneroPelicula"><?php echo $model->GeneroPelicula; ?></span>
			</div>
			<div class="horarios">
				<strong>Selecciona un horario para realizar la compra o reserva de tus boletos: </strong><br>
				<ul>
					<?php 
						$IDPel = $model->IDPelicula;
						$consulta = sprintf("Select Horario from funciones where IDPelicula=%d", $IDPel);
						$resconsulta = Yii::app()->db->createCommand($consulta)->queryAll();
						print_r($resconsulta);
						/*if($registro = mysql_fetch_array($resconsulta))
						{
							echo "<li><a href='<?php echo Yii::app()->theme->baseUrl;?>../../../compraBoletos/'>Prueba</a></li>";
						}*/
					 ?>
				</ul>
			</div>
		</div>
		<div class="col-md-8">
			<div class="embed-responsive embed-responsive-16by9">
				<p><?php echo $model->TrailerPelicula; ?></p><br>
			</div>
			<div>
				<p class="sinopsis_pelicula">"<?php echo $model->SinopsisPelicula ?>"</p>
				<strong>Director: </strong><?php echo $model->DirectorPelicula; ?><br>
				<strong>Elenco: </strong><?php echo $model->ActoresPelicula; ?><br>
			</div>
		</div>
	</div>
	<div class="botonera_pelicula">
		<ul>
			<li><a href="<?php echo Yii::app()->theme->baseUrl;?>../../../peliculas" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar a cartelera</a></li>
			<li>
				<a href="<?php echo Yii::app()->theme->baseUrl;?>../../../compraBoletos/<?php echo $model->IDPelicula; ?>" class="btn btn-primary">Comprar o reservar boletos <span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
				<?php /* 
					<a href="../site/page.html?view=compra&idPelicula=<?php echo $model->IDPelicula; ?>" class="btn btn-primary">Comprar o reservar boletos <span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
				*/?>
			</li>
		</ul>
	</div>
</section>

<?php 
/*
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'IDPelicula',
			'NombrePelicula',
			'DuracionPelicula',
			'ClasificacionPelicula',
			'GeneroPelicula',
			'ActoresPelicula',
			'DirectorPelicula',
			'SinopsisPelicula',
			'PosterPelicula',
			'TrailerPelicula',
		),
	)); ?> 
*/
?>
