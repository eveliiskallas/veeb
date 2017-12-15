<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.12.2017
 * Time: 11:29
 */
/**
 * Koosta funktsioon nimega valjastaTabel, mis võtab parameetritena tabeli ridade ja veergude arv ning väljastab
 * vastava suurusega tabel, mille pesad on täidetud juhuarvudega vaahemikus 10-99
 */

/**
 * Loo funktsioon genereeriVarv, mis genereerib ja tagastab põhiprogrammile genereeritud värv kujul #xxxxxx
 * vihje: Kasuta tsüklis loodud koodi ja teisenda see funktsiooniks
 */
function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0,15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;
    }
    return $varv;
}


function valjastaTabel($ridadeArv, $veergudeArv) {
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <=  $ridadeArv; $reaNumber++) {
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td>';
            echo rand(10, 99);
            echo '</ td>';
        }
        echo'</tr>';
    }
    echo '</table>';
}
valjastaTabel(5, 7);
