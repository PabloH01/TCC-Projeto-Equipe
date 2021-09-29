<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title> Incluir Vacinas </title>
        <link href="../../../assets/mainEstilos/styleIncluir.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d1fdd19268.js" crossorigin="anonymous"></script>
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
                    Nome da Vacina:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" name="nome_vacina" placeholder="...">
                    </label>
                    Fabricante:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" name="fabricante" placeholder="...">
                        <!-- resize: none -->
                    </label>
                    Vacinador:
                    <label class="icon-input">
                        <i class="fas fa-file-signature icon-mdy"></i>
                        <input type="text" name="vacinador" placeholder="...">
                    </label>
                    Registro profissional do vacinador:
                    <label class="icon-input">
                        <i class="fas fa-address-book icon-mdy"></i>
                        <input type="text" name="regProfVacinador" placeholder="...">
                    </label>
                    Dose:
                    <label class="icon-input">
                        <i class="fas fa-file-medical icon-mdy"></i>
                        <input type="text" name="dose" placeholder="...">
                    </label>
                    Data de aplicação:
                    <label class="icon-input">
                        <i class="fas fa-calendar-day icon-mdy"></i>
                        <input type="date" name="data_vac" placeholder="...">
                    </label>
                    <!-- <b>Dose:<select name="dose" id="cars" maxlength='80' style="width:550px">
                            <option value="primeira">1ª dose</option>
                            <option value="segunda">2ª dose</option>
                            <option value="terceira">3ª dose</option>
                            <option value="quarta">4ª dose</option>
                            <option value="quinta">5ª dose</option>
                    </select><br><br> -->
                    <br>
                    <div class="botoes">
                        <button class="btn btn-style2" type="submit" value="Ok">Incluir</button>
                        <button class="btn btn-style2" type="reset" value="Limpar">Limpar</button>
                        <button class="btn btn-style2" type='button' onclick="window.location = 'index.php';" value="Voltar">Voltar</button>
                    </div>
                </form>
            </div>
            <!-- Colocar img
            <div class="imagem">
                <img src="../assets/imgs/vacincluir.jpg" alt="some text">
            </div>
            FAZER A VERIFICAÇÃO DE CAMPOS VAZIOS IGUAL A DA TELA DE CADASTRO!!!!!!!!
            -->
        </div>
    </body>
</html>