<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<title> Minhas notificações </title>
<body>
<?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
<h3>Minhas notificações</h3>
<?php
	include_once('../conexao.php');
	$CPF_usuario = $_SESSION["CPF_usuario"];

	// ajustando a instrução select para ordenar por data de vacina
	$query = mysqli_query($conexao,"select * from vacinas where CPF_usuario = '$CPF_usuario' and data_vac = CURDATE() order by data_vac asc");

	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao));  
	}else if(mysqli_num_rows($query) == 0){
        echo '<h4>Você não tem nenhuma vacina pendente hoje!</h4>';
    }else{
    echo "<h4>As seguintes vacinas devem ser tomadas hoje!</h4><br>";
    echo "<table border='1px'>";
    echo "<tr><th widht = '30px' align = 'center'>Código</th>
    <th widht = '100px'>Nome da Vacina</th>
    <th widht = '100px'>Fabricante</th>
    <th widht = '100px'>Vacinador</th>
    <th widht = '100px'>Registro Profissional do vacinador</th>
    <th widht = '100px'>Dose</th>
    <th widht = '100px'>Data de Aplicação</th>
    <tr>";
    
    while($dados = mysqli_fetch_array($query)){      
    echo "</tr>";
    echo "<td align = 'center'>" . $dados['ID_vacina'] . "</td>";
    echo "<td align = 'center'>". $dados['nome_vacina'] . "</td>";
    echo "<td align = 'center'>". $dados['fabricante'] . "</td>";
    echo "<td align = 'center'>" . $dados['vacinador'] . "</td>";
    echo "<td align = 'center'>". $dados['regProfVacinador'] . "</td>";
    echo "<td align = 'center'>". $dados['dose'] . "</td>";
    echo "<td align = 'center'>". $dados['data_vac'] . "</td>";
    //  // buscando a na pasta imagem
    //  if (empty($dados['imagem'])) {
    //     $imagem = 'SemImagem.png';
    // } else {
    //     $imagem = $dados['imagem'];
    // }
    // echo "<td align='center'><a href='imagens/$imagem'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
    echo "</tr>";
}
echo "</table>";
}
	mysqli_close($conexao);
?>
<br>
<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>