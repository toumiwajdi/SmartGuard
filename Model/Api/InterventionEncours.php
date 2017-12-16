<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 26/11/2017
 * Time: 14:55
 */




if ($_SERVER['REQUEST_METHOD']=="GET"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/InterventionManager.php';
    getInterventionIn();
}
function getInterventionIn(){
    $res=new InterventionManager();
    $tab=$res->getInventionCours();

    if (!empty($tab)) {
        header("Content-Type:application/json");
        echo json_encode($tab);
    }
    else{
        $err["empty"]="There is no in progress intervention thank you";
        header("Content-Type:application/json");
        echo json_encode($err);
    }


}