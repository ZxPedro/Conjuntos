<?php

function uniaoConjuntos(array $vetorA, array $vetorB): string
{
    $uniao = array_merge($vetorA, $vetorB);
    $resultado = array_unique($uniao);
    sort($resultado);
    return implode(",", $resultado);
}

function interseccaoConjuntos(array $vetorA, array $vetorB): string
{
    $interseccao = array_intersect($vetorA, $vetorB);
    sort($interseccao);
    return implode(",", $interseccao);
}

function diferencaConjuntos(array $vetorA, array $vetorB): string
{
    $diferenca = array_diff($vetorA, $vetorB);
    sort($diferenca);
    return implode(",", $diferenca);
}

function relacao(array $vetorA, array $vetorB): string
{
    $resultado = [];
    sort($vetorA);
    sort($vetorB);
    for ($i = 0; $i < count($vetorA); $i++) {
        for ($j = 0; $j < count($vetorB); $j++) {
            $resultado[] .= "(" . $vetorA[$i] . "," . $vetorB[$j] . ")";
        };
    };
    return implode(",", $resultado);
}

function quantidade(array $vetor): int
{
    return count($vetor);
}
