<?php
    include_once("funcoes.php");
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
 <div id="corpo-form">
    <h1>Entrar</h1>
    <form action="index.php" method="POST">
        <input type="text" name="cpfusuario" placeholder="Informe seu CPF"><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="ACESSAR" name="acessar"><br><br>
        <input type='button' onclick="window.location = 'cadastro.php';" value="Cadastrar-se">
    </form>
 </div>
 <?php
if(isset($_POST["acessar"])){
 $cpfusuario = addslashes($_POST["cpfusuario"]);
 $senha = addslashes($_POST["senha"]);
 if(!empty($cpfusuario) && !empty($senha)){
 logar($cpfusuario, $senha);
}else{
    echo "Preencha todos os campos!";
}
}
 ?>
</body>
</html>