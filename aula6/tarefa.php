
<?php
/* Faça um cadastro de frutas para o sistema do supermecado. Segue os dados:
    Uva, 200 unidades no estoque, R$ 12.99 a unidade;
    Banana 350 unidades no estoque, R$ 7.99 a unidade;
    Maçã Argentina 240 no estoque, R$ 8.99 a unidade;

    Caso eu tenha menos de 5 unidades no estoque, você vai excluir a fruta da matriz.

    Inclua no final, os itens:
    Maçã brasileira 300 no estoque, R$ 6.99 a unidade;
    Tangerina Pokan 100 no estoque, R$ 2.99 a unidade;

    Um cliente vai fazer uma compra:
        1 Uva
        1 Banana
        12 maçãs argentinas
        6 maçã brasileira
        6 tangerina pokan

    1. Quanto ele gastou na compra?
    2. Quantos elementos ele levou pra casa?
    3. Quanto sobrou no estoque?

*/

$supermercado = [
    "Uva" => ["estoque" => 200, "preco" => 12.99],
    "Banana" => ["estoque" => 350, "preco" => 7.99], 
    "Maçã_Argentina" => ["estoque" => 240, "preco" => 8.99]
];

$supermercado["Maçã_Brasileira"] = ["estoque" => 300, "preco" => 6.99];
$supermercado["Tangerina_Pokan"] = ["estoque" => 100, "preco" => 2.99];

foreach($supermercado as $fruta => $item){
    if($item["estoque"] < 5){
        unset($supermercado[$fruta]);
    }
}

$compra = [
    "Uva" => 1,
    "Banana" => 1,
    "Maçã_Argentina" => 12,
    "Maçã_Brasileira" => 6,
    "Tangerina_Pokan" => 6
];

$totalGasto = 0;
$totalItens = 0;

foreach($compra as $fruta => $quantidade) {
    $totalGasto += $supermercado[$fruta]["preco"] * $quantidade;
    $totalItens += $quantidade;
    $supermercado[$fruta]["estoque"] -= $quantidade;
}

echo "Total gasto: R$ " . number_format($totalGasto, 2, ',', '.') . "<br>";
echo "Total de itens: " . $totalItens . "<br>";
echo "Estoque restante:<br>";
foreach($supermercado as $fruta => $item) {
    echo $fruta . ": " . $item["estoque"] . " unidades <br>";
}


?>