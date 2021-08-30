<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title> Incluir Vacinas </title>
    <body>
        <h3> Inclusão de Vacinas</h3>
        <?php
      
            session_start();
            if($_SESSION["permissao"] != 2){
                header("Location: ../index.php");
            }
   
        include_once('../conexao.php');
        // recuperando 
        $nome_vacina = $_POST['nome_vacina'];
        $fabricante = $_POST['fabricante'];
        $vacinador = $_POST['vacinador'];
        $regProfVacinador = $_POST['regProfVacinador'];
        $dose = $_POST['dose'];
        $data_vac = $_POST['data_vac'];
        $CPF_usuario = $_SESSION["CPF_usuario"];

        // criando a linha de INSERT
        $sqlinsert = "insert into vacinas (nome_vacina, fabricante, vacinador, regProfVacinador, dose, data_vac, CPF_usuario) values ('$nome_vacina', '$fabricante', '$vacinador', '$regProfVacinador', '$dose', '$data_vac', '$CPF_usuario')";

        // executando instrução SQL
        $resultado = @mysqli_query($conexao, $sqlinsert);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            echo "Vacina registrada com sucesso!";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'index.php';" value="Voltar">
    </body>
</html>