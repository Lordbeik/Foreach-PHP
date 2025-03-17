<?php
$nomes = array("Ana", "Carlos", "Mariana", "Pedro", "Sofia");
    
foreach($nomes as $nome){
    echo $nome."<br>";
}

?>

<?php

 
$numeros = array(10, 5, 8, 12, 3);
$soma = 0;

foreach ($numeros as $numero){
   
    $soma += $numero;
    echo "- $soma". "<br>";
   
}


?>

<?php
$pessoa = array("nome" => "João", "idade" => 30, "cidade" => "São Paulo");
foreach ($pessoa as $dados =>$info){
    echo $dados . ":" . $info. "<br>";
}
?>


<?php
$numerosE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach($numerosE as $numeroE){
    if($numeroE % 2 == 0){
        $pares[] = $numeroE;
    }    
};
print_r($pares);

?>
<?php
$palavras = array("maçã", "banana", "maçã", "laranja", "banana", "maçã");

foreach($palavras as $palavra){

};

?>

<?php
$alunos = array(
    array("nome" => "Ana", "notas" => array(8, 7, 9)),
    array("nome" => "Carlos", "notas" => array(6, 5, 8)),
    array("nome" => "Mariana", "notas" => array(9, 9, 10))
);
foreach($alunos as $aluno){
    $soma = 0;
    foreach($aluno["notas"] as $nota){
        $soma += $nota;
    }
    $media = $soma / count($aluno["notas"]);
    echo "A média de". " $aluno[nome]" ." é " . number_format($media, 2) . "<br>";
    
};
?>


<?php

    $numeros1 = array(1,4,6,34,66,23,77,34);

    $soma = 0;
    foreach ($numeros1 as $num1){
        $soma += $num1;
    }
    echo "A soma dos numeros é $soma<br><br>";
?>

<?php
    $nomes = array(
        "Ana" => 34,
        "Carlos"=>14,
        "Mariana"=>57,
        "Pedro"=>49,
        "Sofia"=>26
    );
    $nomeP = "";
    $idadeMaior = 0;

    foreach($nomes as $apelido =>$idade){
        if($idade >$idadeMaior){
            $idadeMaior = $idade;
            $nomeP = $apelido;
        };

    };
    echo " A pessoa mais velha é $nomeP com a idade de $idadeMaior anos <br><br>";

?>

<?php
    $matriz = array(
        array(1,2,3),
        array(4,5,6,),
        array(7,8,9)
    );

    for($i = 0; $i <3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $matriz[$i][$j] . "";
        }
        echo "<br>";
    }
?>