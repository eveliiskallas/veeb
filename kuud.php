<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 13.12.2017
 * Time: 9:31
 */
/*
 * Koosta PHP skript nimega kuud.php
 * Skripti peab vastavalt kuu numbrile väljastama, kas tegu on:
 * 1 - jaanuar - näärikuu
 * jne
 * Värskendamine peab toimuma automaatselt
 * Ära unusta ka varianti, et vale numbri kasutamisel vastav kirjeldus ei ilmu.
 */
header('Refresh: 2');
$kuu = rand(0, 15);
echo $kuu.' - ';
switch ($kuu) {
case 1: echo 'Jaanuar - Näärikuu';
break;
case 2: echo 'Veebruar - Sõbrapäev';
break;
case 3: echo 'Märts - Minu sünnipäev';
break;
case 4: echo 'Aprill - Naljapäev';
break;
case 5: echo 'Mai - Volbriöö';
break;
case 6: echo 'Juuni - Jaanipäev';
break;
case 7: echo 'Juuli - Seitsmevennapäev';
break;
case 8: echo 'August - Rukkimaarjapäev';
break;
case 9: echo 'September - Tarkusepäev';
break;
case 10: echo 'Oktoober - Halloween';
break;
case 11: echo 'November - Hingedepäev';
break;
case 12: echo 'Detsember - Jõulud';
break;
default: echo 'Antud kirjeldus ei ilmunud';
}

