<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 13:45
 */

class CONFIGMANAGER
{
    private $cnx; //objet PDO
    function __construct()
    {
        $obj = new config();
        $this->cnx = $obj->getConnexion();
    }
}