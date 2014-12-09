<?php
/* @var $this PeliculasController */
/* @var $model Peliculas */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" id="FormBusqueda">
	<div class="form-group">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'action'=>Yii::app()->createUrl($this->route),
			'method'=>'get',
		)); ?>

		<div class="row">
			<label class="col-sm-4"><?php echo $form->label($model,'NombrePelicula'); ?></label>
			<div class="col-sm-8">
				<?php echo $form->textField($model,'NombrePelicula',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<label class="col-sm-4"><?php echo $form->label($model,'ClasificacionPelicula'); ?></label>
			<div class="col-sm-8">
				<?php echo $form->dropDownList($model,'ClasificacionPelicula',array('AA'=>'AA','A'=>'A','B'=>'B','B15'=>'B15','C'=>'C','D'=>'D')); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row buttons">
			<?php echo CHtml::submitButton('Buscar', array('class'=>'btn btn-success btn-block')); ?>
		</div>
	</div>
		
	<?php $this->endWidget(); ?>

</div><!-- search-form -->