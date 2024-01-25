<?php

$itens = array(
    array ("peso" => 5, "valor" => 5),
    array ("peso" => 4, "valor" => 4),
    array ("peso" => 6, "valor" => 6),
);

bestOrganization($itens);

function bestOrganization($itens)
{
    $peso_limite = 10;
    $peso_sobrando = 10;
    $recorde_valor = 0;
    $melhor_array = array();

    $tamanhoArray = count($itens);
    
    for($x=0; $x<$tamanhoArray; $x++)
    {
        if($itens[$x]["peso"]<$peso_limite)
        {
            if($itens[$x]["peso"])
            {
                
            }
        }
        
        
        
        
        $peso = $itens[$x]["peso"];
        echo $peso;
    }

    /*foreach($itens as $item)
    {
        if($item['peso'] <= $peso_sobrando)
        {
            array_push($melhor_array, $item);
            $peso_sobrando = $peso_sobrando - $item['peso'];
            $recorde_valor = $recorde_valor + $item['valor'];
        }
    }
    print_r($melhor_array);
    echo "<BR>";
    echo "Peso sobrando: " . $peso_sobrando . "<br>";
    echo "Valor: " . $recorde_valor;
    */
}




/*
$items = array(
    array ("name" => "Lápis", "peso" => 10, "valor" => 269),
    array ("name" => "Caneta", "peso" => 55, "valor" => 95),
    array ("name" => "Borracha", "peso" => 10, "valor" => 4),
    array ("name" => "Apontador", "peso" => 47, "valor" => 60),
    array ("name" => "Caderno", "peso" => 5, "valor" => 32),
    array ("name" => "Livro", "peso" => 4, "valor" => 23), 
    array ("name" => "Tesoura", "peso" => 50, "valor" => 72),
    array ("name" => "Lapiseira", "peso" => 8, "valor" => 80),
    array ("name" => "Grafite", "peso" => 61, "valor" =>62),
    array ("name" => "Régua", "peso" => 85, "valor" => 65),
    array ("name" => "Pasta", "peso" => 87, "valor" => 46)
);
*/

/* Adiciona um item após o outro até lotar
function bestOrganization($items)
{

    $maxpeso = 250;
    $available = 250;
    $backPack = array();

    foreach($items as $item)
    {
        if($item['peso'] <= $available)
        {
            array_push($backPack, $item);
            $available = $available - $item['peso'];
        }
    }
    echo json_encode($backPack);
}
*/

?>