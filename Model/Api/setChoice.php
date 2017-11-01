<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 21:39
 */

if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/InterventionManager.php';
    setChoiceById();
}
function setChoiceById(){
    $id=$_POST["id"];
    $choice=$_POST["choice"];
    $res=new InterventionManager();
    $res->doctorchoice($id,$choice);
}