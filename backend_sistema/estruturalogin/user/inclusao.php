<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title> Incluir Vacinas </title>
        <link href="/TCC-Projeto-Equipe/assets/mainEstilos/styleIncluir.css" rel="stylesheet">
    </head>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
        <div class="content">
            <div class="info">
                <h3 class="title">Informe os dados da vacina que deseja incluir</h3>
                <form name="nome" action="incluir.php" method="post" class="form">
                    <label class="icon-input">
                        Nome da Vacina:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="text" name="nome_vacina" placeholder="Exemplo: ...">
                    </label>
                    <label class="icon-input">
                        Fabricante:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="text" name="fabricante" placeholder="Exemplo: ...">
                        <!-- resize: none -->
                    </label>
                    <label class="icon-input">
                        Vacinador:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="text" name="vacinador" placeholder="Exemplo: ...">
                    </label>
                    <label class="icon-input">
                        Registro profissional do vacinador:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="text" name="regProfVacinador" placeholder="Exemplo: ...">
                    </label>
                    <label class="icon-input">
                        Dose:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="text" name="dose" placeholder="Exemplo: ...">
                    </label>
                    <label class="icon-input">
                        Data de aplicação:
                        <i class="fas fa-user icon-mdy"></i>
                        <input type="date" name="data_vac" placeholder="Exemplo: ...">
                    </label>
                    <!-- <b>Dose:<select name="dose" id="cars" maxlength='80' style="width:550px">
                            <option value="primeira">1ª dose</option>
                            <option value="segunda">2ª dose</option>
                            <option value="terceira">3ª dose</option>
                            <option value="quarta">4ª dose</option>
                            <option value="quinta">5ª dose</option>
                    </select><br><br> -->
                    <br>
                    <input type="submit" value="Ok">
                    <input type="reset" value="Limpar">
                    <input type='button' onclick="window.location = 'index.php';" value="Voltar">
                </form>
            </div>
        </div>
    </body>
</html>