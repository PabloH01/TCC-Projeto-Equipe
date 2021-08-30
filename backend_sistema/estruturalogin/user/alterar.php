<html>
    <meta charset="UTF-8">
    <title> Alteração de Vacinas </title>
    <body>
        <h3> Alteração de Vacinas </h3>
        <?php
          
            session_start();
            if($_SESSION["permissao"] != 2){
                header("Location: ../index.php");
            }

        include_once('../conexao.php');
        // recuperando 
        $ID_vacina = $_POST['ID_vacina'];
        $nome_vacina = $_POST['nome_vacina'];
        $fabricante = $_POST['fabricante'];
        $vacinador = $_POST['vacinador'];
        $regProfVacinador = $_POST['regProfVacinador'];
        $dose = $_POST['dose'];
        $data_vac = $_POST['data_vac'];
        $CPF_usuario = $_SESSION["CPF_usuario"];

        // criando a linha do  UPDATE
        $sqlupdate = "update vacinas set nome_vacina='$nome_vacina', fabricante='$fabricante',vacinador='$vacinador', regProfVacinador = '$regProfVacinador', dose = '$dose', data_vac = '$data_vac' where ID_vacina = '$ID_vacina' and CPF_usuario = '$CPF_usuario'";

        // executando instrução SQL
        $resultado = @mysqli_query($conexao, $sqlupdate);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            echo "Registro Alterado com Sucesso!";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'alteracao.php';" value="Voltar">
    </body>
</html>
