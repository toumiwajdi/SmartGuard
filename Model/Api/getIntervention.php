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
    InterventionInfo();
}
function InterventionInfo()
{
    $id = $_POST["id"];
    $res = new InterventionManager();
    $inter = $res->getInterventionInformation($id);
    if (!empty($inter)) {

        header("Content-Type:application/json");
        echo json_encode($inter);
    }
    else {
        header("Content-Type:application/json");
        $tan["error"] = "error";
        echo json_encode($tan);
    }

}