<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.12.2017
 * Time: 10:29
 */
/**
 * Täienda antud lahendust nii, et paaris arvud oleks punast värvi ja paaritud arvud sinist värvi
 */
$varv = '';
for ($arv = 1; $arv <=10; $arv++) {
    if($arv % 2 == 0) {
        $varv = 'red';
    } else {
        $varv = 'blue';
    }
    echo '<p style="color:'.$varv.';">'.$arv . '</p>';
}
$kord = 0;
while($kord++ <= 4) {
    if($kord == 3) continue;
    echo '<i>'.$kord.'</i>';
//    $kord++;
}
do {
    if($kord > 5) break;
    echo '<b>'.$kord.'</b>';
} while ($kord <= 5);
