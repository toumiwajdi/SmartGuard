<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 20:23
 */
if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Classes/Rescueagent.php';
    require_once path . 'Model/Managers/SecourAgentManager.php';
    createRescueAgent();
}
function createRescueAgent(){

    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $mail=$_POST["mail"];
    $phone=$_POST["phone"];
    $work_id=$_POST["work_id"];
    $username=$_POST["username"];
    $passwork=$_POST["password"];
    $rescue=new Rescueagent(1,$name,$lastname,$phone,$mail,$username,$passwork,0,1,$work_id);
    $add=new SecourAgentManager();
    $res=$add->addSecourAgent($rescue);
}