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
<section id="nuestras_salas">
    <article id="informacionSalas">
        <h1>Nuestras salas - Movie Theater: El cine como nunca lo imaginaste</h1>
        <div class="row">
            <div class="col-md-7">
                <h2>Salas tradicionales </h2>
                <p class="lead">Nuestras tradicionales salas cuentan con cómodas butacas tapizadas en tela y un portavasos con el que podrás colocar tu vaso o tu charola de snacks. Con sonido envolvente especial para disfrutar al máximo tus películas.</p>
            </div>
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/salas/tradicional.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/salas/vip.jpg" >
            </div>
            <div class="col-md-7">
                <h2>Salas VIP: </h2>
                <p class="lead">Nuestras salas VIP cuentan con asientos reclinables tapizados en piel y una mesa de servicio. Contamos con el servicio de meseros, mismos que están para brindarte alimentos exclusivos o de nuestra dulcería. Cuentan con sanitarios dentro de la sala con pantallas LED para que no te pierdas ningún instante de la película. Su enorme pantalla te permitirá tener la mejor experiencia del cine jamás vista; así como su sonido envolvente y el 3D.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <h2>Sala Junior: </h2>
                <p class="lead">Contamos con una sala Junior con un ambiente infantil. Contamos con butacas tradicionales y asientos tipo puff para que puedas disfrutar la película junto con tus niños. Además se tiene disponible un tobogán y una alberca de pelotas para el disfrute de los pequeños y sanitarios familiares con pantalla LED para que no pierdas detalle de la película. ¡Sin duda una experiencia que tus niños jamás olvidarán! <br> 
                Y lo mejor de todo... ¡Al mismo precio que una función en sala tradicional!</p>
            </div>
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl;?>/img/salas/junior.jpg">
            </div>
        </div>
    </article>
</section>