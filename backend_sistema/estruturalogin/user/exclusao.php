<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Excluir Vacinas </title>
    <link href="../../../assets/mainEstilos/styleExclusao.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1fdd19268.js" crossorigin="anonymous"></script>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
    <div class="content">
        <div class="info">
            <h3> Exclusão de Vacinas</h3>
            <form name="nome" action="verexclusao.php" method="post" class="form">
                    Código da Vacina:
                    <label class="icon-input">
                    <i class="fas fa-file-signature icon-mdy"></i>
                    <input type="number" name="ID_vacina" placeholder="..."><br><br>
                    </label>
                <div class="botoes">
                    <button button class="btn btn-style2" type="submit" value="Ok">Ok</button>
                    <button class="btn btn-style2" type="reset" value="Limpar">Limpar</button>
                    <button class="btn btn-style2" type='button' onclick="window.location = 'index.php';" value="Voltar">Voltar</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>