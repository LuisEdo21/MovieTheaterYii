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
<section id="contacto">
    <h1>Contacto - Movie Theater: El cine como nunca lo imaginaste</h1>
    <article id="informacionContacto">
        <h2>Las Quintas</h2>
        <div class="row featurette">
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1499.9878691389538!2d-107.37944939165003!3d24.812593560993996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d24.8124592!2d-107.37920199999999!5e1!3m2!1ses-419!2smx!4v1417893969396" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-md-5">
                <strong>Visítanos en:</strong> <br>
                Av. Rafael Buelna #1845. Colonia Las Quintas. Culiacán, Sinaloa. <br>
                (Antes Multicinemas) <br>
                <strong>Servicios: </strong>
                <ul>
                    <li>Facilidades para personas discapacitadas.</li>
                    <li>Servicio de dulcería.</li>
                    <li>Alimentos exclusivos en salas VIP.</li>
                </ul>
            </div>
        </div>
        <h2>Las Torres</h2>
        <div class="row featurette">
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d11955.28125233144!2d-107.4509829467533!3d24.75637211990935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d24.754315599999998!2d-107.45007299999999!5e1!3m2!1ses-419!2smx!4v1417894785739" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-md-5">
                <strong>Visítanos en:</strong> <br>
                Blvd. Las Torres esquina con Blvd. Jesús Kumate. Culiacán, Sinaloa. <br>
                <strong>Servicios: </strong>
                <ul>
                    <li>Facilidades para personas discapacitadas.</li>
                    <li>Servicio de dulcería.</li>
                    <li>Alimentos exclusivos en salas VIP.</li>
                    <li>Área de comida rápida</li>
                </ul>
            </div>
        </div>
    </article>
</section>