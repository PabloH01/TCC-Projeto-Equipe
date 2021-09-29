<!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title> Consultar Vacinas </title>
        <link href="../../../assets/mainEstilos/styleConsultar.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d1fdd19268.js" crossorigin="anonymous"></script>
    </head>
<body>
<?php
  
	session_start();
	if($_SESSION["permissao"] != 2){
		header("Location: ../index.php");
	}

	include_once('../conexao.php');
	// recuperando 
	$ID_vacina = $_POST['ID_vacina'];
    $CPF_usuario = $_SESSION["CPF_usuario"];

	// criando comando SELECT
	$sqlconsulta =  "select * from vacinas where ID_vacina = '$ID_vacina' and CPF_usuario = '$CPF_usuario'";
	
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
                <h3 class="title">Consultar Vacinas</h3>
                <form name="nome" class="form">
					Código da vacina:
					<label class="icon-input">
							<i class="fas fa-address-book icon-mdy"></i>
							<input type="number"  value="<?php echo $dados['ID_vacina']; ?>" readonly >
					</label>
                    Nome da Vacina:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text"  value="<?php echo $dados['nome_vacina']; ?>" readonly >
                    </label>
                    Fabricante:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" value="<?php echo $dados['fabricante']; ?>" readonly >
                        <!-- resize: none -->
                    </label>
                    Vacinador:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text"  value="<?php echo $dados['vacinador']; ?>" readonly >
                    </label>
                    Registro profissional do vacinador:
                    <label class="icon-input">
                        <i class="fas fa-address-book icon-mdy"></i>
                        <input type="text"  value="<?php echo $dados['regProfVacinador']; ?>" readonly >
                    </label>
                    Dose:
                    <label class="icon-input">
                        <i class="fas fa-file-medical icon-mdy"></i>
                        <input type="text" value="<?php echo $dados['dose']; ?>" readonly >
                    </label>
                    Data de aplicação:
                    <label class="icon-input">
                        <i class="fas fa-calendar-day icon-mdy"></i>
                        <input type="text" value="<?php echo $dados['data_vac']; ?>" readonly >
                    </label>
                    <br>
                    <div class="botoes">
                        <button class="btn btn-style2" type='button' onclick="window.location = 'index.php';" value="Voltar">Voltar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
  