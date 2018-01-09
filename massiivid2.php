<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 9.01.2018
 * Time: 11:40
 */
$opilane = array(
    'Eesnimi' => 'Mart',
    'Perenimi' => 'Lepp',
    'Vanus' => 15,
    'Klass' => 9
);
echo '<pre>';
print_r($opilane);
echo '<pre>';

echo $opilane['Eesnimi'];

echo '<hr />';
foreach ($opilane as $voti=>$vaartus)
    echo $voti.' - '.$vaartus.'<br />';
echo '<hr />';

$opilased = array(
  array(
      'Eesnimi' => 'Mart',
      'Perenimi' => 'Lepp',
      'Vanus' => 15,
      'Klass' => 9
  ),
  array(
      'Eesnimi' => 'Kadri',
      'Perenimi' => 'Tamm',
      'Vanus' => 16,
      'Klass' => 10
  ),
  array(
      'Eesnimi' => 'Kadi',
      'Perenimi' => 'Kuusk',
      'Vanus' => 15,
      'Klass' => 9
  )
);

echo '<pre>';
print_r($opilased);
echo '<pre>';

foreach ($opilased as $opilane) {
    foreach ($opilane as $element=>$vaartus){
        echo $element.' - '.$vaartus.'<br />';
    }
    echo '----------'.'<br />';
}

/*
 * Katsetamiseks raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund'
 *      )
 * );
 * Loo funktsioon nimega otsiRaamat, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 * Loo funktsioon nimega raamatuteTabel, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed (pealkirja loomiseks võib kasutada eraldi funktsiooni)
 * */

function raamatuteTabel($raamatud){
    echo '<table border="1">';
    $pealkiriValjastatud = 0;
    foreach($raamatud as $raamat){
        echo '<tr>';
        if(!$pealkiriValjastatud){
            $pealkiri = array_keys($raamat);
        foreach ($pealkiri as $nimetus){
            echo '<th>';
            echo $nimetus;
            echo'</th>';
        }
        echo '</tr>';
        $pealkiriValjastatud = true;
        }
        foreach ($raamat as $element => $vaartus) {
             echo '<td>';
             echo $vaartus;
             echo'</td>';
            }
        echo '</tr>';
    }
    echo '</table>';
}


$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);

raamatuteTabel($raamatud);
