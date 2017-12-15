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

