<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title> Alterar Dados de Vacina </title>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
        <h3>Alterar Dados de Vacina</h3>
        <form name="nome" action="veralteracao.php" method="post">
            <b>Código da Vacina:</b> <input type="number" name="ID_vacina"><br><br>
            <input type="submit" value="Ok">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'index.php';" value="Voltar">
        </form>
    </body>
</html>