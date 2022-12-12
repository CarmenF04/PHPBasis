<?php

/*
 * Opdracht 1: KLAAR
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */

 $weekdagen = array(
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
    );

/*
 * Opdracht 2: KLAAR
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */

for ($weekdagen = 0; $weekdagen <= 10; $weekdagen++) {
        echo $weekdagen;
    } 

/*
 * Opdracht 3:
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */

 foreach ($weekdagen as $key => $value) {
    if ($key == 'za' || $key == 'zo') {
        $weekdagen[$key] = strtoupper($value);
    } else {
        $weekdagen[$key] = ucfirst($value);
    }

    echo $weekdagen[$key] . PHP_EOL; 
    //PHP_EOL staat voor End of Line oftewel een Newline.
    //Een newline (\n of \r) staat in de internet wereld voor een nieuwe regel voor de HTML code en niet voor weergave.
}

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

    $omgekeerd = array();

    array_push($omgekeerd, array_reverse($weekdagen));

    print_r($omgekeerd);

    $omgekeerd = array();

//Deze opdracht ????

/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */

    array_push($omgekeerd, array_reverse($weekdagen));

    $omgekeerd = array_merge($omgekeerd[0]);

    print_r($omgekeerd);

