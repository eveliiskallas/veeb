<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.01.2018
 * Time: 14:27
 */
require_once 'tekst.php';
// loome teksti objekti
$minuTekst = new tekst();
//määrame kindlas sõnas tekstis
$minuTekst->sonad = "Tere Maailm!";
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';