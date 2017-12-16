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
    $hospital=$_POST["hospital"];
    $service=$_POST["service"];
    $id=$_POST["id"];
    $res=new InterventionManager();
    $idh=$res->getHospitalId($hospital)["id"];
    $ids=$res->getServiceId($service)["id"];
    $res->doctorchoice($id,$res->getBlocId($idh,$ids)["id"]);

}