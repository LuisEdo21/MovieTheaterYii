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
/* @var $this PeliculasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peliculases',
);

$this->menu=array(
	array('label'=>'Create Peliculas', 'url'=>array('create')),
	array('label'=>'Manage Peliculas', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
    $('.search-button').on('click', function(){
        $('.search-form').toggle('slow');
        return false;
    });
    $('.search-form form').on('submit', function(){
        $.fn.yiiListView.update('blogslistview', { 
            data: $(this).serialize()
        });
        return false;
    });");
?>

<section id="cartelera">
	<h1>Consulta nuestra cartelera</h1>

    <?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'btn btn-primary search-button')); ?>
    <div class="search-form" style="display:none">
        <?php  $this->renderPartial('_search',array(
            'model'=>$model,
        )); ?>
    </div>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
        'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
	)); ?>
</section>
