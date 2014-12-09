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

<section id="compra">
	<h2>Compra o reserva tus boletos</h2>
    <article id="informacionPelicula">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/<?php echo CHtml::encode($model->PosterPelicula); ?>">
                <span class="TotalAPagar"><br>
                    <strong>Precio unitario: $<?php echo $_GET['precio']; ?>.00</strong>
                </span>
            </div>
            <div class="col-md-8">
                <form class="form-horizontal">
                    <div class="form-group" style="display: none;">
                        <div class="col-sm-8">
                            <?php 
                                $IDFun = $_GET['idfuncion'];
                                echo "<input type='text' class='form-control' id='FuncionID' value='".$IDFun."' disabled>"
                             ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="CompraOReserva" class="col-sm-4">¿Qué quieres hacer?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="CompraOReserva" id="inlineRadio1" value="Compra" checked="checked"> Compra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="CompraOReserva" id="inlineRadio2" value="Reserva"> Reserva
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NumBoletos" class="col-sm-4">Número de boletos: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="NumBoletos" id="NumBoletos" onkeypress="return SoloNumerosInput(event);" min="1" max="100" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="AsientosCompra" class="col-sm-4">Selecciona asientos: </label>
                        <div class="col-sm-8">
                            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/asientos/pantalla.png" id="pantalla_asientos">
                            <table id="MatrizDeAsientos">
                                <?php
                                    $IDFun = $_GET['idfuncion'];
                                    $NumFilas = 10;
                                    $NumColumnas = 10;
                                    $ContAsientos = 0;
                                    for($i=0; $i<$NumFilas; $i++)
                                    {
                                        echo '<tr>';
                                        for($j=0; $j<$NumColumnas; $j++)
                                        {
                                            $ContAsientos++;
                                            echo "<td><a href='#' id='".$ContAsientos."' onclick='ValidarAsientos(this.id,".$IDFun.")'>".$ContAsientos."</a></td>";
                                        }
                                        echo '</tr>';
                                    }
                                 ?>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PagoCompra" class="col-sm-4">Forma de pago: </label>
                        <div class="col-sm-8">
                            <a class="btn btn-primary" id="PagoTDC">Tarjeta de crédito / débito</a>
                            <a class="btn btn-warning" id="PagoMTC">Tarjeta Movie Theater Club</a>
                        </div>
                    </div>
                    <div id="PagoTarjeta">  
                        <div class="form-group">
                            <label for="TipoTarjeta" class="col-sm-4">Tipo de tarjeta: </label>
                            <div class="col-sm-8">
                                <select name="TipoTarjeta" class="form-control" id="TipoTarjeta">
                                    <option value="visa">VISA</option>
                                    <option value="mastercard">MasterCard</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NumTarjeta" class="col-sm-4">Número de tarjeta: </label>
                            <div class="col-sm-8">
                                <input type="num" size="16" class="form-control" id="NumTarjeta" onkeypress="return SoloNumerosInput(event);" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CodigoTarjeta" class="col-sm-4">Dígitos de seguridad: </label>
                            <div class="col-sm-8">
                                <input type="text" size="3" class="form-control" id="CodigoTarjeta" onkeypress="return SoloNumerosInput(event);" placeholder="Código de 3 dígitos" maxlength="3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="VencimientoTarjeta" class="col-sm-4">Fecha de vencimiento</label>
                            <div class="col-sm-8">
                                <select name="AnoVencimiento" class="form-control" id="AnoVencimiento">
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                                <select name="MesVencimiento" class="form-control" id="MesVencimiento">
                                    <option value="Enero">Enero</option>
                                    <option value="Febrero">Febrero</option>
                                    <option value="Marzo">Marzo</option>
                                    <option value="Abril">Abril</option>
                                    <option value="Mayo">Mayo</option>
                                    <option value="Junio">Junio</option>
                                    <option value="Julio">Julio</option>
                                    <option value="Agosto">Agosto</option>
                                    <option value="Septiembre">Septiembre</option>
                                    <option value="Octubre">Octubre</option>
                                    <option value="Noviembre">Noviembre</option>
                                    <option value="Diciembre">Diciembre</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CorreoCliente" class="col-sm-4">Correo electrónico: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="CorreoCliente" placeholder="Escribe tu correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                           <a class='btn btn-success btn-lg btn-block' id='PagoConTDC'>Confirmar</a>
                        </div>
                    </div>
                    <div id="PagoPuntos">
                        <div class="form-group">
                            <label for="NumTarjetaSocio" class="col-sm-4">Número de tarjeta:</label>
                            <div class="col-sm-8">
                                <input type="num" size="12" class="form-control" id="NumTarjetaSocio" onkeypress="return SoloNumerosInput(event);" placeholder="XXXX-XXXX-XXXX" maxlength="12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CorreoCliente" class="col-sm-4">Correo electrónico: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="CorreoClienteMTC" placeholder="Escribe tu correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-success btn-lg btn-block" id="PagoConMTC">Confirmar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>

<script>
    var AsientosSeleccionados = [];

    var SoloNumerosInput = function(e)
    {
        var TeclaNumPresionada = window.event ? window.event.keyCode : e.which;
        if ((TeclaNumPresionada == 8) || (TeclaNumPresionada == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(TeclaNumPresionada));
    }

    var ValidarAsientos = function(NumAsiento, FuncionID)
    {
        var cadena = "Seleccionó un asiento: " + NumAsiento;
        var Cont = 0, Aux = 0;
        var valorCSS = 
        {
            background: "green",
            color: "white"
        };
        var valorCSSSeleccionado = 
        {
            background: "none",
            color: "#337ab7"
        };
        while(Cont<=AsientosSeleccionados.length)
        {
            if(AsientosSeleccionados[Cont]==NumAsiento)
            {
                $("#"+NumAsiento).css(valorCSSSeleccionado);
                AsientosSeleccionados.splice(Cont,1);
                var param = "opc=validaasiento"+"&numasiento="+NumAsiento+"&idfuncion="+FuncionID+"&id="+Math.random();
                EnviaPorAJAX(param);
                Cont++;
                break;
            }
            if(AsientosSeleccionados[Cont]!=NumAsiento)
            {
                $("#"+NumAsiento).css(valorCSS);
                AsientosSeleccionados.push(NumAsiento);
                var param = "opc=validaasiento"+"&numasiento="+NumAsiento+"&idfuncion="+FuncionID+"&id="+Math.random();
                EnviaPorAJAX(param);
                break;
            }
            Cont++;
        }
        console.log(NumAsiento);
        console.log(AsientosSeleccionados);
    }

    var EnviaPorAJAX = function(parametros)
    {
        console.log(parametros);
        $.ajax({
            cache: false,
            url: '../../themes/classic/source/asientos.php',
            type: 'POST',
            dataType: 'json',
            data: parametros,
            success:function(response){
                if(response.respuesta==true)
                    console.log("Quitó el asiento "+NumAsiento);
                else
                    console.log("Hay un error de servidor");
            },
            error:function(xhr,ajaxOptions,x){
            }
        });
    }
</script>

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
