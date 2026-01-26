<?php
$nome = htmlspecialchars($_GET["nome"]);
$cognome = htmlspecialchars($_GET["cognome"]);
$q = $_GET['q'];
$tipo = htmlspecialchars($_GET["tipo"]);

file_put_contents("Vini.json", json_encode([
    "nome" => $nome,
    "cognome" => $cognome,
    "quantita" => $q,
    "tipo" => $tipo
]), JSON_PRETTY_PRINT);
