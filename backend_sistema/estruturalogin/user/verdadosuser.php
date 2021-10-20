<!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title> Meus Dados</title>
        <link href="../../../assets/mainEstilos/styleDadosUser.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d1fdd19268.js" crossorigin="anonymous"></script>
    </head>
<body>
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
	<div class="content">
            <div class="info">
                <h3 class="title">Meus Dados</h3>
                <form action="verdadosuser.php" method="POST">
				    CPF:
					<label class="icon-input">
							<i class="fas fa-address-book icon-mdy"></i>
							<input type="text" value="<?php echo $dados['CPF_usuario']; ?>" disabled="disabled" >
					</label>
                    Nome Completo:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" value="<?php echo $dados['nome_completo']; ?>" disabled >
                    </label>
                    Código do SUS:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" value="<?php echo $dados['cod_SUS']; ?>" disabled >
                    </label>
                    E-mail:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="email"value="<?php echo $dados['email']; ?>" disabled >
                    </label>
                    <br>
                    <div class="botoes">
                        <button class="btn btn-style2" type='button' onclick="window.location = 'index.php';" value="Voltar">Voltar</button>
						<input class="btn btn-style2" type="submit" value="SAIR" name="SAIR">
                    </div>
                </form>
<?php
  if(isset($_POST["SAIR"])){
    logout();
   }
?>
</body>
</html>
          

