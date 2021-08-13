<!DOCTYPE html>
<html>
<style type="text/css">
	
</style>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body style="background-color: #ff0332;">
	<h1>ALUGUEL DE VEICULOS</h1>	
	<form method="post" action="controllers/controllersLocation.php" name="formLocation" id="formLocation" >
		Data de entrada: <input type="date" name="entryDate" id="entryDate" require/> - <input type="time" name="entryTime" id="entryTime" require/><br>
		<hr>		
		Data de saida  : <input type="date" name="departureDate" id="departureDate" require/> - <input type="time" name="departureTime" id="departureTime" require/><br>
		<hr>		
		<input type="submit" value="alugar	"/>
	</form>
	<div style="border:1px solid #000; padding: 10px;margin-top: 10px;">
		<h2>TABELA DE PREÇOS</h2>
			<h3>1 Ano ................. R$15.000</h3>	
			<h3>1 Mês ................. R$1.800</h3>	
			<h3>1 Dia ................. R$60</h3>	
			<h3>+30 Minutos ......R$5</h3>	
			<h3>1 ano ................. R$15.000</h3>	
			
	</div>
</body>
</html>