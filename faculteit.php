<?php
echo "Van welk getal wil je de faculteit weten?\n";
    $getal = readline();
    $antwoord = 1;

    for ($i = 1; $i <= $getal; $i++){
        $antwoord = $i * $antwoord;

    }
    echo  "De faculteit van $getal is $antwoord";