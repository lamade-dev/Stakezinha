<!DOCTYPE html>
<html>
<head>
	<title>Registrar uma casa de operação</title>
	<meta charset="utf-8">
	<?php include "configuracoes.php"; ?>
</head>
<body>
	<div>
		<form method="post" action="" name="form_registrarumacasadeoperacao">
			<table>
				<tr>
					<td>*Nome da casa de operação</td>
					<td><input type="text" name="operacaoNome" required maxlength="50"></td>
				</tr>
				<tr>
					<td>*Saldo(R$)</td>
					<td><input type="text" name="operacaoSaldo" required="" maxlength="10"></td>
				</tr>
				<tr>
					<td>Link de acesso</td>
					<td><input type="text" name="operacaoLink" maxlength="250"></td>
				</tr>

				<tr>
					<td>Credencial de acesso</td>
					<td><input type="text" name="operacaoCredencial" maxlength="50"></td>
				</tr>

				<tr>
					<td>Senha de acesso</td>
					<td><input type="text" name="operacaoSenha" maxlength="20"></td>
				</tr>

				<tr>
					<td><button name="bt_enviar_casadeoperacao">Cadastrar</button></td>
				</tr>
			</table>
		</form>
	</div>

	<?php 
		if (isset($_POST['bt_enviar_casadeoperacao'])) {
			$operacaoNome = $_POST['operacaoNome'];
			$operacaoSaldo = $_POST['operacaoSaldo'];
			$operacaoLink = $_POST['operacaoLink'];
			$operacaoCredencial = $_POST['operacaoCredencial'];
			$operacaoSenha = $_POST['operacaoSenha'];
			$operacaoDataCadastro = date('d/m/Y');
			$operacaoHoraCadastro = date('H:i');

			$consulta = $conn->query("SELECT * FROM registrocasadeoperacao where casadeoperacao_Nome = '$operacaoNome'");
			if (mysqli_num_rows($consulta) > 0 ) {
				
				echo "
					<script type='text/javascript'>
					{
						alert('Essa casa de operação ja esta cadastrada);
					}
					</script>
				";
			}else{
				$sql = "INSERT INTO registrocasadeoperacao (casadeoperacao_Nome, casadeoperacao_Saldo, casadeoperacao_Link, casadeoperacao_Credencial, casadeoperacao_Senha, casadeoperacao_DataCadastro, casadeoperacao_HoraCadastro) VALUES ('$operacaoNome','$operacaoSaldo','$operacaoLink','$operacaoCredencial','$operacaoSenha','$operacaoDataCadastro','$operacaoHoraCadastro')";
					if (mysqli_query($conn, $sql)) {
							
						echo "<script type='text/javascript'>
							{
								alert('Casa de operação cadastrada com sucesso');
								}
							</script>";
						// header('Location:index.php ');
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);

			}
		}
	?>
</body>
</html>