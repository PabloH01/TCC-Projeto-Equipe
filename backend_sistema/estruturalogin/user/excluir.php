<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Excluir Vacinas </title>
    <body>
        <h3>Excluir Vacinas</h3>
        <?php

            session_start();
            if($_SESSION["permissao"] != 2){
                header("Location: ../index.php");
            }
        include_once('../conexao.php');
        // recuperando 
        $ID_vacina = $_POST['ID_vacina'];
        $CPF_usuario = $_SESSION["CPF_usuario"];

        // criando a linha do  DELETE
        $sqldelete = "delete from  vacinas where ID_vacina = '$ID_vacina' and CPF_usuario = '$CPF_usuario'";

        // executando instrução SQL
        $resultado = @mysqli_query($conexao, $sqldelete);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            echo "Registro Excluído com Sucesso!";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'exclusao.php';" value="Voltar">
    </body>
</html>