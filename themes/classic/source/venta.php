<?php 
	require("conexion.php");
	require("query_seguro.php");

	function RegistraVenta()
	{
		$conexion 			= Conectar();
		$IDVenta			= rand(1, 25000);
		$FechaVta			= GetSQLValueString(date("Y/m/j"),"date");
		$NumeroBoletos 		= GetSQLValueString($_POST["numboletos"],"long");
		$ArrayAsientos 		= @$_POST['arrayasientos'];
		$TipoDeTarjeta 		= GetSQLValueString($_POST["tipotarjeta"],"text");
		$NumeroDeTarjeta 	= GetSQLValueString(md5($_POST["numerotarjeta"]),"text");
		$CodigoDeSeg 		= GetSQLValueString(md5($_POST["codigoseguridad"]),"text");
		$AnoVenc 			= GetSQLValueString($_POST["anovencimiento"],"text");
		$MesVenc 			= GetSQLValueString($_POST["mesvencimiento"],"text");
		$CorreoCte 			= GetSQLValueString($_POST["correocliente"],"text");
		$FuncionID			= GetSQLValueString($_POST["idfuncion"],"long");

		$conImporteVta = sprintf("Select Precio from funciones where IDFuncion=%d", $FuncionID);
		$ejeImporteVenta = mysql_query($conImporteVta);
		if($registro = mysql_fetch_array($ejeImporteVenta))
		{
			$ImporteVta =  $registro["Precio"] * $NumeroBoletos;
			$InsertaVenta = sprintf("Insert into ventas values(%d,%s,%d,%s,%d)", $IDVenta, $FechaVta, $FuncionID, $CorreoCte, $ImporteVta);
			$resRegistraVta = mysql_query($InsertaVenta);
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
		
		header('Location: ../../../site/page.html?view=boleto&idfuncion='.$FuncionID.'&idventa='.$IDVenta.'&asientos='.$AsientosOcupados);
	}

	function RegistraVentaMTC()
	{
		$conexion 			= Conectar();
		$IDVenta			= rand(1, 25000);
		$FechaVta			= GetSQLValueString(date("Y/m/j"),"date");
		$NumeroBoletos 		= GetSQLValueString($_POST["numboletos"],"long");
		$ArrayAsientos 		= @$_POST['arrayasientos'];
		$NumeroDeTarjeta	= GetSQLValueString($_POST["numerotarjetamtc"],"text");
		$CorreoCte 			= GetSQLValueString($_POST["correocliente"],"text");
		$FuncionID			= GetSQLValueString($_POST["idfuncion"],"long");

		$conImporteVta = sprintf("Select Precio from funciones where IDFuncion=%d", $FuncionID);
		$ejeImporteVenta = mysql_query($conImporteVta);
		if($registro = mysql_fetch_array($ejeImporteVenta))
		{
			$ImporteVta =  $registro["Precio"] * $NumeroBoletos;
			$InsertaVenta = sprintf("Insert into ventas values(%d,%s,%d,%s,%d)", $IDVenta, $FechaVta, $FuncionID, $CorreoCte, $ImporteVta);
			$resRegistraVta = mysql_query($InsertaVenta);
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
		
		header('Location: ../../../site/page.html?view=boleto&idfuncion='.$FuncionID.'&idventa='.$IDVenta.'&asientos='.$AsientosOcupados);
	}

	$opcion = $_POST["opc"];
	switch ($opcion) {
		case 'nuevacompra':
			RegistraVenta();
			break;
		case 'nuevacompramtc':
			RegistraVentaMTC();
		default:
			# code...
			break;
	}
 ?>