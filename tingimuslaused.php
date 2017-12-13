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