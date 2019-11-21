<?php 
    echo('Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL);
    $amount = floatval(readline());
    $friends = array();
    for ($i=0; $i < $amount; $i++) { 
        echo('Wat is jouw naam?'. PHP_EOL);
        $name = readline();
        echo(PHP_EOL);        
        echo('Hoeveel dromen ga je opgeven?'. PHP_EOL);
        $amountDreams = readline();
        echo(PHP_EOL);
        $dreams = array();
        for ($l=0; $l < $amountDreams; $l++) { 
            echo('Wat is jouw droom?'. PHP_EOL);
            $dream = readline();
            echo(PHP_EOL);
            array_push($dreams, $dream);
        }
        $friends[$name] = $dreams;
    }
    echo(PHP_EOL);
    foreach ($friends as $name => $dreams) {
        foreach ($dreams as $dream) {
            echo($name . ' heeft dit als droom: ' .     $dream). PHP_EOL;
        }
        echo(PHP_EOL);
    }
?>