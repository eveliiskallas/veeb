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
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';