<?php

$alunos = [
    ["nome" => "Marcos", "idade" => 28, "notaFinal" => 10],
    ["nome" => "Marcia", "idade" => 61, "notaFinal" => 9.0],
    ["nome" => "Vivian", "idade" => 34, "notaFinal" => 9.0]
];

echo "<h3>Lista de Alunos INICIAL</h3>";
foreach ($alunos as $aluno) echo "<b>nome:</b> " . $aluno['nome'] . "<br>" .  "<b>idade:</b> " . $aluno['idade'] . " anos<br>" .  "<b>notaFinal:</b> " . $aluno['notaFinal'] . "<br><br>";


array_push($alunos,
    ["nome" => "Gabriel", "idade" => 28, "notaFinal" => 5.0],
    ["nome" => "Fernando", "idade" => 29, "notaFinal" => 7.0],
    ["nome" => "Henrique", "idade" => 26, "notaFinal" => 6.0],
    ["nome" => "Vitor", "idade" => 26, "notaFinal" => 9.0],
    ["nome" => "Maria Clara", "idade" => 27, "notaFinal" => 9.5],
    ["nome" => "Mauro", "idade" => 20, "notaFinal" => 9.8],
    ["nome" => "Aurora", "idade" => 1, "notaFinal" => 10],
    ["nome" => "Bruna", "idade" => 15, "notaFinal" => 6.0],
    ["nome" => "Felipe", "idade" => 15, "notaFinal" => 6.0],
    ["nome" => "Christian", "idade" => 31, "notaFinal" => 4.0]
);


echo "<h3>Lista de Alunos FINAL</h3>";
foreach ($alunos as $aluno) echo "<b>nome:</b> " . $aluno['nome'] . "<br>" . "<b>idade:</b> " . $aluno['idade'] . " anos<br>" . "<b>notaFinal:</b> " . $aluno['notaFinal'] . "<br><br>";


$totalNotas = 0;
foreach ($alunos as $aluno) $totalNotas += $aluno['notaFinal'];

$media = $totalNotas / count($alunos);
echo "<b>Média das notas: " ."</b>" . $media;
?>
