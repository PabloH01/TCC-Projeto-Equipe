<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Incluir Vacinas </title>
    <body>
    <?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
        <h3>Informe os dados da vacina que deseja incluir</h3>
        <form name="nome" action="incluir.php" method="post">
           <b>Nome da Vacina:</b> <input type="text" name="nome_vacina" maxlength='64' style="width:550px"><br><br>
           <b>Fabricante: </b><br><textarea name="fabricante" rows='3' cols='100' style="resize: none;"></textarea><br><br>
           <b>Vacinador:</b> <input type="text" name="vacinador" maxlength='128' style="width:550px"><br><br>
           <b>Registro profissional do vacinador:</b> <input type="text" name="regProfVacinador"  maxlength='10' style="width:550px"><br><br>
           <b>Dose:</b> <input type="text" name="dose"  maxlength='15' style="width:550px"><br><br>
           <!-- <b>Dose:<select name="dose" id="cars" maxlength='80' style="width:550px">
                <option value="primeira">1ª dose</option>
                <option value="segunda">2ª dose</option>
                <option value="terceira">3ª dose</option>
                <option value="quarta">4ª dose</option>
                <option value="quinta">5ª dose</option>
           </select><br><br> -->
           <b>Data de aplicação:</b> <input type="date" name="data_vac" style="width:550px"><br><br>
            <input type="submit" value="Ok">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'index.php';" value="Voltar">
        </form>
    </body>
</html>