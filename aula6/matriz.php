<?php
    $frutas = [
        "uva" => ["preço" => 12.99, "quantidade" => 10],
        "maçã" => ["preço" => 5.99, "quantidade" => 5],
        "pera" => ["preço" => 3.49, "quantidade" => 3],
        "banana" => ["preço" => 7.00, "quantidade" => 15]
    ];
   
 //percorre um array
    foreach ($frutas as $fruta => $item) {
        echo "A $fruta custa " . "R$ " . $item["preço"] . " e tem no estoque " . $item["quantidade"] . "<br>";
    }
 
   
?>

<?php
    /* Faça uma lógica para que seja mostrado todas as informações do cadastro abaixo */
    $cadastro = [
        "Pessoa1" => ["nome" => "Marcio", "altura" => 1.72, "peso" => 83, "cidade" => "Niterói"],
        "Pessoa2" => ["nome" => "Franklin", "altura" => 1.90, "peso" => 100, "cidade" => "Salvador"],
        "Pessoa3" => ["nome" => "Waleska", "altura" => 1.65, "peso" => 70, "cidade" => "Rio de Janeiro"],
        "Pessoa4" => ["nome" => "Lucas", "altura" => 1.78, "peso" => 85, "cidade" => "Rio de Janeiro"]
    ];
 
    /* Gabarito */
    foreach ($cadastro as $pessoa => $info){
        echo "Dados da $pessoa :<br>";
        echo "Nome: " . $info["nome"] . "<br>";
        echo "Altura: " . $info["altura"] . "<br>";
        echo "Peso: " . $info["peso"] . "<br>";
        echo "Cidade: " . $info["cidade"] . "<br><br>";
    }
 
    $cadastro["Pessoa5"] =  ["nome" => "Aurélio", "altura" => 1.75, "peso" => 60, "cidade" => "Rio de Janeiro"];
 
    $cadastro["Pessoa6"] = ["nome" => "Sandra", "altura" => 1.70, "peso" => 68, "cidade" => "Niterói"]; // inclui na matriz
 
    unset($cadastro["Pessoa6"]); // Exclui o elemento da matriz
 
    foreach ($cadastro as $pessoa => $info){
        echo "Dados da $pessoa :<br>";
        echo "Nome: " . $info["nome"] . "<br>";
        echo "Altura: " . $info["altura"] . "<br>";
        echo "Peso: " . $info["peso"] . "<br>";
        echo "Cidade: " . $info["cidade"] . "<br><br>";
    }
   
?>