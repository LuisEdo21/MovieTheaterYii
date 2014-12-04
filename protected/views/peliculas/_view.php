<?php
/* @var $this PeliculasController */
/* @var $data Peliculas */
?>

<div class="lista_peliculas">

	<span>
		<?php echo CHtml::link(CHtml::encode($data->NombrePelicula), array('view', 'id'=>$data->IDPelicula)); ?>
		<br />
	</span>

	<img src="<?php echo Yii::app()->theme->baseUrl;?>/<?php echo CHtml::encode($data->PosterPelicula); ?>">
	<br />

	<b>Clasificación: </b>
	<?php echo CHtml::encode($data->ClasificacionPelicula); ?>
	<br />

	<b>Duración: </b>
	<?php echo CHtml::encode($data->DuracionPelicula); ?> min.
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPelicula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPelicula), array('view', 'id'=>$data->IDPelicula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombrePelicula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombrePelicula), array('view', 'id'=>$data->IDPelicula)); ?>
	<?php echo CHtml::encode($data->NombrePelicula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GeneroPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->GeneroPelicula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActoresPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->ActoresPelicula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DirectorPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->DirectorPelicula); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('SinopsisPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->SinopsisPelicula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PosterPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->PosterPelicula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrailerPelicula')); ?>:</b>
	<?php echo CHtml::encode($data->TrailerPelicula); ?>
	<br />

	*/ ?>

</div>