<?php
	require("conexion.php");
	require("query_seguro.php");

	function ValidaAsiento()
	{
		$conexion = Conectar();
		$funcion = GetSQLValueString($_POST["idfuncion"],"long");
		$asiento = GetSQLValueString($_POST["numasiento"],"long");
		$ConsultaParaValidar = sprintf("Select A%d from funciones where IDFuncion = %d", $asiento, $funcion);
		echo $ConsultaParaValidar;
		$resConsultaParaValidar = mysql_query($ConsultaParaValidar);
		$respuesta = false;
		if($registro = mysql_fetch_array($resConsultaParaValidar))
		{
			//print_r($registro['A'.$asiento]);
			if($registro['A'.$asiento]!="O")
			{
				$EscogerAsiento = sprintf("Update funciones set A%d='O' where IDFuncion = %d", $asiento, $funcion);
				echo $EscogerAsiento;
				$resEscogerAsiento = mysql_query($EscogerAsiento);
				if(mysql_affected_rows()>0)
					$respuesta = true;
			}
			else
			{
				$EscogerAsiento = sprintf("Update funciones set A%d='D' where IDFuncion = %d", $asiento, $funcion);
				echo $EscogerAsiento;
				$resEscogerAsiento = mysql_query($EscogerAsiento);
				if(mysql_affected_rows()>0)
					$respuesta = true;
			}
		}/**/
		$salidaJSON = array('respuesta' => $respuesta);
		print json_encode($salidaJSON);
	}

	//Aquí se redirecciona hacia los métodos de la clase asientos de acuerdo al valor que reciba de la vista. 
	$opcion = $_POST["opc"];
	switch ($opcion) {
		case 'validaasiento':
			ValidaAsiento();
			break;
		default:
			# code...
			break;
	}
 ?>