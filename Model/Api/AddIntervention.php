<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 21:39
 */

if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Classes/Intervention.php';
    require_once path . 'Model/Managers/InterventionManager.php';
    addIntervention();
}
function addIntervention(){
    $rescue_id=$_POST["rescue_id"];
    $commentry=$_POST["commentry"];
    $inter=new Intervention(null,$rescue_id,null,null,null,$commentry);
    $res=new InterventionManager();
    $resultat["res"]=$res->addIntervention($inter);
    echo json_encode($resultat);

}