<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 06/10/2017
 * Time: 17:25
 */

class CONFIG
{
    function getConnexion()
    {   $db="mysql:host=localhost:8888;dbname=smartguard";
        $user="root";
        $pw="";
        $connexion=new PDO($db,$user,$pw);
        return $connexion;

    }

}