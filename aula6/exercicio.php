<?php
    /* Faça uma lógica para que seja mostrado todas as informações do cadastro abaixo */
    $cadastro = [
        "pessoa1" => ["nome" => "Marcio", "altura" => 1.72, "peso" => 83, "cidade" => "Niterói"],
        "pessoa2" => ["nome" => "Franklin", "altura" => 1.90, "peso" => 100, "cidade" => "Salvador"],
        "pessoa3" => ["nome" => "Waleska", "altura" => 1.65, "peso" => 70, "cidade" => "Rio de Janeiro"],
        "pessoa4" => ["nome" => "Lucas", "altura" => 1.78, "peso" => 85, "cidade" => "Rio de Janeiro"]
    ];

    foreach ($cadastro as $pessoa => $dados) {
    
        echo "A $pessoa tem nome: "."$dados[nome] ". " tem a altura: "."$dados[altura] ". " e seu peso é: "."$dados[peso] ". " que mora na cidade: "."$dados[cidade] <br> ";
    };


    

?>