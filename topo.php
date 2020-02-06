<?php

$l = array("Japan" => "Tokyo", "Mexico" => "Mexico City", "China" => "Peking", "UK" => "London", "Egypt" => "Cairo");
$fout = 0;

foreach($l as $land => $stad){
echo "Wat is de hoofdstad van $land?" . "\n";
$vr = readline("");

if($vr === $stad){
    echo "Dat is correct!" . "\n";
}else{
    echo "Helaas, $vr is niet de hoofdstad van $land." . "\n"; 
    echo "Het correcte antwoord is: $stad." . "\n";
    $fout++;
}
}

echo "Je hebt " . (count($l) - $fout) . " van de " . count($l) . " goed!"; 