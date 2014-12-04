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
<section id="inicio">
	<article id="sliderPrincipal">
		<div id="carousel-example-generic" class="carousel slide" style="width: 100%; height: 340px; margin: -3em auto 0 auto;" data-ride="carousel">
	 			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/hobbit.jpg" style="width: 100%; height: 340px;">
		        </div>
    			<div class="item">
    				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/sinsajo.jpg" style="width: 100%; height: 340px;">
    			</div>
    			<div class="item">
    				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/grandes_heroes.jpg" style="width: 100%; height: 340px;">
    			</div>
    			<div class="item">
    				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/una_pareja_tonta.jpg" style="width: 100%; height: 340px;">
    			</div>
    			<div class="item">
    				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/interestelar.jpg" style="width: 100%; height: 340px;">
    			</div>
    			<div class="item">
    				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/banner_inicial/momias_guanajuato.jpg" style="width: 100%; height: 340px;">
    			</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>    
		</div>
	</article>
	<article id="informacionPrincipal">
		<div class="row">
			<div class="col-md-4">
				<h2>Estrenos</h2>
                <span>Movie Theater te trae los estrenos antes que nadie; disfruta de exclusivas premieres a precios que no podrás creer. </span>
			</div>
			<div class="col-md-4">
				<h2>Promociones</h2>
                <span>Siempre contamos con promociones para ti. ¡Todos los días de la semana una promoción diferente!</span>
			</div>
			<div class="col-md-4">
				<h2>Movie Theater Club</h2>
                <span>Solicita tu tarjeta Movie Theater Club sin costo alguno y comienza a disfrutar de sus beneficios.</span>
			</div>
		</div>
	</article>
</section>