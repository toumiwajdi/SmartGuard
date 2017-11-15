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
    InterventionChoice();
}
function InterventionChoice()
{
    $id = $_POST["id"];
    $res = new InterventionManager();
    echo $id;
    $choice = $res->getChoice($id);
    var_dump($choice);
    if ($choice[0]!=null) {
        $resualt = $res->getChoiceName($choice[0]);
        header("Content-Type:application/json");
        echo json_encode($resualt);
    } else {
        $tan["error"] = "error";
        echo json_encode($tan);
    }

}