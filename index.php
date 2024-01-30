<?php

//PEQUENA MUDANÇA REALIZADA NO ARQUIVO CSV:
//ADICIONEI O NOME DO ITEM ANTES DOS VALORES

$totalMochila = 250;
$pesoMochila = 0;
$utility = 0;    
$newItems = array();
$items = array();
$newArray = array();
$csvFile = './data/dados.csv';

// Põe cada linha do arquivo no array
$lines = file($csvFile, FILE_IGNORE_NEW_LINES);

foreach ($lines as $line) 
{
    // Pega cada item separando pelo espaço
    $data = explode(' ', $line);

    // Adiciona esses itens em um array
    array_push($items, array ("name" => $data[0], "weight" => $data[1], "utility" => $data[2]));
}

foreach($items as $item)
{
    // Esse cálculo compara o peso pela utilidade, quanto maior o resultado, maior é a necessidade desse item estar na mochila
    $dif = ($item["utility"] / $item["weight"]);
    
    // São adicionados em um novo array os valores + cálculo anterior     
    array_push($newItems, [$item["name"], $item["weight"], $item["utility"], $dif]);
}

// Ordena esse array em ordem decrescente, tomando como base o valor do dif
array_multisort(array_column($newItems, 3), SORT_DESC, $newItems);

// Pega os valores necessários até estourar o peso
foreach($newItems as $mochila)
{
    if (($pesoMochila + $mochila[1]) <= $totalMochila)
    {
        $pesoMochila += $mochila[1];
        $utility += $mochila[2];
        
        // Adiciona o item no array que será usado pra imprimir
        array_push($newArray, $mochila[0]);
    }
}

// Printa os resultados
echo "Best Solution:" . PHP_EOL;
echo "Weight: " . $pesoMochila . PHP_EOL;
echo "Utility: " . $utility . PHP_EOL;
echo "Itens included:" . PHP_EOL . PHP_EOL;

foreach($newArray as $itemMochila)
{
    echo $itemMochila . " Included!". PHP_EOL;
}
   
?>