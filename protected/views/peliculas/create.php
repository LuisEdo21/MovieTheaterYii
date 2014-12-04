<?php
/* @var $this PeliculasController */
/* @var $model Peliculas */

$this->breadcrumbs=array(
	'Peliculases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peliculas', 'url'=>array('index')),
	array('label'=>'Manage Peliculas', 'url'=>array('admin')),
);
?>

<h1>Create Peliculas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>