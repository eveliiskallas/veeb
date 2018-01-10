<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 10.01.2018
 * Time: 14:21
 */

function vorm(){
    echo '
        <form action="salvestus.php" method="post">
           Eesnimi: <input type="text" name="eesnimi">
            <br />
            Perenimi: <input type="text" name="perenimi">
            <br />
            <input type="submit" value="Salvesta">
        </form>
    ';
}
vorm();