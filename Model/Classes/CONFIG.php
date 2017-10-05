<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 30/09/2017
 * Time: 15:41
 */
function getConnexion()
{$db="mysql:host=localhost;dbname=dmse";
    $user="root";
    $pw="";
    $connexion=new PDO($db,$user,$pw);
    return $connexion;

}