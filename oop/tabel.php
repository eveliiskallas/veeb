<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 15.01.2018
 * Time: 15:07
 */

class tabel
{
    //tegu on klassi muutujatega
    var $pealkirjad = array();
    var $tabeliSisu = array();
    var $veergudeArv;

    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }


}