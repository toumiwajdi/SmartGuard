<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 21:39
 */

if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/SecourAgentManager.php';
    getRecueInfromation();
}
function getRecueInfromation(){
    $id=$_POST["id"];
    $res=new SecourAgentManager();
    $secure=$res->getSecourAgentByWorkId($id);
    header("Content-Type:application/json");
    echo json_encode($secure);

}