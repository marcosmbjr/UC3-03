<?php
$produtos = [
    ["nome" => "Cafeteira", "preco" => 500.00, "quantidade" => 50],
    ["nome" => "capsula de café", "preco" => 20.00, "quantidade" => 150],
    ["nome" => "Açúcar", "preco" => 5.00, "quantidade" => 200],
    ["nome" => "xícara", "preco" => 30.00, "quantidade" => 50],
    ["nome" => "porta-copos", "preco" => 200.00, "quantidade" => 1000]
];


echo "Lista de Produtos:<br><br>";
for ($i = 0; $i < count($produtos); $i++) {
    echo "Produto: " . $produtos[$i]['nome'] . "<br>";
    echo "Preço: R$ " . $produtos[$i]['preco'] . "<br>";
    echo "Qtd: " . $produtos[$i]['quantidade'] . " unidades" .  "<br><br>";
}


echo "Produtos com desconto de 10%:<br><br>";
for ($i = 0; $i < count($produtos); $i++) {
    $produtos[$i]['preco'] = $produtos[$i]['preco'] * 0.9;
    echo "Produto: " . $produtos[$i]['nome'] . "<br>";
    echo "Preço: R$ " . $produtos[$i]['preco'] . "<br>";
    echo "Qtd: " . $produtos[$i]['quantidade'] . " unidades" . "<br><br>";
}
?>
