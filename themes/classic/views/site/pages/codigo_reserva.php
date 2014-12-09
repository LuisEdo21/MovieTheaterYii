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
<section id="boleto">
    <h1>Aquí está tu código de reserva - Movie Theater: El cine como nunca lo imaginaste</h1>
    <h4>Recuerda presentarte al menos media hora antes del comienzo de la función en taquilla; de lo contrario se te descontará la mitad del monto total de tu compra por cargos de penalización.</h4>
    <div class="row" align="center">
        <?php
            $IDFun = $_GET['idfuncion'];
            $IDVen = $_GET['idventa'];

            function Conectar()
            {
                $conecta = mysql_connect("localhost","root","");
                mysql_select_db("movie_theater");
                return $conecta;
            }

            $Conexion = Conectar();

            $ConsultaObtieneIDPelicula = sprintf("Select IDPelicula from funciones where IDFuncion=%d",$IDFun);
            $ObtieneIDPelicula = mysql_query($ConsultaObtieneIDPelicula);
            if($registro = mysql_fetch_array($ObtieneIDPelicula))
            {
                //Devuelve el nombre de la película
                $IDPelicula = $registro["IDPelicula"];
                $ConsultaNomPel = sprintf("Select NombrePelicula from peliculas where IDPelicula=%d",$IDPelicula);
                $ResConsultaNomPel = mysql_query($ConsultaNomPel);
                $registroPelicula = mysql_fetch_array($ResConsultaNomPel);
                
                //Obtiene el ID de la sala para sacar el número, tipo y cine.
                $ConsultaSala = sprintf("Select IDSala from funciones where IDFuncion=%d",$IDFun);
                $ResConsultaSala = mysql_query($ConsultaSala);
                $registroSala = mysql_fetch_array($ResConsultaSala);
                $IDSala = $registroSala["IDSala"];
                $ConsultaCineYSala = sprintf("Select IDCine, NumSala, TipoSala from salas where IDSala=%d",$IDSala);
                $ResConsultaCineYSala = mysql_query($ConsultaCineYSala);
                $registroCineYSala = mysql_fetch_array($ResConsultaCineYSala);

                //Obtiene el horario de la función
                $ConsultaHorario = sprintf("Select Horario from funciones where IDFuncion=%s",$IDFun);
                $ResConsultaHorario = mysql_query($ConsultaHorario);
                $registroHorario = mysql_fetch_array($ResConsultaHorario);

                //Obtiene el importe total de la reserva:
                $ConsultaImporte = sprintf("Select ImporteReserva from reservas where IDReserva=%d",$IDVen);
                $ResConsultaImporte = mysql_query($ConsultaImporte);
                $registroImporte = mysql_fetch_array($ResConsultaImporte);

                //Asigna las variables que se utilizarán para imprimir los valores
                $HoraFuncion = $registroHorario["Horario"];
                $NomPelicula = $registroPelicula["NombrePelicula"];
                $NumSala = $registroCineYSala['NumSala'];
                $TipoSala = $registroCineYSala['TipoSala'];
                $IDCine = $registroCineYSala['IDCine'];
                $ImporteRes = $registroImporte['ImporteReserva'];

                echo "<h2>".$NomPelicula."</h2>";
                
                if($IDCine == 1)
                    echo "<h3><strong>Complejo: </strong>Movie Theater Las Quintas</h3>";
                else
                    echo "<h3><strong>Complejo: </strong>Movie Theater Las Torres</h3>";

                echo "<h3><strong>Sala #".$NumSala."</strong> (".$TipoSala.")</h3>";

                echo "<h3><strong>Fecha: </strong>".date("Y/m/j").".</h3>";

                echo "<h3><strong>Hora: </strong>".$HoraFuncion." hrs.</h3>";

                echo "<h2><strong>Código de reservación: </strong>".$IDVen."</h2>";

                echo "<h2><strong>TOTAL: </strong>$".$ImporteRes.".00</h2>";
            }
         ?>
    </div>
</section>