<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Excluir Vacinas </title>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
        <h3> Exclusão de Vacinas</h3>
        <form name="nome" action="verexclusao.php" method="post">
            <b>Código da vacina:</b> <input type="number" name="ID_vacina"><br><br>
            <input type="submit" value="Ok">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'index.php';" value="Voltar">
        </form>
    </body>
</html>