<?php
    /* Faça um cadastro de frutas para o sistema do supermercado. Segue os dados:
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
 
// Cadastro inicial de frutas
$frutas = [
    "Uva" => ["estoque" => 200, "preco" => 12.99],
    "Banana" => ["estoque" => 350, "preco" => 7.99],
    "Maçã Argentina" => ["estoque" => 240, "preco" => 8.99]
];
 
?>
 
<table>
    <h1>Estoque Antes</h1>
    <tr>
        <th>Fruta</th>
        <th>Quantidade</th>
        <th>Preço Unitário</th>
    </tr>
<?php
    foreach ($frutas as $nome => $fruta) {
        echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td>{$fruta['estoque']}</td>";
        echo "<td>{$fruta['preco']}</td>";
        echo "</tr>";
    }
?>
 
</table>
 
<?php
// Removendo frutas com menos de 5 unidades no estoque
foreach ($frutas as $nome => $fruta) {
    if ($fruta["estoque"] < 5) {
        unset($frutas[$nome]);
    }
}
 
// Adicionando novos itens
$frutas["Maçã Brasileira"] = ["estoque" => 300, "preco" => 6.99];
$frutas["Tangerina Pokan"] = ["estoque" => 100, "preco" => 2.99];
 
// Lista de compras do cliente
$compra = [
    "Uva" => 1,
    "Banana" => 1,
    "Maçã Argentina" => 12,
    "Maçã Brasileira" => 6,
    "Tangerina Pokan" => 6
];
 
$totalGasto = 0;
$totalItens = 0;
 
// Processando a compra
foreach ($compra as $nomeFruta => $quantidade) {
    foreach ($frutas as $nome => $fruta) {
        if ($nome === $nomeFruta && $frutas[$nome]["estoque"] >= $quantidade) {
            $totalGasto = $totalGasto + $frutas[$nome]["preco"] * $quantidade;
            $totalItens = $totalItens + $quantidade;
            $frutas[$nome]["estoque"] = $frutas[$nome]["estoque"] - $quantidade;
        }
    }
}
 
?>
 
<p>Total gasto na compra: R$ <?php echo number_format($totalGasto, 2, ',', '.') ?></p>
<p>Total de itens levados para casa: <?php echo $totalItens ?></p>
 
<table>
    <h1>Estoque Depois</h1>
    <tr>
        <th>Fruta</th>
        <th>Quantidade</th>
        <th>Preço Unitário</th>
    </tr>
<?php
    foreach($frutas as $fruta => $item){
        echo "<tr>";
        echo "<td>$fruta</td>";
        echo "<td>{$item['estoque']}</td>";
        echo "<td>{$item['preco']}</td>";
        echo "</tr>";
    }
?>
 
</table>