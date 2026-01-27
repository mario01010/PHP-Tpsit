<?php
$tipi_json = file_exists("tipi.json") ? file_get_contents("tipi.json") : '';
$tipi = json_decode($tipi_json);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ordine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="app.php" method="get">
        <div class="nome">
            Nome <input type="text" name="nome" required>
        </div>
        <div class="cognome">
            Cognome <input type="text" name="cognome" required>
        </div>
        <div class="q">
            Quantità <input type="number" name="q" min="0" required>
        </div>
        <div class="Tipo">
            Tipo 
            <select name="tipo">
                <?php 
                foreach ($tipi->tipo as $i) {
                    echo "<option value='{$i->id}'>{$i->tipologia}</option>";
                }
                ?>
            </select>
        </div>
        <br>
        <button type="submit">Invia Dati</button>
    </form>
</body>
</html>