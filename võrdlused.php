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
// võrdleme omavahel erinevad väärtused
// == - võrdne
$tulemus = $var1 == $var2;
echo 'Kas $var1 on võrdne $var2? -'.$tulemus;
echo '<br / >';
$tulemus = $var1 == $var3;
echo 'Kas $var1 on võrdne $var3? -'.$tulemus;
echo '<br / >';
// === - võrdne - kontrollitaksde väärtust kui ka tüüpi
$tulemus = $var1 === $var3;
echo 'Kas $var1 on võrdne $var3? -'.$tulemus;
echo '<br / >';
// != -ei võrdu
$tulemus = $var1 != $var4;
echo 'Kas $var1 ei ole võrdne $var4? -'.$tulemus;
