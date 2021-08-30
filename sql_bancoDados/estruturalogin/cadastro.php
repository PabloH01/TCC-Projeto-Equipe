<?php
    include_once("funcoes.php");
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
 <div id="corpo-form">
    <h1>Cadastrar-se</h1>
    <form action="cadastro.php" method="POST">
        <input type="text" name="CPF_usuario" placeholder="Digite seu CPF"><br>
        <input type="text" name="nome_completo" placeholder="Digite seu nome completo"><br>
        <input type="text" name="cod_SUS" placeholder="Digite o número do seu cartão SUS"><br>
        <input type="email" name="email" placeholder="Digite o seu email"><br>
        <input type="password" name="senha" placeholder="Crie uma senha para login"><br>
        <input type="password" name="senhaConf" placeholder="Confirme sua senha de login"><br><br>
        <input type="submit" name="cadastrar" value="CADASTRAR"><br><br>
        <input type='button' onclick="window.location = 'index.php';" value="Fazer login">
    </form>
 </div>
 <?php
if(isset($_POST["cadastrar"])){
    $CPF_usuario = addslashes($_POST["CPF_usuario"]);
    $nome_completo = addslashes($_POST["nome_completo"]);
    $cod_SUS = addslashes($_POST["cod_SUS"]);
    $email = addslashes($_POST["email"]);
    $senha = addslashes($_POST["senha"]);
    $senhaConf = addslashes($_POST["senhaConf"]);
    if(!empty($CPF_usuario) && !empty($nome_completo) && !empty($cod_SUS) && !empty($email) && !empty($senha) && !empty($senhaConf) && ($senha == $senhaConf)){
    cadastrar($CPF_usuario, $nome_completo, $cod_SUS, $email, $senha);
    }else if($senha != $senhaConf){
        echo "As senhas informadas devem ser iguais!";
    }else{
        echo "Preencha todos os campos!";
    }
 }
 ?>
</body>
</html>
