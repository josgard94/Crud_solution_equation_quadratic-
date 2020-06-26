<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="jquery/script_ecu.js"></script>

	<style type="text/css">
		table, tr, td, th
		{
			border: 1px solid;
			text-align: center;
		}
		input
		{
			text-align: center;
			width: 20%;
		}
	</style>
</head>
<body>
	<center>
	<form>
		<h3>Calcular ecuación cuadratica</h3>
		<table>
			<tr>
				<th><label>A</label></th>
				<th><label>B</label></th>
				<th><label>C</label></th>
				<th></th>
			</tr>
			<tr>
				<td><input id="input_A" type="text" name="num_a"><label>x<sup>2</sup></label></td>
				<td><input id="input_B" type="text" name="num_b"><label>x</label></td>
				<td><input id="input_C" type="text" name="num_c"></td>
				<td><label>= 0</label></td>
			</tr>
			<tr>
				<td colspan="4"><input id="submit" type="button" name="enviar" value="calcular"> <input id = "clear" type="button" name="Limpiar" value="Limpiar">  </td>
							</tr>
						</table>
					</form>
					</center>
				"
	<center> 
		<br><br><br><br><br>
		<div id = "resultado">
			<!--Aqui  se muestra el resultado de la ecuación-->
		</div>
	</center>
</body>
</html>