<?php

$aanhef = array(
    "klant" => "Beste",
    "persoon" => "");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[appel]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Carmen",
  "functie" => "Directeur Webshop beheer"
);

/*
 * Opdracht 1: KLAAR
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */

 print_r($aanhef);
 var_dump($korting);
 var_dump($ondertekening);

/*
 * Opdracht 2: KLAAR
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */

 $newAanhef = array_replace($aanhef, ["aanhef" => "klant"]);
 print_r($newAanhef);

 $newOndertekening = array($ondertekening, ["naam" => "Carmen"]);
 print_r($newOndertekening);

/*
 * Opdracht 3: KLAAR
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

 print_r(str_replace("[[product]]", "popcorn", $korting));

/*
 * Opdracht 4: 
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

 $aanbieding = (array_merge($aanhef, $korting, $ondertekening));

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */

 print_r($aanbieding);

