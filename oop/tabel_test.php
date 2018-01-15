<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.01.2018
 * Time: 15:15
 */
require_once 'tabel.php';
// loome tabeli objekti
$minuTabel = new tabel (array('a', 'b', 'c', 'd'));
// lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';