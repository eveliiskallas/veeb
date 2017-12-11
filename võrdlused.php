<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 11.12.2017
 * Time: 12:38
 */
// Defineeri kaheksa muutujat, mille väärtusteks on täisarvud, reaalarvud, sõned ja boolean väärtused
$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = True;
$var8 = False;
// väljastame väärtused ja nende tüübid
// gettype(muutuja)
echo $var1.' - '.gettype($var1).'<br / >';
echo $var2.' - '.gettype($var2).'<br / >';
echo $var3.' - '.gettype($var3).'<br / >';
echo $var4.' - '.gettype($var4).'<br / >';
echo $var5.' - '.gettype($var5).'<br / >';
echo $var6.' - '.gettype($var6).'<br / >';
echo $var7.' - '.gettype($var7).'<br / >';
echo $var8.' - '.gettype($var8).'<br / >';