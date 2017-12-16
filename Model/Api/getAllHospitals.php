<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 26/11/2017
 * Time: 14:55
 */




if ($_SERVER['REQUEST_METHOD']=="GET"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/HospitalManager.php';
    getAll();
}
function getAll(){
    $res=new HospitalManager();
    $tab=$res->getAll();
    $i=0;

    if (!empty($tab)) {
        header("Content-Type:application/json");
        foreach ($tab as $hop){
            $resultat[$i]["id"]=$hop["id"];
            $resultat[$i]["name"]=$hop["lib_hop"];
            $i++;
        }
        echo json_encode($resultat);
    }
    else{
        $err["empty"]="There is no in progress intervention thank you";
        header("Content-Type:application/json");
        echo json_encode($err);
    }


}