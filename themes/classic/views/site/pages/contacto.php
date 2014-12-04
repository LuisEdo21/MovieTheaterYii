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
<section id="contacto">
    <h1>Contacto - Movie Theater: El cine como nunca lo imaginaste</h1>
    <article id="informacionContacto">
        <h2>Mapa de ubicación</h2>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d2144.4811535558224!2d-107.37974906480034!3d24.81244958453916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e0!4m0!4m3!3m2!1d24.812480599999997!2d-107.3791768!5e1!3m2!1ses-419!2smx!4v1416973330896" width="1100" height="600" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <strong>Visítanos en:</strong> <br>
                Av. Rafael Buelna #1845. Colonia Las Quintas. Culiacán, Sinaloa. <br>
                (Antes Multicinemas)
            </div>
            <div class="col-md-6">
                Servicios: 
            </div>  
        </div>
        <h2>Mapa de ubicación</h2>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d6691.431940894035!2d-107.45193022592224!3d24.749730968108782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m3!3m2!1d24.7506025!2d-107.4513159!4m0!5e1!3m2!1ses-419!2smx!4v1416973808019" width="1100" height="600" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <strong>Visítanos en:</strong> <br>
                Blvd. Las Torres esquina con Blvd. Jesús Kumate. Culiacán, Sinaloa.  
            </div>
            <div class="col-md-6">
                Servicios: 
            </div>  
        </div>
    </article>
</section>