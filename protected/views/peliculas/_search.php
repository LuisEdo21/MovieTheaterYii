<?php
/* @var $this PeliculasController */
/* @var $model Peliculas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDPelicula'); ?>
		<?php echo $form->textField($model,'IDPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombrePelicula'); ?>
		<?php echo $form->textField($model,'NombrePelicula',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DuracionPelicula'); ?>
		<?php echo $form->textField($model,'DuracionPelicula',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClasificacionPelicula'); ?>
		<?php echo $form->textField($model,'ClasificacionPelicula',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GeneroPelicula'); ?>
		<?php echo $form->textField($model,'GeneroPelicula',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActoresPelicula'); ?>
		<?php echo $form->textField($model,'ActoresPelicula',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DirectorPelicula'); ?>
		<?php echo $form->textField($model,'DirectorPelicula',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SinopsisPelicula'); ?>
		<?php echo $form->textArea($model,'SinopsisPelicula',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PosterPelicula'); ?>
		<?php echo $form->textField($model,'PosterPelicula',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrailerPelicula'); ?>
		<?php echo $form->textField($model,'TrailerPelicula',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->