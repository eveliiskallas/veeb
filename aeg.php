<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 11.01.2018
 * Time: 8:47
 */
date_default_timezone_set('Europe/Tallinn');
$aegHetkel = time();
$kellaAeg = date('G:i', $aegHetkel);
echo $kellaAeg.'<br />';
$kuupaev = date('j.m.Y');
echo $kuupaev.'<br />';
