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
	
	$("#PagoTDC").on("click", PagarConTDC);
	$("#PagoMTC").on("click", PagarConMTC);
}

$(document).on("ready", inicio);