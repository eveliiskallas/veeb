<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 9.01.2018
 * Time: 14:46
 */

/*
 * Koosta mäng, kus kasutaja saab ära arvata programmis mõeldud täisarvu ühest viiekümneni. Alustuseks ära
 * genereeri arv vaid pane ise paika - lihtsam ka testimine
 *
 * Vale arvu sisestamisel antakse kasutajale vihje, kas
 * serveri poolt valitud arv on suurem või väiksem
 * kasutaja sisestatud arvust.
 *
 * Täienda programmi selliselt, et kui õige vastuse ja
 * kasutaja sisestatud arvu vahe on väiksem
 * või võrdne 5-ga, siis teavitatakse kasutajat, et ta on
 * õigele vastusele juba üsna lähedale jõudnud.
 *
 * Täineda programmi selliselt, et on kirjas, mitu katset
 * on sooritatud õige arvu leidmisel.
 *
 */


function manguVorm(){
     $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ? ++$katseteArv : 0;
        echo'
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
           Sisesta arv: </br />
           <input type="text" name="kasutajaArv">
           <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
            <br />
            <input type="submit" value="Kontrolli">
        </form>
    ';
}
function kontrolliArv(){
    $serveriArv = 12;
    if(!empty($_POST)){
        $kasutajaArv = $_POST['kasutajaArv'];
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Arv peab olema sisestatud!<br />';
                exit;
            }
        }
        if($kasutajaArv < $serveriArv){
            echo 'Sinu arv on väiksem kui serveri oma<br />';
        }
        if($kasutajaArv > $serveriArv){
            echo 'Sinu arv on suurem kui serveri oma<br />';
        }
        if(abs($kasutajaArv - $serveriArv) <= 5){
            if($kasutajaArv == $serveriArv){
                echo 'Palju õnne! Arvasid ära!<br />';
                exit;
            }
            echo 'Sinu arv on juba väga lähedal<br />';
        }
    }
}
manguVorm();
kontrolliArv();






  

