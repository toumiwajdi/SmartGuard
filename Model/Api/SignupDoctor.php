<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 20:23
 */
if ($_SERVER['REQUEST_METHOD']=="POST"){
    require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
    require_once path . 'Model/Classes/Doctor.php';
    require_once path . 'Model/Managers/DoctorManager.php';
    createDoctor();
}
function createDoctor(){

    $name=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $mail=$_POST["mail"];
    $phone=$_POST["phone"];
    $work_id=$_POST["work_id"];
    $username=$_POST["username"];
    $passwork=$_POST["password"];
    $doctor=new Doctor(1,$name,$lastname,$phone,$mail,$username,$passwork,0,1,$work_id);
    $add=new DoctorManager();
    if($add->getDoctorByWorkId($work_id)==true){
        $resultat['error']="Work ID allready exist";
        echo json_encode($resultat);
    }
    elseif ($add->getDoctorByMail($mail)){
        $resultat['error']="Mail Allready exist chose another";
        echo json_encode($resultat);
    }
    else{
        $res=$add->addDoctor($doctor);
        $resultat['add']="ok";
        echo json_encode($resultat);
    }
}