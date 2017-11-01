<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 31/10/2017
 * Time: 22:46
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
include path . "Model/Managers/PersonManager.php";

$person =new PersonManager();

if (isset($_GET["add"])){
    $work=$_GET["add"];
    $add=$person->approvepending($work);
}
if (isset($_GET["delete"])){
    $work=$_GET["delete"];
    $delete=$person->deletePersonById($work);
}
header("location:approvole.php");
