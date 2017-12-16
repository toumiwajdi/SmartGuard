<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 30/11/2017
 * Time: 11:17
 */

require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
require_once path . 'Model/Classes/Hospital.php';
require_once path . 'Model/Managers/HospitalManager.php';
$jsondata = file_get_contents('publicsante.json');
$data = json_decode($jsondata, true);
$hopital=new Hospital();
$res=new HospitalManager();
foreach ($data as $hop){
    $hopital->inithosp($hop["type_etab"],$hop["cod_gouv"],$hop["cod_etab"],$hop["lib_etab"],$hop["adresse"],$hop["tel"]);
    $res->addHospital($hopital);


}
