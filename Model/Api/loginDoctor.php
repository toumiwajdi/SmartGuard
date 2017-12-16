<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 21:39
 */

if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Managers/DoctorManager.php';
    getRescueLogin();
}
function getRescueLogin(){
    $login=$_POST["login"];
    $password=$_POST["password"];
    $res=new DoctorManager();
    $doctor=$res->login($login,$password);
    header("Content-Type:application/json");
    if ($doctor[0])
    {
        if ($doctor[9]==1){
            echo json_encode($doctor);
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
