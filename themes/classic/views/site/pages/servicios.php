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
<section id="servicios">
    <h1>Servicios - Movie Theater: El cine como nunca lo imaginaste</h1>
    <article id="informacionServicios">
        Contamos con una amplia gama de servicios para que disfrutes el cine como nunca lo habías imaginado. 
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/discapacitados.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/estacionamiento.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/alimentos_exclusivos.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/fast_food.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/centro_comercial.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/servicios/dulceria.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="img/servicios/tarjetas.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/servicios/autocinema.jpg" alt="">
                <div class="info">
                    
                </div>
            </div>
        </div>
    </article>
</section>