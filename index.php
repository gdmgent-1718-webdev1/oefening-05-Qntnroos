<?php

function ageChecker($Age){
    if($Age < 16){
        return $Age . " jaar is te jong voor deze film";
    } else if($Age >= 16 && $Age < 18) {
        return $Age . " jaar, je hebt ouderlijk toezicht nodig.";
    }  else{
        return "Je bent al $Age jaar. Geniet van de film!";
    }
}

for( $i = 1; $i<20; ++$i){
    echo ageChecker($i) . PHP_EOL;
}