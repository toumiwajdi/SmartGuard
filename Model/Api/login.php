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
    getRescueLogin();
}
function getRescueLogin(){
    $login=$_POST["login"];
    $password=$_POST["password"];
    $res=new SecourAgentManager();
    $secure=$res->login($login,$password);
    header("Content-Type:application/json");
    if ($secure[0])
    {
        if ($secure[9]==1){
            echo json_encode($secure);
        }
        else
        {
            $resultat['inactive']="Account not active yet please contact smartguard@help.tn";
            echo json_encode($resultat);
        }

    }
    else{
        $resultat['error']="In valid username or password";
        echo json_encode($resultat);
    }
}
