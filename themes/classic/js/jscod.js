var inicio = function()
{
	var PagarConTDC = function()
	{
		$("#PagoPuntos").hide();
		$("#PagoTarjeta").show("slow");
	}

	var PagarConMTC = function()
	{
		$("#PagoTarjeta").hide();
		$("#PagoPuntos").show("slow");
	}

	var HacerCompraTDC = function()
    {
    	var seleccion = $('input:radio[name=CompraOReserva]:checked').val();
        var NumBoletos = $("#NumBoletos").val();
        console.log(AsientosSeleccionados);
        if(NumBoletos >0 && NumBoletos <=100)
        {
        	var IDFuncion 			= $("#FuncionID").val();
        	var TipoTarjeta 		= $("#TipoTarjeta option:selected").val();
        	var NumeroTarjeta 		= $("#NumTarjeta").val();
        	var CodigoSegTarjeta 	= $("#CodigoTarjeta").val();
        	var AnoDeVencimiento 	= $("#AnoVencimiento option:selected").val();
        	var MesDeVencimiento 	= $("#MesVencimiento option:selected").val();
        	var CorreoElectronico 	= $("#CorreoCliente").val();
        	if(NumeroTarjeta.length == 16 && CodigoSegTarjeta.length == 3)
        	{
        		if(CorreoElectronico!="")
        		{
	        		if(CorreoElectronico.indexOf('@', 0) == -1 || CorreoElectronico.indexOf('.', 0) == -1)
	        			alert("Por favor teclea un correo electrónico válido");
        			else
        			{
        				var parametros = "opc=nuevacompra"+"&numboletos="+NumBoletos;
        				for(i=0;i<AsientosSeleccionados.length;i++)
        					parametros+="&arrayasientos[]="+AsientosSeleccionados[i];
        				parametros+=
        				"&tipotarjeta="+TipoTarjeta+"&numerotarjeta="+NumeroTarjeta+"&codigoseguridad="+CodigoSegTarjeta+
        				"&anovencimiento="+AnoDeVencimiento+"&mesvencimiento="+MesDeVencimiento+"&correocliente="+CorreoElectronico+
        				"&idfuncion="+IDFuncion+"&id="+Math.random();

        				console.log(parametros);
        				if(seleccion == "Compra")
        				{
	        				$.ajax({
	        					cache: false,
	        					url: '../../themes/classic/source/venta.php',
	        					type: 'POST',
	        					dataType: 'json',
	        					data: parametros,
	        					success:function(response){
	        						if(response.respuesta==true)
	        							console.log("Se realizó la compra satisfactoriamente");
	        						else
	        							console.log("Hay un error en el servidor");
	        					},
	        					error:function(xhr,ajaxOptions,x){
	        					}
	        				});
        				}
        				else if(seleccion == "Reserva")
        				{
        					$.ajax({
	        					cache: false,
	        					url: '../../themes/classic/source/reserva.php',
	        					type: 'POST',
	        					dataType: 'json',
	        					data: parametros,
	        					success:function(response){
	        						if(response.respuesta==true)
	        							console.log("Se realizó la reserva satisfactoriamente");
	        						else
	        							console.log("Hay un error en el servidor");
	        					},
	        					error:function(xhr,ajaxOptions,x){
	        					}
	        				});
        				}
        			}
        		}
        		else
        			alert("Para continuar con tu compra es importante que introduzca su correo electrónico");
        	}
        	else
        	{
        		$("#NumTarjeta").val("");
        		$("#CodigoTarjeta").val("");
        		alert("Número de tarjeta o código de seguridad inválidos. Introduzcalos de nuevo");
        	}
        }
        else
        	alert("Número de boletos inválido. Seleccione un número entre 1 y 100");
        
    }

    var HacerCompraMTC = function()
    {
        var seleccion = $('input:radio[name=CompraOReserva]:checked').val();
        var NumBoletos = $("#NumBoletos").val();
        console.log(AsientosSeleccionados);
        if(NumBoletos >0 && NumBoletos <=100)
        {
        	var IDFuncion 			= $("#FuncionID").val();
        	var NumeroTarjeta 		= $("#NumTarjetaSocio").val();
        	var CorreoElectronico 	= $("#CorreoClienteMTC").val();
        	if(NumeroTarjeta.length == 12)
        	{
        		if(CorreoElectronico!="")
        		{
	        		if(CorreoElectronico.indexOf('@', 0) == -1 || CorreoElectronico.indexOf('.', 0) == -1)
	        			alert("Por favor teclea un correo electrónico válido");
        			else
        			{
        				var parametros = "opc=nuevacompramtc"+"&numboletos="+NumBoletos;
        				for(i=0;i<AsientosSeleccionados.length;i++)
        					parametros+="&arrayasientos[]="+AsientosSeleccionados[i];
        				parametros+=
        				"&numerotarjetamtc="+NumeroTarjeta+"&correocliente="+CorreoElectronico+
        				"&idfuncion="+IDFuncion+"&id="+Math.random();

        				//console.log(parametros);
        				$.ajax({
							cache: false,
							url: 'https://script.googleusercontent.com/macros/echo?user_content_key=vktegjF6Vzhz7PYYUouZw1XFoxJGWotEA7bItdsxbN8IyH7cYQ3SwnSOyBngEncGY3zCAnSQ8l7yKSisyNFIcqgvSmN84igpm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnDxhSyjKmH9AbcfdU_VaGCgykXMSYby4BIaV6AWssYHxnORgfjWb5D2BLPw4br7l6vcq-VS_OKEU&lib=M1O411MbpctgEe0dKvebaRmKi9CCL4k3d',
							dataType: "json",
							success: function(response){
								console.log(response);
								alert(response.TarjetaSocio[0]);
								data = JSON.parse(response);
								console.log(data);
								alert(data.d[1].TarjetaSocio);
							}
						});
						if(seleccion == "Compra")
						{
							$.ajax({
	        					cache: false,
	        					url: '../../themes/classic/source/venta.php',
	        					type: 'POST',
	        					dataType: 'json',
	        					data: parametros,
	        					success:function(response){
	        						if(response.respuesta==true)
	        							console.log("Se realizó la compra satisfactoriamente");
	        						else
	        							console.log("Hay un error en el servidor");
	        					},
	        					error:function(xhr,ajaxOptions,x){
	        					}
	        				});
						}
						else if(seleccion == "Reserva")
						{
							$.ajax({
	        					cache: false,
	        					url: '../../themes/classic/source/reserva.php',
	        					type: 'POST',
	        					dataType: 'json',
	        					data: parametros,
	        					success:function(response){
	        						if(response.respuesta==true)
	        							console.log("Se realizó la compra satisfactoriamente");
	        						else
	        							console.log("Hay un error en el servidor");
	        					},
	        					error:function(xhr,ajaxOptions,x){
	        					}
	        				});
						}
        			}
        		}
        		else
        			alert("Para continuar con tu compra es importante que introduzca su correo electrónico");
        	}
        	else
        	{
        		$("#NumTarjetaSocio").val("");
        		alert("Número de tarjeta inválido. Introdúzcalo de nuevo");
        	}
        }
        else
        	alert("Número de boletos inválido. Seleccione un número entre 1 y 100");
    }

    //Botones para mostrar la información a introducir para pagar
	$("#PagoTDC").on("click", PagarConTDC);
	$("#PagoMTC").on("click", PagarConMTC);
	
	//Botones para realizar el envío de la información para pagar
	$("#PagoConTDC").on("click", HacerCompraTDC);
	$("#PagoConMTC").on("click", HacerCompraMTC);
}

$(document).on("ready", inicio);