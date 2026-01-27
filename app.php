<?php
$nome = htmlspecialchars($_GET["nome"]);
$cognome = htmlspecialchars($_GET["cognome"]);
$q = htmlspecialchars($_GET['q']);
$tipo = htmlspecialchars($_GET["tipo"]);
$file = "Vini.json";

$array_dati = (file_exists($file) && filesize($file) > 0) ? json_decode(file_get_contents($file), true) : [];

$nuovo_vino = [
    "nome"     => $nome,
    "cognome"  => $cognome,
    "quantita" => $q,
    "tipo"     => $tipo
];

$array_dati[] = $nuovo_vino;
file_put_contents($file, json_encode($array_dati, JSON_PRETTY_PRINT));

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Ricevuta</title>
</head>
<body>
    <div class="receipt">
        <div class="receipt-header">
            <h1>Ricevuta vino</h1>
            <p>ID ORDINE: <?php echo rand(100, 999); ?></p>
        </div>

        <div class="info-row">
            <span class="label">Prodotto</span>
            <span class="value"><?php echo "$nome $cognome"; ?> (ID: <?php echo $tipo; ?>)</span>
        </div>

        <div class="divider"></div>

        <div class="total-box">
            <span class="total-label">QUANTITÀ</span>
            <span class="total-amount"><?php echo $q; ?> Ml</span>
        </div>

        <p class="footer-msg">Dati salvati in Vini.json</p>
        <a href="index.php" class="btn-back">Ordina ancora</a>
    </div>
</body>
</html>