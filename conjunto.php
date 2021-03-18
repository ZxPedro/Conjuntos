<?php
include 'funcoes.php';
$vetorA = [];
$vetorB = [];

echo "Digite o tamanho do conjunto A: ";
$tamanhoA = (int)fgets(STDIN);

for ($i = 0; $i < $tamanhoA; $i++) {
    echo "Digite o valor do conjunto: ";
    $valorA = (int)fgets(STDIN);
    array_push($vetorA, $valorA);
}

echo "Digite o tamanho do conjunto B: ";
$tamanhoB = (int)fgets(STDIN);

for ($i = 0; $i < $tamanhoB; $i++) {
    echo "Digite o valor do conjunto: ";
    $valorB = (int)fgets(STDIN);
    array_push($vetorB, $valorB);
}


echo "A U B: {" . uniaoConjuntos($vetorA, $vetorB) . "}" . PHP_EOL;
echo "A ∩ B: {" . interseccaoConjuntos($vetorA, $vetorB) . "}" . PHP_EOL;
echo "A - B: {" . diferencaConjuntos($vetorA, $vetorB) . "}" . PHP_EOL;
echo "A X B: {" . relacao($vetorA, $vetorB) . "}" . PHP_EOL;
echo "|A|" . quantidade($vetorA) . PHP_EOL;
echo "|B|" . quantidade($vetorB) . PHP_EOL;







