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
                        <label for="NumBoletos" class="col-sm-4">Número de boletos: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="NumBoletos" min="1" max="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="AsientosCompra" class="col-sm-4">Selecciona asientos: </label>
                        <div class="col-sm-8">
                            <table id="MatrizDeAsientos">
                                <tr>
                                    <td><a href="#" id="A01" onclick="ValidarAsientos(this.id)">1</a></td>
                                    <td><a href="#" id="A02" onclick="ValidarAsientos(this.id)">2</a></td>
                                    <td><a href="#" id="A03" onclick="ValidarAsientos(this.id)">3</a></td>
                                    <td><a href="#" id="A04" onclick="ValidarAsientos(this.id)">4</a></td>
                                    <td><a href="#" id="A05" onclick="ValidarAsientos(this.id)">5</a></td>
                                    <td><a href="#" id="A06" onclick="ValidarAsientos(this.id)">6</a></td>
                                    <td><a href="#" id="A07" onclick="ValidarAsientos(this.id)">7</a></td>
                                    <td><a href="#" id="A08" onclick="ValidarAsientos(this.id)">8</a></td>
                                    <td><a href="#" id="A09" onclick="ValidarAsientos(this.id)">9</a></td>
                                    <td><a href="#" id="A10" onclick="ValidarAsientos(this.id)">10</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A11" onclick="ValidarAsientos(this.id)">11</a></td>
                                    <td><a href="#" id="A12" onclick="ValidarAsientos(this.id)">12</a></td>
                                    <td><a href="#" id="A13" onclick="ValidarAsientos(this.id)">13</a></td>
                                    <td><a href="#" id="A14" onclick="ValidarAsientos(this.id)">14</a></td>
                                    <td><a href="#" id="A15" onclick="ValidarAsientos(this.id)">15</a></td>
                                    <td><a href="#" id="A16" onclick="ValidarAsientos(this.id)">16</a></td>
                                    <td><a href="#" id="A17" onclick="ValidarAsientos(this.id)">17</a></td>
                                    <td><a href="#" id="A18" onclick="ValidarAsientos(this.id)">18</a></td>
                                    <td><a href="#" id="A19" onclick="ValidarAsientos(this.id)">19</a></td>
                                    <td><a href="#" id="A20" onclick="ValidarAsientos(this.id)">20</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A21" onclick="ValidarAsientos(this.id)">21</a></td>
                                    <td><a href="#" id="A22" onclick="ValidarAsientos(this.id)">22</a></td>
                                    <td><a href="#" id="A23" onclick="ValidarAsientos(this.id)">23</a></td>
                                    <td><a href="#" id="A24" onclick="ValidarAsientos(this.id)">24</a></td>
                                    <td><a href="#" id="A25" onclick="ValidarAsientos(this.id)">25</a></td>
                                    <td><a href="#" id="A26" onclick="ValidarAsientos(this.id)">26</a></td>
                                    <td><a href="#" id="A27" onclick="ValidarAsientos(this.id)">27</a></td>
                                    <td><a href="#" id="A28" onclick="ValidarAsientos(this.id)">28</a></td>
                                    <td><a href="#" id="A29" onclick="ValidarAsientos(this.id)">29</a></td>
                                    <td><a href="#" id="A30" onclick="ValidarAsientos(this.id)">30</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A31" onclick="ValidarAsientos(this.id)">31</a></td>
                                    <td><a href="#" id="A32" onclick="ValidarAsientos(this.id)">32</a></td>
                                    <td><a href="#" id="A33" onclick="ValidarAsientos(this.id)">33</a></td>
                                    <td><a href="#" id="A34" onclick="ValidarAsientos(this.id)">34</a></td>
                                    <td><a href="#" id="A35" onclick="ValidarAsientos(this.id)">35</a></td>
                                    <td><a href="#" id="A36" onclick="ValidarAsientos(this.id)">36</a></td>
                                    <td><a href="#" id="A37" onclick="ValidarAsientos(this.id)">37</a></td>
                                    <td><a href="#" id="A38" onclick="ValidarAsientos(this.id)">38</a></td>
                                    <td><a href="#" id="A39" onclick="ValidarAsientos(this.id)">39</a></td>
                                    <td><a href="#" id="A40" onclick="ValidarAsientos(this.id)">40</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A41" onclick="ValidarAsientos(this.id)">41</a></td>
                                    <td><a href="#" id="A42" onclick="ValidarAsientos(this.id)">42</a></td>
                                    <td><a href="#" id="A43" onclick="ValidarAsientos(this.id)">43</a></td>
                                    <td><a href="#" id="A44" onclick="ValidarAsientos(this.id)">44</a></td>
                                    <td><a href="#" id="A45" onclick="ValidarAsientos(this.id)">45</a></td>
                                    <td><a href="#" id="A46" onclick="ValidarAsientos(this.id)">46</a></td>
                                    <td><a href="#" id="A47" onclick="ValidarAsientos(this.id)">47</a></td>
                                    <td><a href="#" id="A48" onclick="ValidarAsientos(this.id)">48</a></td>
                                    <td><a href="#" id="A49" onclick="ValidarAsientos(this.id)">49</a></td>
                                    <td><a href="#" id="A50" onclick="ValidarAsientos(this.id)">50</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A51" onclick="ValidarAsientos(this.id)">51</a></td>
                                    <td><a href="#" id="A52" onclick="ValidarAsientos(this.id)">52</a></td>
                                    <td><a href="#" id="A53" onclick="ValidarAsientos(this.id)">53</a></td>
                                    <td><a href="#" id="A54" onclick="ValidarAsientos(this.id)">54</a></td>
                                    <td><a href="#" id="A55" onclick="ValidarAsientos(this.id)">55</a></td>
                                    <td><a href="#" id="A56" onclick="ValidarAsientos(this.id)">56</a></td>
                                    <td><a href="#" id="A57" onclick="ValidarAsientos(this.id)">57</a></td>
                                    <td><a href="#" id="A58" onclick="ValidarAsientos(this.id)">58</a></td>
                                    <td><a href="#" id="A59" onclick="ValidarAsientos(this.id)">59</a></td>
                                    <td><a href="#" id="A60" onclick="ValidarAsientos(this.id)">60</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A61" onclick="ValidarAsientos(this.id)">61</a></td>
                                    <td><a href="#" id="A62" onclick="ValidarAsientos(this.id)">62</a></td>
                                    <td><a href="#" id="A63" onclick="ValidarAsientos(this.id)">63</a></td>
                                    <td><a href="#" id="A64" onclick="ValidarAsientos(this.id)">64</a></td>
                                    <td><a href="#" id="A65" onclick="ValidarAsientos(this.id)">65</a></td>
                                    <td><a href="#" id="A66" onclick="ValidarAsientos(this.id)">66</a></td>
                                    <td><a href="#" id="A67" onclick="ValidarAsientos(this.id)">67</a></td>
                                    <td><a href="#" id="A68" onclick="ValidarAsientos(this.id)">68</a></td>
                                    <td><a href="#" id="A69" onclick="ValidarAsientos(this.id)">69</a></td>
                                    <td><a href="#" id="A70" onclick="ValidarAsientos(this.id)">70</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A71" onclick="ValidarAsientos(this.id)">71</a></td>
                                    <td><a href="#" id="A72" onclick="ValidarAsientos(this.id)">72</a></td>
                                    <td><a href="#" id="A73" onclick="ValidarAsientos(this.id)">73</a></td>
                                    <td><a href="#" id="A74" onclick="ValidarAsientos(this.id)">74</a></td>
                                    <td><a href="#" id="A75" onclick="ValidarAsientos(this.id)">75</a></td>
                                    <td><a href="#" id="A76" onclick="ValidarAsientos(this.id)">76</a></td>
                                    <td><a href="#" id="A77" onclick="ValidarAsientos(this.id)">77</a></td>
                                    <td><a href="#" id="A78" onclick="ValidarAsientos(this.id)">78</a></td>
                                    <td><a href="#" id="A79" onclick="ValidarAsientos(this.id)">79</a></td>
                                    <td><a href="#" id="A80" onclick="ValidarAsientos(this.id)">80</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A81" onclick="ValidarAsientos(this.id)">81</a></td>
                                    <td><a href="#" id="A82" onclick="ValidarAsientos(this.id)">82</a></td>
                                    <td><a href="#" id="A83" onclick="ValidarAsientos(this.id)">83</a></td>
                                    <td><a href="#" id="A84" onclick="ValidarAsientos(this.id)">84</a></td>
                                    <td><a href="#" id="A85" onclick="ValidarAsientos(this.id)">85</a></td>
                                    <td><a href="#" id="A86" onclick="ValidarAsientos(this.id)">86</a></td>
                                    <td><a href="#" id="A87" onclick="ValidarAsientos(this.id)">87</a></td>
                                    <td><a href="#" id="A88" onclick="ValidarAsientos(this.id)">88</a></td>
                                    <td><a href="#" id="A89" onclick="ValidarAsientos(this.id)">89</a></td>
                                    <td><a href="#" id="A90" onclick="ValidarAsientos(this.id)">90</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" id="A91" onclick="ValidarAsientos(this.id)">91</a></td>
                                    <td><a href="#" id="A92" onclick="ValidarAsientos(this.id)">92</a></td>
                                    <td><a href="#" id="A93" onclick="ValidarAsientos(this.id)">93</a></td>
                                    <td><a href="#" id="A94" onclick="ValidarAsientos(this.id)">94</a></td>
                                    <td><a href="#" id="A95" onclick="ValidarAsientos(this.id)">95</a></td>
                                    <td><a href="#" id="A96" onclick="ValidarAsientos(this.id)">96</a></td>
                                    <td><a href="#" id="A97" onclick="ValidarAsientos(this.id)">97</a></td>
                                    <td><a href="#" id="A98" onclick="ValidarAsientos(this.id)">98</a></td>
                                    <td><a href="#" id="A99" onclick="ValidarAsientos(this.id)">99</a></td>
                                    <td><a href="#" id="A100" onclick="ValidarAsientos(this.id)">100</a></td>
                                </tr>
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
                                <select name="TipoTarjeta" class="form-control">
                                    <option value="visa">VISA</option>
                                    <option value="martercard">Master Card</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NumTarjeta" class="col-sm-4">Número de tarjeta: </label>
                            <div class="col-sm-8">
                                <input type="num" size="16" class="form-control" id="NumTarjeta" placeholder="XXXX-XXXX-XXXX-XXXX">
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
                        <div class="form-group">
                            <label for="CorreoCliente" class="col-sm-4">Correo electrónico: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="CorreoCliente" placeholder="Escribe tu correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Confirmar</button>
                        </div>
                    </div>
                    <div id="PagoPuntos">
                        <div class="form-group">
                            <label for="NumTarjetaSocio" class="col-sm-4">Número de tarjeta:</label>
                            <div class="col-sm-8">
                                <input type="num" size="12" class="form-control" id="NumTarjetaSocio" placeholder="XXXX-XXXX-XXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CorreoCliente" class="col-sm-4">Correo electrónico: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="CorreoCliente" placeholder="Escribe tu correo electrónico">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>

<script>
    var ValidarAsientos = function(NumAsiento)
    {
        var cadena = "Seleccionó un asiento: " + NumAsiento;
        /*var parametros = "opc=validaasiento"+"&numasiento="+NumAsiento;
        $.ajax({
            cache: false,
            url: "source/asientos.php",
            type: "POST",
            dataType: "json",
            data: parametros,
            success: function(response){
                if(response.respuesta == true)
                {

                }
            }
        });*/
        var valorCSS = 
        {
            background: "green",
            color: "white"
        };
        $("#"+NumAsiento).css(valorCSS);
        console.log(NumAsiento);
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
