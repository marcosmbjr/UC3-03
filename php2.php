<?php
$produtos = [
    ["nome" => "Cafeteira", "preco" => 500.00, "quantidade" => 50],
    ["nome" => "capsula de café", "preco" => 20.00, "quantidade" => 150],
    ["nome" => "Açúcar", "preco" => 5.00, "quantidade" => 200],
    ["nome" => "xícara", "preco" => 30.00, "quantidade" => 50],
    ["nome" => "porta-copos", "preco" => 200.00, "quantidade" => 1000]
];


echo "Lista de Produtos:<br><br>";
for ($i = 0; $i < count($produtos); $i++) echo "<b>Produto:</b> " . $produtos[$i]['nome'] . "<br>" .  "<b>Preço:</b> R$ " . $produtos[$i]['preco'] . "<br>" .  "<b>Qtd:</b> " . $produtos[$i]['quantidade'] . "unidades" .  "<br><br>";


echo "<b>Produtos com desconto de 10%:</b><br><br>";
for ($i = 0; $i < count($produtos); $i++) {
    $produtos[$i]['preco'] = $produtos[$i]['preco'] * 0.9;
    echo "<b>Produto:</b> " . $produtos[$i]['nome'] . "<br>" . "<b>Preço: </b>R$ " . $produtos[$i]['preco'] . "<br>" . "<b>Qtd:</b> " . $produtos[$i]['quantidade'] . " unidades" . "<br><br>";
}
?>
