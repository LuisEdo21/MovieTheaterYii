<?php
/* @var $this PeliculasController */
/* @var $model Peliculas */

$this->breadcrumbs=array(
	'Peliculases'=>array('index'),
	$model->IDPelicula=>array('view','id'=>$model->IDPelicula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peliculas', 'url'=>array('index')),
	array('label'=>'Create Peliculas', 'url'=>array('create')),
	array('label'=>'View Peliculas', 'url'=>array('view', 'id'=>$model->IDPelicula)),
	array('label'=>'Manage Peliculas', 'url'=>array('admin')),
);
?>

<h1>Update Peliculas <?php echo $model->IDPelicula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>