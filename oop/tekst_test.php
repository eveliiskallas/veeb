<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.01.2018
 * Time: 14:27
 */
require_once 'tekst.php';
// loome teksti objekti
//määrame kindlas sõnas tekstis
$minuTekst = new tekst('Tere Maailm!');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti korralikul kujul
$minuTekst -> prindiTekst();

echo '<hr />';

require_once 'vTekst.php';
// loome teksti objekti
//määrame kindlas sõnas tekstis
$varvituTekst = new vTekst('Värvitu tekst');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($varvituTekst);
echo '</pre>';
// väljastame objekti korralikul kujul
$varvituTekst -> prindiTekst();