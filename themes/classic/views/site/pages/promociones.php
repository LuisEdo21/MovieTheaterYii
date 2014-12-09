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
            /*array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)*/
        ),
    )); ?>

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
</section>
<section id="promociones">
    <h1>Promociones - Movie Theater: El cine como nunca lo imaginaste</h1>
    <article id="informacionPromociones">
        Contamos con promociones especiales en dulcería por apertura en nuestras dos sucursales. ¡Pregunta por ellas!
        <div class="row">
            <div class="col-md-6">
                <img class="featurette-image img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/promociones/1.jpg" alt="">
            </div>
            <div class="col-md-6">
                <img class="featurette-image img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/promociones/2.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="featurette-image img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/promociones/3.jpg" alt="">
            </div>
            <div class="col-md-6">
                &nbsp;
            </div>
        </div>
    </article>
</section>