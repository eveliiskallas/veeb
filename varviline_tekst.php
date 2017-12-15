<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.12.2017
 * Time: 11:09
 */
for($rida = 1; $rida <= 5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0,15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;

    }
    echo '<font color="'.$varv.'">Värvilne tekst</font><br />';
}