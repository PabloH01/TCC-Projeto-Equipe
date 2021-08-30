<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Meus Dados</title>
<body>
<h3> Meus Dados</h3>
<?php
  
	session_start();
	if($_SESSION["permissao"] != 2){
		header("Location: ../index.php");
	}

	include_once('../conexao.php');
    include_once('../funcoes.php');
	// recuperando 
    $CPF_usuario = $_SESSION["CPF_usuario"];

	// criando comando SELECT
	$sqlconsulta =  "select CPF_usuario, nome_completo, cod_SUS, email from usuarios where CPF_usuario = '$CPF_usuario'";
	
	// executando SQL
	$resultado = @mysqli_query($conexao, $sqlconsulta);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		$num = @mysqli_num_rows($resultado);
		if ($num==0){
		echo "<b>Código: </b>não localizado!<br><br>";
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		exit;		
		}else{
			$dados=mysqli_fetch_array($resultado);
		}
	} 
	mysqli_close($conexao);
?>
<form action="verdadosuser.php" method="POST">
<b>CPF:</b> <input type="text" class="form-control cpf-mask"  value="<?php echo $dados['CPF_usuario']; ?>" readonly ><br><br>
<b>Nome Completo:</b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['nome_completo']; ?>" readonly ><br><br>
<b>Código do SUS: </b><input type="text" class="form-control" data-mask="000 0000 0000 0000" maxlength="18" autocomplete="off" value="<?php echo $dados['cod_SUS']; ?>" readonly><br><br>
<b>E-mail:</b><input type="email"  maxlength='80' style="width:550px" value="<?php echo $dados['email']; ?>" readonly ><br><br>
<input type='button' onclick="window.location='index.php';" value="Voltar">
<input type="submit" value="SAIR" name="SAIR">
</form>
<?php
  if(isset($_POST["SAIR"])){
    logout();
   }
?>
</body>
</html>
          