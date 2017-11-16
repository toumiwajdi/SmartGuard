<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 13/11/2017
 * Time: 21:16
 */
if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/InterventionManager.php';
    InterventionDoctor();

}
function InterventionDoctor(){
    $id=$_POST["id"];
    $res=new InterventionManager();
    $doctor=$res->getDoctor($id);
    if ($doctor[0]!=null){
        header("Content-Type:application/json");
        echo json_encode($doctor);
    }
    else{
        $tan["error"]="error";
        echo json_encode($tan);
    }


}