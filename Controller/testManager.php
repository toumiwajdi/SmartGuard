<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 21:59
 */
require_once "../Model/Managers/DoctorManager.php";
$medecin=new DoctorManager();
$array=$medecin->getAll();
var_dump($array);