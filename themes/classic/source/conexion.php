<?php 

	function Conectar()
	{
		$conecta = mysql_connect("localhost","root","");
		mysql_select_db("movie_theater");
		return $conecta;
	}
 ?>