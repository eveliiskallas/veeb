<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 13.12.2017
 * Time: 8:44
 */
$ilm = 'Päike paistab';
if ($ilm == 'Sajab'){
    $tuju = 'halb';
} else {
    $tuju = 'hea';
}
echo 'Väljas '.$ilm.'<br />';
echo 'Minul on  '.$tuju.' tuju<br />';
//
$vanus = rand(0, 100);
echo $vanus;
if($vanus >= 0 and $vanus < 11) {
    $staatus = 'laps';
} elseif ($vanus > 10 and $vanus < 18) {
    $staatus = 'nooruk';
} elseif ($vanus > 17 and $vanus < 65) {
    $staatus = 'täiskasvanu';
} else {
    $staatus = 'senioor';
}
echo 'Olen  '.$vanus.' aastat vana.<br />';
echo 'Olen '.$staatus.'<br />';