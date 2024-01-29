<?php

    $totalMochila = 250;
    $pesoMochila = 0;
    $utility = 0;    
    $newItems = array();
    $newArray = array();

    $items = array(
        array ("name" => "Lápis", "weight" => 10, "utility" => 269),
        array ("name" => "Caneta", "weight" => 55, "utility" => 95),
        array ("name" => "Borracha", "weight" => 10, "utility" => 4),
        array ("name" => "Apontador", "weight" => 47, "utility" => 60),
        array ("name" => "Caderno", "weight" => 5, "utility" => 32),
        array ("name" => "Livro", "weight" => 4, "utility" => 23), 
        array ("name" => "Tesoura", "weight" => 50, "utility" => 72),
        array ("name" => "Lapiseira", "weight" => 8, "utility" => 80),
        array ("name" => "Grafite", "weight" => 61, "utility" =>62),
        array ("name" => "Régua", "weight" => 85, "utility" => 65),
        array ("name" => "Pasta", "weight" => 87, "utility" => 46)
    );

    foreach($items as $item)
    {
        //Esse cálculo compara o peso pela utilidade, quanto maior o resultado, maior é a necessidade desse item estar na mochila
        $dif = ($item["utility"] / $item["weight"]);
        //São adicionados em um novo array os valores + cálculo anterior     
        array_push($newItems, [$item["name"], $item["weight"], $item["utility"], $dif]);
    }

    //Ordena esse array em ordem decrescente, tomando como base o valor do dif
    array_multisort(array_column($newItems, 3), SORT_DESC, $newItems);

    //Pega os valores necessários até estourar o peso
    foreach($newItems as $mochila)
    {
        if (($pesoMochila + $mochila[1]) <= $totalMochila)
        {
            $pesoMochila += $mochila[1];
            $utility += $mochila[2]; 
            array_push($newArray, $mochila[0]);
        }
    }

    echo "Best Solution: <br>";
    echo "Weight: " . $pesoMochila . "<br>";
    echo "Utility: " . $utility . "<br>";
    echo "Itens included: <br><br>";

    foreach($newArray as $itemMochila)
    {
        echo $itemMochila . " Included! <br>";
    }
    
?>