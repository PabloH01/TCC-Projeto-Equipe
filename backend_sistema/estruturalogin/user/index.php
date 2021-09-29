<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <?php
        session_start();
        if($_SESSION["permissao"] == 2){
            echo "Bem vindo! " . $_SESSION["CPF_usuario"];
        }else{
            header("Location: ../index.php");
        }
    ?>
    <title>carteira de vacinação digital</title>
    <body>
        <h3>O que deseja fazer na carteira de vacinação digital?</h3>
        <a href='inclusao.php'>Incluir uma nova vacina em minha carteira</a><br>
        <a href='consulta.php'>Consultar uma vacina em minha carteira</a><br>
        <a href='geral.php'>Vizualizar minha carteira</a><br>
        <a href='exclusao.php'>Excluir uma vacina da minha carteira</a><br>
        <a href='alteracao.php'>Alterar os dados de uma vacina em minha carteira</a><br>
        <a href='notificacao.php'>Minhas notificações</a><br>
        <a href='verdadosuser.php'>Meus Dados</a><br>
    </body>
</html>


