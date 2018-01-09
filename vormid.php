<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 9.01.2018
 * Time: 13:30
 */

function valjastaVorm (){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Kasutaja: <input type="text" name="kasutaja">
            <br />
            Parool <input type="password" name="parool">
            <br />
            <input type="submit" value="Saada">
        </form>
    ';

}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    print_r($_GET);
    print_r($_REQUEST);
    print_r($_SERVER);
    echo '</pre>';
}

valjastaVorm();

vormiAndmed();