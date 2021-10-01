<html>
    <head>
        <meta charset="UTF-8">
        <title>Apppropinas</title>
    </head>
    <body>
        <FORM METHOD="POST" ACTION="Processes\calculo.proc.php">
            <b>AppPropina</b><br><br>
            <INPUT placeholder="Total de la cuenta" TYPE="NUMBER" NAME="cuenta"><br><br>
            ¿Cómo fue el servicio?<br>
            <select NAME="servicio">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1">10% Normal</option>
                <option value="0.05">5% Malo</option>
            </select><br>
            <br>
            <INPUT placeholder="Cuantas personas van a pagar" TYPE="NUMBER" NAME="personas"><br>
            <br>
            <INPUT TYPE="SUBMIT" value="Calcular" name="submit">
        </FORM>
        <?php
            if(isset($_REQUEST['calc'])){
                echo "<h3>".$_REQUEST['res']." por persona</h3>";
            }

            
        ?>
    </body>  
</html>