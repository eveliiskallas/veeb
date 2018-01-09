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