<?php
// Criar um array de 1 a 10 manualmente com laço
// COM LAÇO
// $numeros = [1, 2, 3, 4, 5, 6 , 7, 8, 9, 10]; // array manual
$numeros = []; // array zero com inserção via laço
for ($i = 1; $i <= 10; $i++)$numeros[] = $i;

// a) Exibir todos os números do array
echo "a) Números do array: <br>";
foreach ($numeros as $num) echo $num . " <br>";
echo "<br>";

// COM FUNÇÃO
// $numeros = range(1, 10); // função para criar sequencia de valores
// echo "a) Números do array: <br>";
// foreach ($numeros as $num) {
//     echo $num . " ";
// }


// b) Calcular e exibir a soma de todos os números 
// COM LAÇO
$soma = 0;
for ($i = 0; $i < count($numeros); $i++) $soma += $numeros[$i]; 
echo "b) Soma de todos os números com laço: $soma";
echo "<br><br>";

// COM FUNÇÃO
// $soma = array_sum($numeros);      // soma os valores numéricos do array
// echo "b) Soma de todos os números: $soma <br><br>";


// c) Inverter a ordem do array 
//COM LAÇO
$invertido = [];
for ($i = count($numeros) - 1; $i >= 0; $i--) $invertido[] = $numeros[$i];
echo "c) Array invertido: <br>";
for ($i = 0; $i < count($invertido); $i++) echo $invertido[$i] . "<br> ";

// COM FUNÇÃO
// $invertido = array_reverse($numeros); // funçao que inverte a ordem do array
// echo "c) Array invertido: <br>";
// foreach ($invertido as $invert) echo $invert . "<br>";
?>