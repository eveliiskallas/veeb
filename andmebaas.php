<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 11.01.2018
 * Time: 10:17
 */
function yhendus(){


$yhendus = mysqli_connect('localhost', 'kasutaja', 'parool', 'database');

if(!$yhendus){
    echo 'Probleem andmebaasi kasutamisega<br />';
    echo mysqli_connect_error().'<br />';
    echo mysqli_connect_errno().'<br />';
} else {
    echo 'Ühendus on olemas<br />';
    }
    return $yhendus;
}

function sisesta($Eesnimi, $Perenimi, $Synnikuupaev, $yhendus){
    $sql = 'INSERT INTO Kasutajad (Eesnimi, Perenimi, Synnikuupaev) ' . 'VALUES (\''.$Eesnimi.'\', \''.$Perenimi.'\', \''.$Synnikuupaev.'\')';
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem andmete salvestamisega<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
    } else {
        echo 'Andmed on salvestatud';
    }
}

function loe($yhendus)
{
    $andmed = array();
    $sql = 'SELECT * FROM Kasutajad';
    $tulemus = mysqli_query($yhendus, $sql);
    if (!$tulemus) {
        echo 'Probleem andmete salvestamisega<br />';
        echo mysqli_connect_error() . '<br />';
        echo mysqli_connect_errno() . '<br />';
    } else {
        while ($rida = mysqli_fetch_assoc($tulemus)) {
            $andmed[] = $rida;
        }
    }
    return $andmed;
}

function tabel($andmed){
    echo '<table border = 1>';
    foreach ($andmed as $inimene){
        echo '<tr>';
        foreach ($inimene as $info){
            echo '<td>'.$info.'</td>';

        }
        echo '</tr>';
    }
    echo '</table>';
}

include 'aeg.php';

$yhendus = yhendus();
$Eesnimi = $_POST['eesnimi'];
$Perenimi = $_POST['perenimi'];
$Synnikuupaev = ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);
sisesta($Eesnimi, $Perenimi, $Synnikuupaev, $yhendus);
$andmed = loe($yhendus);
tabel($andmed);