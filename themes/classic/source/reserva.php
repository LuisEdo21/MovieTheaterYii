<?php 
	require("conexion.php");
	require("query_seguro.php");

	function RegistraReserva()
	{
		$conexion 			= Conectar();
		$IDReserva			= rand(1, 25000);
		$FechaRes			= GetSQLValueString(date("Y/m/j"),"date");
		$NumeroBoletos 		= GetSQLValueString($_POST["numboletos"],"long");
		$ArrayAsientos 		= @$_POST['arrayasientos'];
		$TipoDeTarjeta 		= GetSQLValueString($_POST["tipotarjeta"],"text");
		$NumeroDeTarjeta 	= GetSQLValueString(md5($_POST["numerotarjeta"]),"text");
		$CodigoDeSeg 		= GetSQLValueString(md5($_POST["codigoseguridad"]),"text");
		$AnoVenc 			= GetSQLValueString($_POST["anovencimiento"],"text");
		$MesVenc 			= GetSQLValueString($_POST["mesvencimiento"],"text");
		$CorreoCte 			= GetSQLValueString($_POST["correocliente"],"text");
		$FuncionID			= GetSQLValueString($_POST["idfuncion"],"long");

		$conImporteRes = sprintf("Select Precio from funciones where IDFuncion=%d", $FuncionID);
		$ejeImporteReserva = mysql_query($conImporteRes);
		if($registro = mysql_fetch_array($ejeImporteReserva))
		{
			$ImporteReserva =  $registro["Precio"] * $NumeroBoletos;
			$InsertaReserva = sprintf("Insert into reservas values(%d,%s,%d,%s,%d)", $IDReserva, $FechaRes, $FuncionID, $CorreoCte, $ImporteReserva);
			$resRegistraRes = mysql_query($InsertaReserva);
			//$NombrePelicula = sprintf("Select ")
			if(mysql_affected_rows()>0)
				$respuesta = true;
		}

		$AsientosOcupados = "";

		for($i=0;$i<count($ArrayAsientos);$i++)
		{
			if($i == count($ArrayAsientos)-1)
				$AsientosOcupados .= $ArrayAsientos[$i];
			else
				$AsientosOcupados .= $ArrayAsientos[$i].', ';
		}

		header('Location: ../../../site/page.html?view=codigo_reserva&idfuncion='.$FuncionID.'&idventa='.$IDReserva.'&asientos='.$AsientosOcupados);
	}

	function RegistraReservaMTC()
	{
		$conexion 			= Conectar();
		$IDReserva			= rand(1, 25000);
		$FechaRes			= GetSQLValueString(date("Y/m/j"),"date");
		$NumeroBoletos 		= GetSQLValueString($_POST["numboletos"],"long");
		$ArrayAsientos 		= @$_POST['arrayasientos'];
		$NumeroDeTarjeta	= GetSQLValueString($_POST["numerotarjetamtc"],"text");
		$CorreoCte 			= GetSQLValueString($_POST["correocliente"],"text");
		$FuncionID			= GetSQLValueString($_POST["idfuncion"],"long");
		
		$conImporteRes = sprintf("Select Precio from funciones where IDFuncion=%d", $FuncionID);
		$ejeImporteReserva = mysql_query($conImporteRes);
		if($registro = mysql_fetch_array($ejeImporteReserva))
		{
			$ImporteReserva =  $registro["Precio"] * $NumeroBoletos;
			$InsertaReserva = sprintf("Insert into reservas values(%d,%s,%d,%s,%d)", $IDReserva, $FechaRes, $FuncionID, $CorreoCte, $ImporteReserva);
			$resRegistraRes = mysql_query($InsertaReserva);
			//$NombrePelicula = sprintf("Select ")
			if(mysql_affected_rows()>0)
				$respuesta = true;
		}

		$AsientosOcupados = "";

		for($i=0;$i<count($ArrayAsientos);$i++)
		{
			if($i == count($ArrayAsientos)-1)
				$AsientosOcupados .= $ArrayAsientos[$i];
			else
				$AsientosOcupados .= $ArrayAsientos[$i].', ';
		}

		header('Location: ../../../site/page.html?view=codigo_reserva&idfuncion='.$FuncionID.'&idventa='.$IDReserva.'&asientos='.$AsientosOcupados);
	}

	$opcion = $_POST["opc"];
	switch ($opcion) {
		case 'nuevacompra':
			RegistraReserva();
			break;
		case 'nuevacompramtc':
			RegistraReservaMTC();
		default:
			# code...
			break;
	}
 ?>