<!DOCTYPE html>
<html>
<head>
	<title>Registro de entrada</title>
	<meta charset="utf-8">
</head>
<body>

	<form>
		<table>
			<tr>
				<td>Saldo:</td>
				<td>R$ </td>
			</tr>
			<tr>
				<td>Data da entrada</td>
				<td><input type="date" name="entradaData"></td>
			</tr>

			<tr>
				<td>Stake</td>
				<td><input type="text" name="entradaStake"></td>
				<td>ODD</td>
				<td><input type="text" name="entradaODD"></td>
				<td>
					<input type="radio" name="greenOrRed" value="Green"> Green
					<input type="radio" name="greenOrRed" value="Red"> Red
				</td>
			</tr>

			<tr>
				<td><input type="text" name="entradaEquipe1"> x <input type="text" name="entradaEquipe2"></td>
			</tr>
			<tr>
				<td>Mercado</td>
				<td>
					<select></select>
				</td>
			</tr>

			<tr>
				<td>
					<button>Enviar</button>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>