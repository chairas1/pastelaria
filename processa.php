<?php
include_once("config.php");

$sabor = filter_input(INPUT_POST, 'sabor', FILTER_SANITIZE_STRING);
$ingredientes = filter_input(INPUT_POST, 'ingredientes', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);

echo "Sabor: $sabor <br>";
echo "Ingredientes: $ingredientes <br>";
echo "Valor: $valor <br>";

$result_pasteis = "INSERT INTO pasteis (sabor, ingredientes, valor) VALUES ('$sabor', '$ingredientes', '$valor', NOW())";

$resultado_pasteis = mysqli_query($conn, $result_pasteis);

?>