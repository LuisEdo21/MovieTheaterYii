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
<section id="nosotros">
	<article id="informacionNosotros">
        <h1>Nosotros - Movie Theater: El cine como nunca lo imaginaste</h1>
		<div class="row featurette">
            <div class="col-md-7">
                <h2>¿Quiénes somos? </h2>
                <p class="lead">Somos una empresa joven, fundada durante el mes de diciembre de 2014 en la ciudad de Culiacán, Sinaloa por un grupo de jóvenes emprendedores que gustan de aprovechar los espacios disponibles en desuso de nuestra ciudad. Movie Theater nació de la idea de renacer uno de los centros de entretenimiento más representativos de Culiacán, tomamos el edificio y lo acondicionamos para poder ofrecerte el cine como nunca lo habías imaginado.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto">
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" >
            </div>
            <div class="col-md-7">
                <h2>Nuestra misión: </h2>
                <p class="lead">Ofrecer diversión y entretenimiento para toda la gente que nos visite con una gran variedad de películas y servicios para ser el cine como nunca lo habías imaginado.</p>
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-7">
                <h2>Nuestra visión: </h2>
                <p class="lead">Ser la cadena líder de cines en el estado de Sinaloa; durante 2015 abriremos un complejo más en Culiacán e incursionaremos a las ciudades de Los Mochis y Mazatlán. A mediano plazo creceremos hacia las ciudades pequeñas y medianas del estado y a largo plazo estaremos expandiendo nuestra marca hacia otros estados.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto">
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto">
            </div>
            <div class="col-md-7">
                <h2>Nuestros valores: </h2>
                <p class="lead">
                    <ul>
                        <li>Responsabilidad</li>
                        <li>Honestidad</li>
                        <li>Compromiso</li>
                        <li>Armonía</li>
                        <li>Amistad</li>
                        <li>Respeto</li>
                    </ul>
                </p>
            </div>
        </div>
	</article>
</section>