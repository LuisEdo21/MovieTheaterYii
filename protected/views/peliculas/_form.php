<?php
/* @var $this PeliculasController */
/* @var $model Peliculas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peliculas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombrePelicula'); ?>
		<?php echo $form->textField($model,'NombrePelicula',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'NombrePelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DuracionPelicula'); ?>
		<?php echo $form->textField($model,'DuracionPelicula',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'DuracionPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClasificacionPelicula'); ?>
		<?php echo $form->textField($model,'ClasificacionPelicula',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ClasificacionPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GeneroPelicula'); ?>
		<?php echo $form->textField($model,'GeneroPelicula',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'GeneroPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActoresPelicula'); ?>
		<?php echo $form->textField($model,'ActoresPelicula',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'ActoresPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DirectorPelicula'); ?>
		<?php echo $form->textField($model,'DirectorPelicula',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DirectorPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SinopsisPelicula'); ?>
		<?php echo $form->textArea($model,'SinopsisPelicula',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SinopsisPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PosterPelicula'); ?>
		<?php echo $form->textField($model,'PosterPelicula',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'PosterPelicula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrailerPelicula'); ?>
		<?php echo $form->textField($model,'TrailerPelicula',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'TrailerPelicula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->