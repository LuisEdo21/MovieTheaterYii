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

<?php
/* @var $this CompraBoletosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compra Boletoses',
);

$this->menu=array(
	array('label'=>'Create CompraBoletos', 'url'=>array('create')),
	array('label'=>'Manage CompraBoletos', 'url'=>array('admin')),
);
?>

<section id="compra">
	<h1>Compra tus boletos</h1>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
        'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
	)); ?>
</section>