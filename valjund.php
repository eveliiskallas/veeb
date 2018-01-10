<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 10.01.2018
 * Time: 14:52
 */

function loeFailist($failinimi){

        if(file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)){
            echo 'Loeme andmed failist<br />';
            $fail = fopen($failinimi, 'r');
            while (!feof($fail)){
                $rida = fgets($fail);
                echo $rida.'<br />';
            }

            echo '<a href="sisend.php">Lisa andmed juurde</a>';
            fclose($fail);

        } else {
            echo 'Probleem ' . $failinimi . ' faililga<br />';
        }
}

loeFailist('andmed.txt');