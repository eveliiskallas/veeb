<?php
/**
 * Created by PhpStorm.
 * User: eveliis.kallas
 * Date: 17.01.2018
 * Time: 11:08
 */

require_once 'tekst.php';

class vTekst extends tekst
{
    //klassi omadus ehk muutuja
    var $tekstiVarv = '';

    public function __construct($sonad = '', $varv = '')
    {
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }


    function maaraVarv($varv){
        $this->tekstiVarv = $varv;
    }

}