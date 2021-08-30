<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title> Consultar Vacinas</title>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
        <h3> Consultar Vacina </h3>
        <form name="nome" action="consultar.php" method="post">
            <b>Código da vacina:</b> <input type="number" name="ID_vacina"><br><br>
            <input type="submit" value="Ok">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'index.php';" value="Voltar">
        </form>
    </body>
</html>