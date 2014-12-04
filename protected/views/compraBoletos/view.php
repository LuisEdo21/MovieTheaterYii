<?php
/* @var $this CompraBoletosController */
/* @var $model CompraBoletos 

$this->breadcrumbs=array(
	'Compra Boletoses'=>array('index'),
	$model->IDPelicula,
);

$this->menu=array(
	array('label'=>'List CompraBoletos', 'url'=>array('index')),
	array('label'=>'Create CompraBoletos', 'url'=>array('create')),
	array('label'=>'Update CompraBoletos', 'url'=>array('update', 'id'=>$model->IDPelicula)),
	array('label'=>'Delete CompraBoletos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPelicula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompraBoletos', 'url'=>array('admin')),
);*/
?>

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

<section id="compra">
	<h2>Compra o reserva tus boletos</h2>
    <article id="informacionPelicula">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/<?php echo CHtml::encode($model->PosterPelicula); ?>">
            </div>
            <div class="col-md-8">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="CompraOReserva" class="col-sm-4">¿Qué quieres hacer?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="CompraOReserva" id="inlineRadio1" value="option1"> Compra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="CompraOReserva" id="inlineRadio2" value="option2"> Reserva
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="FechaCompra" class="col-sm-4">Fecha: </label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="FechaCompra" placeholder="dia/mes/año">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="HoraCompra" class="col-sm-4">¿Qué horario te gustaría?</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="HoraCompra" placeholder="Selecciona la hora de tu función">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NumBoletos" class="col-sm-4">Número de boletos: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="NumBoletos" min="1" max="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="AsientosCompra" class="col-sm-4">Selecciona asientos: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="AsientosCompra" placeholder="Selecciona tus asientos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PagoCompra" class="col-sm-4">Forma de pago: </label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="PagoCompra" id="inlineRadio1" value="Tarjeta"> Tarjeta de crédito / débito
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="PagoCompra" id="inlineRadio2" value="MovieTheaterClub"> Puntos Movie Theater Club
                            </label>
                        </div>
                    </div>
                    <div id="PagoTarjeta">  
                        <div class="form-group">
                            <label for="TipoTarjeta" class="col-sm-4">Tipo de tarjeta: </label>
                            <div class="col-sm-8">
                                <select name="TipoTarjeta" class="form-control">
                                    <option value="visa">VISA</option>
                                    <option value="martercard">Master Card</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NumTarjeta" class="col-sm-4">Número de tarjeta: </label>
                            <div class="col-sm-8">
                                <input type="text" size="16" class="form-control" id="NumTarjeta" placeholder="XXXX-XXXX-XXXX-XXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CodigoTarjeta" class="col-sm-4">Dígitos de seguridad: </label>
                            <div class="col-sm-8">
                                <input type="text" size="3" class="form-control" id="CodigoTarjeta" placeholder="Código de 3 dígitos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="VencimientoTarjeta" class="col-sm-4">Fecha de vencimiento</label>
                            <div class="col-sm-8">
                                <select name="AnoVencimiento" class="form-control">
                                    <option value="14">2014</option>
                                    <option value="15">2015</option>
                                    <option value="16">2016</option>
                                    <option value="17">2017</option>
                                    <option value="18">2018</option>
                                    <option value="19">2019</option>
                                    <option value="20">2020</option>
                                </select>
                                <select name="MesVencimiento" class="form-control">
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="PagoPuntos"></div>
                    <div class="form-group">
                        <label for="CorreoCliente" class="col-sm-4">Correo electrónico: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="CorreoCliente" placeholder="Escribe tu correo electrónico">
                            </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>

<?php 
/*
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDPelicula',
		'NombrePelicula',
		'DuracionPelicula',
		'ClasificacionPelicula',
		'GeneroPelicula',
		'ActoresPelicula',
		'DirectorPelicula',
		'SinopsisPelicula',
		'PosterPelicula',
		'TrailerPelicula',
	),
)); 
*/
?>
